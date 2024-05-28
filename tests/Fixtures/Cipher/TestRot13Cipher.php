<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Cipher;

use WBW\Library\Common\Cipher\Rot13Cipher;

/**
 * Test ROT 13 cipher.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Cipher
 */
class TestRot13Cipher extends Rot13Cipher {

    /**
     * {@inheritDoc}
     */
    public static function alphabet(): array {
        return parent::alphabet();
    }
}
