<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider;

use WBW\Library\Symfony\Provider\ThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\TestThemeProviderTrait;

/**
 * Theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class ThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setProvider()
     *
     * @return void
     */
    public function testSetProvider(): void {

        // Set a Theme provider mock.
        $themeProvider = $this->getMockBuilder(ThemeProviderInterface::class)->getMock();

        $obj = new TestThemeProviderTrait();

        $obj->setThemeProvider($themeProvider);
        $this->assertSame($themeProvider, $obj->getThemeProvider());
    }
}
