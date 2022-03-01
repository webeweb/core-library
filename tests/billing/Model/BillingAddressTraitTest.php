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
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillingAddressTrait;

/**
 * Billing address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class BillingAddressTraitTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/BillingAddressTraitTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestBillingAddressTrait();
        $obj->setBillingAddressAddressee("addressee");
        $obj->setBillingAddressHouseNumber("houseNumber");
        $obj->setBillingAddressStreetName("streetName");
        $obj->setBillingAddressPostalCode("postalCode");
        $obj->setBillingAddressLocation("location");
        $obj->setBillingAddressCountry("country");

        $res = $obj->jsonSerialize();
        $this->assertCount(6, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setBillingAddressAddressee()
     *
     * @return void
     */
    public function testSetBillingAddressAddressee(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressAddressee("billingAddressAddressee");
        $this->assertEquals("billingAddressAddressee", $obj->getBillingAddressAddressee());
    }

    /**
     * Tests setBillingAddressCountry()
     *
     * @return void
     */
    public function testSetBillingAddressCountry(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressCountry("billingAddressCountry");
        $this->assertEquals("billingAddressCountry", $obj->getBillingAddressCountry());
    }

    /**
     * Tests setBillingAddressHouseNumber()
     *
     * @return void
     */
    public function testSetBillingAddressHouseNumber(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressHouseNumber("billingAddressHouseNumber");
        $this->assertEquals("billingAddressHouseNumber", $obj->getBillingAddressHouseNumber());
    }

    /**
     * Tests setBillingAddressLocation()
     *
     * @return void
     */
    public function testSetBillingAddressLocation(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressLocation("billingAddressLocation");
        $this->assertEquals("billingAddressLocation", $obj->getBillingAddressLocation());
    }

    /**
     * Tests setBillingAddressPostalCode()
     *
     * @return void
     */
    public function testSetBillingAddressPostalCode(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressPostalCode("billingAddressPostalCode");
        $this->assertEquals("billingAddressPostalCode", $obj->getBillingAddressPostalCode());
    }

    /**
     * Tests setBillingAddressStreetName()
     *
     * @return void
     */
    public function testSetBillingAddressStreetName(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressStreetName("billingAddressStreetName");
        $this->assertEquals("billingAddressStreetName", $obj->getBillingAddressStreetName());
    }
}
