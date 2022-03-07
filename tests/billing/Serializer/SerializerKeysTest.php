<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Serializer;

use WBW\Library\Billing\Serializer\SerializerKeys;
use WBW\Library\Billing\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("billable", SerializerKeys::BILLABLE);
        $this->assertEquals("billingAddressAddressee", SerializerKeys::BILLING_ADDRESS_ADDRESSEE);
        $this->assertEquals("billingAddressCountry", SerializerKeys::BILLING_ADDRESS_COUNTRY);
        $this->assertEquals("billingAddressHouseNumber", SerializerKeys::BILLING_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("billingAddressLocation", SerializerKeys::BILLING_ADDRESS_LOCATION);
        $this->assertEquals("billingAddressPostalCode", SerializerKeys::BILLING_ADDRESS_POSTAL_CODE);
        $this->assertEquals("billingAddressStreetName", SerializerKeys::BILLING_ADDRESS_STREET_NAME);
        $this->assertEquals("deliveryAddressAddressee", SerializerKeys::DELIVERY_ADDRESS_ADDRESSEE);
        $this->assertEquals("deliveryAddressCountry", SerializerKeys::DELIVERY_ADDRESS_COUNTRY);
        $this->assertEquals("deliveryAddressHouseNumber", SerializerKeys::DELIVERY_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("deliveryAddressLocation", SerializerKeys::DELIVERY_ADDRESS_LOCATION);
        $this->assertEquals("deliveryAddressPostalCode", SerializerKeys::DELIVERY_ADDRESS_POSTAL_CODE);
        $this->assertEquals("deliveryAddressStreetName", SerializerKeys::DELIVERY_ADDRESS_STREET_NAME);
        $this->assertEquals("details", SerializerKeys::DETAILS);
        $this->assertEquals("expirationDate", SerializerKeys::EXPIRATION_DATE);
        $this->assertEquals("sendingAddressAddressee", SerializerKeys::SENDING_ADDRESS_ADDRESSEE);
        $this->assertEquals("sendingAddressCountry", SerializerKeys::SENDING_ADDRESS_COUNTRY);
        $this->assertEquals("sendingAddressHouseNumber", SerializerKeys::SENDING_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("sendingAddressLocation", SerializerKeys::SENDING_ADDRESS_LOCATION);
        $this->assertEquals("sendingAddressPostalCode", SerializerKeys::SENDING_ADDRESS_POSTAL_CODE);
        $this->assertEquals("sendingAddressStreetName", SerializerKeys::SENDING_ADDRESS_STREET_NAME);
    }
}
