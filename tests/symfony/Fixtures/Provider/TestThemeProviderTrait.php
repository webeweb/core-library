<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Provider;

use WBW\Library\Symfony\Provider\ThemeProviderTrait;

/**
 * Test theme provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Provider
 */
class TestThemeProviderTrait {

    use ThemeProviderTrait {
        setThemeProvider as public;
    }
}
