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

use WBW\Library\Symfony\Provider\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Theme\TestBreadcrumbsThemeProviderTrait;

/**
 * Breadcrumbs theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
 */
class BreadcrumbsThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setBreadcrumbsThemeProvider()
     *
     * @return void
     */
    public function testSetBreadcrumbsThemeProvider(): void {

        // Set a Breadcrumbs theme provider mock.
        $breadcrumbsThemeProvider = $this->getMockBuilder(BreadcrumbsThemeProviderInterface::class)->getMock();

        $obj = new TestBreadcrumbsThemeProviderTrait();

        $obj->setBreadcrumbsThemeProvider($breadcrumbsThemeProvider);
        $this->assertSame($breadcrumbsThemeProvider, $obj->getBreadcrumbsThemeProvider());
    }
}
