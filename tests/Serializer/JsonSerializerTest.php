<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

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

        $arg = [
            new TestJsonSerializable(),
            new TestJsonSerializable(),
            null,
        ];

        $this->assertNull(JsonSerializer::serializeArray(null));
        $this->assertEquals([], JsonSerializer::serializeArray([]));
        $this->assertEquals([[], []], JsonSerializer::serializeArray($arg));
    }

    /**
     * Test sortArray()
     *
     * @return void
     */
    public function testSortArray(): void {

        $arg = [
            "comment"           => "comment",
            "discountTotal"     => 0.01,
            "excludingVatTotal" => 0.02,
            "includingVatTotal" => 0.03,
            "label"             => "label",
            "quantity"          => 0.04,
            "reference"         => "reference",
            "vatTotal"          => 0.05,
            "discountAmount"    => 0.06,
            "discountRate"      => 0.07,
            "excludingVatPrice" => 0.08,
            "includingVatPrice" => 0.09,
            "vatAmount"         => 0.10,
            "vatRate"           => 0.11,
        ];
        $exp = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonSerializerTest.testSortArray.json");

        $this->assertNull(JsonSerializer::sortArray(null));
        $this->assertEquals($exp, json_encode(JsonSerializer::sortArray($arg), JSON_PRETTY_PRINT) . "\n");
    }
}
