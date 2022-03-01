<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Factory;

use WBW\Library\Billing\Factory\DeliveryAddressFactory;
use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Model\TestDeliveryAddressTrait;

/**
 * Delivery address factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Factory
 */
class DeliveryAddressFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new TestDeliveryAddressTrait();
        $obj->setDeliveryAddressAddressee("deliveryAddressAddressee");
        $obj->setDeliveryAddressCountry("deliveryAddressCountry");
        $obj->setDeliveryAddressHouseNumber("deliveryAddressHouseNumber");
        $obj->setDeliveryAddressLocation("deliveryAddressLocation");
        $obj->setDeliveryAddressPostalCode("deliveryAddressPostalCode");
        $obj->setDeliveryAddressStreetName("deliveryAddressStreetName");

        $res = DeliveryAddressFactory::copy($obj, new TestDeliveryAddressTrait());
        $this->assertEquals($obj->getDeliveryAddressAddressee(), $res->getDeliveryAddressAddressee());
        $this->assertEquals($obj->getDeliveryAddressCountry(), $res->getDeliveryAddressCountry());
        $this->assertEquals($obj->getDeliveryAddressHouseNumber(), $res->getDeliveryAddressHouseNumber());
        $this->assertEquals($obj->getDeliveryAddressLocation(), $res->getDeliveryAddressLocation());
        $this->assertEquals($obj->getDeliveryAddressPostalCode(), $res->getDeliveryAddressPostalCode());
        $this->assertEquals($obj->getDeliveryAddressStreetName(), $res->getDeliveryAddressStreetName());
    }
}
