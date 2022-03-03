<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Provider\Color;

use WBW\Library\Symfony\Provider\Color\DeepPurpleColorProviderTrait;

/**
 * Test deep purple color provider trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Provider\Color
 */
class TestDeepPurpleColorProviderTrait {

    use DeepPurpleColorProviderTrait {
        setDeepPurpleColorProvider as public;
    }
}
