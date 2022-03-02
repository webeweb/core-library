<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Fixtures\Strings;

use WBW\Library\Traits\Strings\StringRedirectUrlTrait;

/**
 * Test string redirect URL trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Fixtures\Strings
 */
class TestStringRedirectUrlTrait {

    use StringRedirectUrlTrait {
        setRedirectUrl as public;
    }
}
