<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Serializer;

use WBW\Library\Common\Serializer\JsonSerializer;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Serializer\TestJsonSerializable;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Helper
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeArray()
     *
     * @return void
     */
    public function testSerializeArray(): void {

        $models = [
            new TestJsonSerializable(),
            new TestJsonSerializable(),
            null,
        ];

        $res = JsonSerializer::serializeArray($models);
        $this->assertEquals([[], []], $res);
    }
}
