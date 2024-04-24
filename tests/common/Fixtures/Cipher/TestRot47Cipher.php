<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Cipher;

use WBW\Library\Common\Cipher\Rot47Cipher;

/**
 * Test ROT 47 cipher.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Cipher
 */
class TestRot47Cipher extends Rot47Cipher {

    /**
     * {@inheritDoc}
     */
    public static function alphabet(): array {
        return parent::alphabet();
    }
}
