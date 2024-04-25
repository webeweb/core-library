<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Fixtures\Component\Color;

use WBW\Library\Widget\Component\Color\DeepOrangeColorTrait;

/**
 * Test deep orange color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Component\Color
 */
class TestDeepOrangeColorTrait {

    use DeepOrangeColorTrait {
        setDeepOrangeColor as public;
    }
}
