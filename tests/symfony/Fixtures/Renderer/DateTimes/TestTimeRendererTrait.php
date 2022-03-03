<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Renderer\DateTimes;

use WBW\Library\Symfony\Renderer\DateTimes\TimeRendererTrait;

/**
 * Test time renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Renderer\DateTimes
 */
class TestTimeRendererTrait {

    use TimeRendererTrait {
        renderTime as public;
    }
}
