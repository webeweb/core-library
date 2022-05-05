<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Tests\Helper\Fixtures;

use WBW\Library\Maths\Helper\Rot47Helper;

/**
 * Test ROT 47 helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper\Fixtures
 */
class TestRot47Helper extends Rot47Helper {

    /**
     * {@inheritdoc}
     */
    public static function alphabet(): array {
        return parent::alphabet();
    }
}
