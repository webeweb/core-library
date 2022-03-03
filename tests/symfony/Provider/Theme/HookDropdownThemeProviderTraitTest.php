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

use WBW\Library\Symfony\Provider\Theme\HookDropdownThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Theme\TestHookDropdownThemeProviderTrait;

/**
 * Hook dropdown theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
 */
class HookDropdownThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setHookDropdownThemeProvider()
     *
     * @return void
     */
    public function testSetHookDropdownThemeProvider(): void {

        // Set an Hook dropdown theme provider mock.
        $hookDropdownThemeProvider = $this->getMockBuilder(HookDropdownThemeProviderInterface::class)->getMock();

        $obj = new TestHookDropdownThemeProviderTrait();

        $obj->setHookDropdownThemeProvider($hookDropdownThemeProvider);
        $this->assertSame($hookDropdownThemeProvider, $obj->getHookDropdownThemeProvider());
    }
}
