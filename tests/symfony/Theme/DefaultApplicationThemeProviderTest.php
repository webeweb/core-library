<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Theme;

use DateTime;
use WBW\Library\Symfony\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Theme\DefaultApplicationThemeProvider;

/**
 * Default application theme provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Theme
 */
class DefaultApplicationThemeProviderTest extends AbstractTestCase {

    /**
     * Tests getDescription()
     *
     * @return void
     */
    public function testGetDescription(): void {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("Core library", $obj->getDescription());
    }

    /**
     * Tests getHome()
     *
     * @return void
     */
    public function testGetHome(): void {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("/", $obj->getHome());
    }

    /**
     * Tests getName()
     *
     * @return void
     */
    public function testGetName(): void {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("Core<b>library</b>", $obj->getName());
    }

    /**
     * Tests getRoute()
     *
     * @return void
     */
    public function testGetRoute(): void {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("/", $obj->getRoute());
    }

    /**
     * Tests getTitle()
     *
     * @return void
     */
    public function testGetTitle(): void {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("Core library", $obj->getTitle());
    }

    /**
     * Tests getVersion()
     *
     * @return void
     */
    public function testGetVersion(): void {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("dev-master", $obj->getVersion());
    }

    /**
     * Tests getYear()
     *
     * @return void
     */
    public function testGetYear(): void {

        // Set a Date/time mock.
        $now = new DateTime();

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("2018-{$now->format("Y")}", $obj->getYear());

        $this->assertEquals("2019-{$now->format("Y")}", $obj->getYear("2019"));
        $this->assertEquals("2020-{$now->format("Y")}", $obj->getYear("2020"));
        $this->assertEquals("{$now->format("Y")}", $obj->getYear($now->format("Y")));
        $this->assertEquals("{$now->format("Y")}", $obj->getYear($now->format("Y") + 1));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertInstanceOf(ApplicationThemeProviderInterface::class, $obj);
    }
}
