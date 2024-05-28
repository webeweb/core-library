<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\Billing;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestBillingAddressTrait;

/**
 * Billing address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Billing
 */
class BillingAddressTraitTest extends AbstractTestCase {

    /**
     * Test setBillingAddressAddressee()
     *
     * @return void
     */
    public function testSetBillingAddressAddressee(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressAddressee("billingAddressAddressee");
        $this->assertEquals("billingAddressAddressee", $obj->getBillingAddressAddressee());
    }

    /**
     * Test setBillingAddressCountry()
     *
     * @return void
     */
    public function testSetBillingAddressCountry(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressCountry("billingAddressCountry");
        $this->assertEquals("billingAddressCountry", $obj->getBillingAddressCountry());
    }

    /**
     * Test setBillingAddressHouseNumber()
     *
     * @return void
     */
    public function testSetBillingAddressHouseNumber(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressHouseNumber("billingAddressHouseNumber");
        $this->assertEquals("billingAddressHouseNumber", $obj->getBillingAddressHouseNumber());
    }

    /**
     * Test setBillingAddressLocation()
     *
     * @return void
     */
    public function testSetBillingAddressLocation(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressLocation("billingAddressLocation");
        $this->assertEquals("billingAddressLocation", $obj->getBillingAddressLocation());
    }

    /**
     * Test setBillingAddressPostalCode()
     *
     * @return void
     */
    public function testSetBillingAddressPostalCode(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressPostalCode("billingAddressPostalCode");
        $this->assertEquals("billingAddressPostalCode", $obj->getBillingAddressPostalCode());
    }

    /**
     * Test setBillingAddressStreetName()
     *
     * @return void
     */
    public function testSetBillingAddressStreetName(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressStreetName("billingAddressStreetName");
        $this->assertEquals("billingAddressStreetName", $obj->getBillingAddressStreetName());
    }
}
