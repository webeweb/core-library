<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\Billing;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestSendingAddressTrait;

/**
 * Sending address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class SendingAddressTraitTest extends AbstractTestCase {

    /**
     * Test setSendingAddressAddressee()
     *
     * @return void
     */
    public function testSetSendingAddressAddressee(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressAddressee("sendingAddressAddressee");
        $this->assertEquals("sendingAddressAddressee", $obj->getSendingAddressAddressee());
    }

    /**
     * Test setSendingAddressCountry()
     *
     * @return void
     */
    public function testSetSendingAddressCountry(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressCountry("sendingAddressCountry");
        $this->assertEquals("sendingAddressCountry", $obj->getSendingAddressCountry());
    }

    /**
     * Test setSendingAddressHouseNumber()
     *
     * @return void
     */
    public function testSetSendingAddressHouseNumber(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressHouseNumber("sendingAddressHouseNumber");
        $this->assertEquals("sendingAddressHouseNumber", $obj->getSendingAddressHouseNumber());
    }

    /**
     * Test setSendingAddressLocation()
     *
     * @return void
     */
    public function testSetSendingAddressLocation(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressLocation("sendingAddressLocation");
        $this->assertEquals("sendingAddressLocation", $obj->getSendingAddressLocation());
    }

    /**
     * Test setSendingAddressPostalCode()
     *
     * @return void
     */
    public function testSetSendingAddressPostalCode(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressPostalCode("sendingAddressPostalCode");
        $this->assertEquals("sendingAddressPostalCode", $obj->getSendingAddressPostalCode());
    }

    /**
     * Test setSendingAddressStreetName()
     *
     * @return void
     */
    public function testSetSendingAddressStreetName(): void {

        $obj = new TestSendingAddressTrait();

        $obj->setSendingAddressStreetName("sendingAddressStreetName");
        $this->assertEquals("sendingAddressStreetName", $obj->getSendingAddressStreetName());
    }
}
