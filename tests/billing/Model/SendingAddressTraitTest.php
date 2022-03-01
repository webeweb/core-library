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
use WBW\Library\Billing\Tests\Fixtures\Model\TestSendingAddressTrait;

/**
 * Sending address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class SendingAddressTraitTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/SendingAddressTraitTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestSendingAddressTrait();
        $obj->setSendingAddressAddressee("addressee");
        $obj->setSendingAddressHouseNumber("houseNumber");
        $obj->setSendingAddressStreetName("streetName");
        $obj->setSendingAddressPostalCode("postalCode");
        $obj->setSendingAddressLocation("location");
        $obj->setSendingAddressCountry("country");

        $res = $obj->jsonSerialize();
        $this->assertCount(6, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setSendingAddressAddressee()
     *
     * @return void
     */
    public function testSetSendingAddressAddressee(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressAddressee("sendingAddressAddressee");
        $this->assertEquals("sendingAddressAddressee", $obj->getSendingAddressAddressee());
    }

    /**
     * Tests setSendingAddressCountry()
     *
     * @return void
     */
    public function testSetSendingAddressCountry(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressCountry("sendingAddressCountry");
        $this->assertEquals("sendingAddressCountry", $obj->getSendingAddressCountry());
    }

    /**
     * Tests setSendingAddressHouseNumber()
     *
     * @return void
     */
    public function testSetSendingAddressHouseNumber(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressHouseNumber("sendingAddressHouseNumber");
        $this->assertEquals("sendingAddressHouseNumber", $obj->getSendingAddressHouseNumber());
    }

    /**
     * Tests setSendingAddressLocation()
     *
     * @return void
     */
    public function testSetSendingAddressLocation(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressLocation("sendingAddressLocation");
        $this->assertEquals("sendingAddressLocation", $obj->getSendingAddressLocation());
    }

    /**
     * Tests setSendingAddressPostalCode()
     *
     * @return void
     */
    public function testSetSendingAddressPostalCode(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressPostalCode("sendingAddressPostalCode");
        $this->assertEquals("sendingAddressPostalCode", $obj->getSendingAddressPostalCode());
    }

    /**
     * Tests setSendingAddressStreetName()
     *
     * @return void
     */
    public function testSetSendingAddressStreetName(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressStreetName("sendingAddressStreetName");
        $this->assertEquals("sendingAddressStreetName", $obj->getSendingAddressStreetName());
    }
}
