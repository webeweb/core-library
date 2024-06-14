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
            "vatTotal"          => 0.04,
            "updatedAt"         => [
                "timezone"      => "UTC",
                "date"          => "2024-06-14 11:30:02.000000",
                "timezone_type" => 3,
            ],
            "reference"         => "reference",
            "parent"            => null,
            "number"            => "number",
            "includingVatTotal" => 0.04,
            "excludingVatTotal" => 0.03,
            "discountTotal"     => 0.02,
            "discountRate"      => 0.01,
            "details"           => [
                [
                    "comment"           => "comment",
                    "discountTotal"     => 0.03,
                    "excludingVatTotal" => 0.05,
                    "includingVatTotal" => 0.07,
                    "label"             => "label",
                    "quantity"          => 0.08,
                    "reference"         => "reference",
                    "vatTotal"          => 0.11,
                    "discountAmount"    => 0.01,
                    "discountRate"      => 0.02,
                    "excludingVatPrice" => 0.04,
                    "includingVatPrice" => 0.06,
                    "vatAmount"         => 0.09,
                    "vatRate"           => 0.1,

                ],
            ],
            "date"              => [
                "timezone"      => "UTC",
                "timezone_type" => 3,
                "date"          => "2024-06-14 11:30:01.000000",
            ],
            "createdAt"         => [
                "timezone_type" => 3,
                "timezone"      => "UTC",
                "date"          => "2024-06-14 11:30:00.000000",
            ],
            "comment"           => "comment",
        ];
        $exp = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonSerializerTest.testSortArray.json");

        $this->assertNull(JsonSerializer::sortArray(null));
        $this->assertEquals($exp, json_encode(JsonSerializer::sortArray($arg), JSON_PRETTY_PRINT) . "\n");
    }
}
