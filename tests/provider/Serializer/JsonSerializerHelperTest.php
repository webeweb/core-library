<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Serializer;

use WBW\Library\Provider\Serializer\JsonSerializerHelper;
use WBW\Library\Provider\Tests\AbstractTestCase;
use WBW\Library\Provider\Tests\Fixtures\Model\TestJsonSerializable;

/**
 * JSON serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Serializer
 */
class JsonSerializerHelperTest extends AbstractTestCase {

    /**
     * Tests the serializeArray() method.
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
        $this->assertEquals([[], [], []], $res);
    }
}