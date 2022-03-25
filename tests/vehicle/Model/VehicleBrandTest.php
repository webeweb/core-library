<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Tests\Model;

use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Vehicle\Model\VehicleBrand;
use WBW\Library\Vehicle\Model\VehicleBrandInterface;
use WBW\Library\Vehicle\Tests\AbstractTestCase;

/**
 * Vehicle brand test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Tests\Model
 */
class VehicleBrandTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/VehicleBrandTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new VehicleBrand();
        $obj->setLabel(BaseSerializerKeys::LABEL);

        $res = $obj->jsonSerialize();
        $this->assertCount(1, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VehicleBrand();

        $this->assertInstanceOf(VehicleBrandInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getLabel());
    }
}
