<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Component;

use WBW\Library\Symfony\Component\IconInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Component\TestIcon;

/**
 * Abstract icon test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component
 */
class AbstractIconTest extends AbstractTestCase {

    /**
     * Tests setStyle()
     *
     * @return void
     */
    public function testSetStyle(): void {

        $obj = new TestIcon();

        $obj->setStyle("style");
        $this->assertEquals("style", $obj->getStyle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestIcon();

        $this->assertInstanceOf(IconInterface::class, $obj);

        $this->assertNull($obj->getName());

        $this->assertNull($obj->getStyle());
    }
}
