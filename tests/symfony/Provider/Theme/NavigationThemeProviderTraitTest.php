<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Theme;

use WBW\Library\Symfony\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Theme\TestNavigationThemeProviderTrait;

/**
 * Navigation theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
 */
class NavigationThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setNavigationThemeProvider()
     *
     * @return void
     */
    public function testSetNavigationThemeProvider(): void {

        // Set a Navigation theme provider mock.
        $navigationThemeProvider = $this->getMockBuilder(NavigationThemeProviderInterface::class)->getMock();

        $obj = new TestNavigationThemeProviderTrait();

        $obj->setNavigationThemeProvider($navigationThemeProvider);
        $this->assertSame($navigationThemeProvider, $obj->getNavigationThemeProvider());
    }
}
