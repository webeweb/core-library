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

use WBW\Library\Symfony\Assets\Navigation\NavigationTree;
use WBW\Library\Symfony\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Theme\DefaultNavigationThemeProvider;

/**
 * Default navigation theme provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Theme
 */
class DefaultNavigationThemeProviderTest extends AbstractTestCase {

    /**
     * Tests getTree()
     *
     * @return void
     */
    public function testGetTree(): void {

        $obj = new DefaultNavigationThemeProvider();

        $this->assertInstanceOf(NavigationTree::class, $obj->getTree());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultNavigationThemeProvider();

        $this->assertInstanceOf(NavigationThemeProviderInterface::class, $obj);
    }
}
