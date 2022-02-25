<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Helper;

use WBW\Library\Serializer\Helper\JsonSerializerHelper;
use WBW\Library\Serializer\Tests\AbstractTestCase;
use WBW\Library\Serializer\Tests\Fixtures\Model\TestJsonSerializable;

/**
 * JSON serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Helper
 */
class JsonSerializerHelperTest extends AbstractTestCase {

    /**
     * Tests serializeArray()
     *
     * @return void
     */
    public function testSerializeArray(): void {

        $models = [
            new TestJsonSerializable(),
            new TestJsonSerializable(),
            null,
        ];

        $res = JsonSerializerHelper::jsonSerializeArray($models);
        $this->assertEquals([[], []], $res);
    }
}
