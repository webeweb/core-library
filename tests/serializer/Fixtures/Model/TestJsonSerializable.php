<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Fixtures\Model;

use JsonSerializable;

/**
 * Test JSON serializable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Fixtures\Model
 */
class TestJsonSerializable implements JsonSerializable {

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return [];
    }
}
