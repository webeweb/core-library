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

use WBW\Library\Symfony\Provider\Theme\FooterThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Theme\TestFooterThemeProviderTrait;

/**
 * Footer theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
 */
class FooterThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setFooterThemeProvider()
     *
     * @return void
     */
    public function testSetFooterThemeProvider(): void {

        // Set a Footer theme provider mock.
        $footerThemeProvider = $this->getMockBuilder(FooterThemeProviderInterface::class)->getMock();

        $obj = new TestFooterThemeProviderTrait();

        $obj->setFooterThemeProvider($footerThemeProvider);
        $this->assertSame($footerThemeProvider, $obj->getFooterThemeProvider());
    }
}
