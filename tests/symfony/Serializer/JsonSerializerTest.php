<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Serializer;

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestSelect2OptionInterface;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Serializer
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Tests serializeSelect2Options()
     *
     * @return void
     */
    public function testSerializeSelect2Options(): void {

        $data = file_get_contents(__DIR__ . "/JsonSerializerTest.testSerializeSelect2Options.json");
        $json = json_decode($data, true);

        $models = [
            new TestSelect2OptionInterface("1", "option1"),
            new TestSelect2OptionInterface("2", "option2"),
            new TestSelect2OptionInterface("3", "option3"),
        ];

        $res = JsonSerializer::serializeSelect2Options($models);
        $this->assertCount(3, $res);

        $this->assertEquals($json, $res);
    }
}
