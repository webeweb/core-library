<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Theme;

use WBW\Library\Symfony\Provider\Assets\Theme\BreadcrumbsThemeProviderTrait;

/**
 * Test breadcrumbs theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Theme
 */
class TestBreadcrumbsThemeProviderTrait {

    use BreadcrumbsThemeProviderTrait {
        setBreadcrumbsThemeProvider as public;
    }
}
