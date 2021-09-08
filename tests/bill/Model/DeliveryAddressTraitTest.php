<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Model;

use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestDeliveryAddressTrait;

/**
 * Delivery address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class DeliveryAddressTraitTest extends AbstractTestCase {

    /**
     * Tests the setDeliveryAddressAddressee() method.
     *
     * @return void
     */
    public function testSetDeliveryAddressAddressee(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressAddressee("deliveryAddressAddressee");
        $this->assertEquals("deliveryAddressAddressee", $obj->getDeliveryAddressAddressee());
    }

    /**
     * Tests the setDeliveryAddressCountry() method.
     *
     * @return void
     */
    public function testSetDeliveryAddressCountry(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressCountry("deliveryAddressCountry");
        $this->assertEquals("deliveryAddressCountry", $obj->getDeliveryAddressCountry());
    }

    /**
     * Tests the setDeliveryAddressHouseNumber() method.
     *
     * @return void
     */
    public function testSetDeliveryAddressHouseNumber(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressHouseNumber("deliveryAddressHouseNumber");
        $this->assertEquals("deliveryAddressHouseNumber", $obj->getDeliveryAddressHouseNumber());
    }

    /**
     * Tests the setDeliveryAddressLocation() method.
     *
     * @return void
     */
    public function testSetDeliveryAddressLocation(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressLocation("deliveryAddressLocation");
        $this->assertEquals("deliveryAddressLocation", $obj->getDeliveryAddressLocation());
    }

    /**
     * Tests the setDeliveryAddressPostalCode() method.
     *
     * @return void
     */
    public function testSetDeliveryAddressPostalCode(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressPostalCode("deliveryAddressPostalCode");
        $this->assertEquals("deliveryAddressPostalCode", $obj->getDeliveryAddressPostalCode());
    }

    /**
     * Tests the setDeliveryAddressStreetName() method.
     *
     * @return void
     */
    public function testSetDeliveryAddressStreetName(): void {

        $obj = new TestDeliveryAddressTrait();

        $obj->setDeliveryAddressStreetName("deliveryAddressStreetName");
        $this->assertEquals("deliveryAddressStreetName", $obj->getDeliveryAddressStreetName());
    }
}