<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Model;

use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Model\TestDeliveryAddressTrait;

/**
 * Delivery address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class DeliveryAddressTraitTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/DeliveryAddressTraitTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestDeliveryAddressTrait();
        $obj->setDeliveryAddressAddressee("addressee");
        $obj->setDeliveryAddressHouseNumber("houseNumber");
        $obj->setDeliveryAddressStreetName("streetName");
        $obj->setDeliveryAddressPostalCode("postalCode");
        $obj->setDeliveryAddressLocation("location");
        $obj->setDeliveryAddressCountry("country");

        $res = $obj->jsonSerialize();
        $this->assertCount(6, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Test setDeliveryAddressAddressee()
     *
     * @return void
     */
    public function testSetDeliveryAddressAddressee(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressAddressee("deliveryAddressAddressee");
        $this->assertEquals("deliveryAddressAddressee", $obj->getDeliveryAddressAddressee());
    }

    /**
     * Test setDeliveryAddressCountry()
     *
     * @return void
     */
    public function testSetDeliveryAddressCountry(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressCountry("deliveryAddressCountry");
        $this->assertEquals("deliveryAddressCountry", $obj->getDeliveryAddressCountry());
    }

    /**
     * Test setDeliveryAddressHouseNumber()
     *
     * @return void
     */
    public function testSetDeliveryAddressHouseNumber(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressHouseNumber("deliveryAddressHouseNumber");
        $this->assertEquals("deliveryAddressHouseNumber", $obj->getDeliveryAddressHouseNumber());
    }

    /**
     * Test setDeliveryAddressLocation()
     *
     * @return void
     */
    public function testSetDeliveryAddressLocation(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressLocation("deliveryAddressLocation");
        $this->assertEquals("deliveryAddressLocation", $obj->getDeliveryAddressLocation());
    }

    /**
     * Test setDeliveryAddressPostalCode()
     *
     * @return void
     */
    public function testSetDeliveryAddressPostalCode(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressPostalCode("deliveryAddressPostalCode");
        $this->assertEquals("deliveryAddressPostalCode", $obj->getDeliveryAddressPostalCode());
    }

    /**
     * Test setDeliveryAddressStreetName()
     *
     * @return void
     */
    public function testSetDeliveryAddressStreetName(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressStreetName("deliveryAddressStreetName");
        $this->assertEquals("deliveryAddressStreetName", $obj->getDeliveryAddressStreetName());
    }
}
