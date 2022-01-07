<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Factory;

use WBW\Library\Bill\Factory\SendingAddressFactory;
use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestSendingAddressTrait;

/**
 * Sending address factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Factory
 */
class SendingAddressFactoryTest extends AbstractTestCase {

    /**
     * Tests the copy() method.
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new TestSendingAddressTrait();
        $obj->setSendingAddressAddressee("sendingAddressAddressee");
        $obj->setSendingAddressCountry("sendingAddressCountry");
        $obj->setSendingAddressHouseNumber("sendingAddressHouseNumber");
        $obj->setSendingAddressLocation("sendingAddressLocation");
        $obj->setSendingAddressPostalCode("sendingAddressPostalCode");
        $obj->setSendingAddressStreetName("sendingAddressStreetName");

        $res = SendingAddressFactory::copy($obj, new TestSendingAddressTrait());
        $this->assertEquals($obj->getSendingAddressAddressee(), $res->getSendingAddressAddressee());
        $this->assertEquals($obj->getSendingAddressCountry(), $res->getSendingAddressCountry());
        $this->assertEquals($obj->getSendingAddressHouseNumber(), $res->getSendingAddressHouseNumber());
        $this->assertEquals($obj->getSendingAddressLocation(), $res->getSendingAddressLocation());
        $this->assertEquals($obj->getSendingAddressPostalCode(), $res->getSendingAddressPostalCode());
        $this->assertEquals($obj->getSendingAddressStreetName(), $res->getSendingAddressStreetName());
    }
}