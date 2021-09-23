<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "billable".
     *
     * @var string
     */
    const BILLABLE = "billable";

    /**
     * Serializer key "billing address addressee".
     *
     * @var string
     */
    const BILLING_ADDRESS_ADDRESSEE = "billingAddressAddressee";

    /**
     * Serializer key "billing address country".
     *
     * @var string
     */
    const BILLING_ADDRESS_COUNTRY = "billingAddressCountry";

    /**
     * Serializer key "billing address house number".
     *
     * @var string
     */
    const BILLING_ADDRESS_HOUSE_NUMBER = "billingAddressHouseNumber";

    /**
     * Serializer key "billing address location".
     *
     * @var string
     */
    const BILLING_ADDRESS_LOCATION = "billingAddressLocation";

    /**
     * Serializer key "billing address postal code".
     *
     * @var string
     */
    const BILLING_ADDRESS_POSTAL_CODE = "billingAddressPostalCode";

    /**
     * Serializer key "billing address street name".
     *
     * @var string
     */
    const BILLING_ADDRESS_STREET_NAME = "billingAddressStreetName";

    /**
     * Serializer key "comment".
     *
     * @var string
     */
    const COMMENT = "comment";

    /**
     * Serializer key "delivery address addressee".
     *
     * @var string
     */
    const DELIVERY_ADDRESS_ADDRESSEE = "deliveryAddressAddressee";

    /**
     * Serializer key "delivery address country".
     *
     * @var string
     */
    const DELIVERY_ADDRESS_COUNTRY = "deliveryAddressCountry";

    /**
     * Serializer key "delivery address house number".
     *
     * @var string
     */
    const DELIVERY_ADDRESS_HOUSE_NUMBER = "deliveryAddressHouseNumber";

    /**
     * Serializer key "delivery address location".
     *
     * @var string
     */
    const DELIVERY_ADDRESS_LOCATION = "deliveryAddressLocation";

    /**
     * Serializer key "delivery address postal code".
     *
     * @var string
     */
    const DELIVERY_ADDRESS_POSTAL_CODE = "deliveryAddressPostalCode";

    /**
     * Serializer key "delivery address street name".
     *
     * @var string
     */
    const DELIVERY_ADDRESS_STREET_NAME = "deliveryAddressStreetName";

    /**
     * Serializer key "discount amount".
     *
     * @var string
     */
    const DISCOUNT_AMOUNT = "discountAmount";

    /**
     * Serializer key "discount rate".
     *
     * @var string
     */
    const DISCOUNT_RATE = "discountRate";

    /**
     * Serializer key "discount total".
     *
     * @var string
     */
    const DISCOUNT_TOTAL = "discountTotal";

    /**
     * Serializer key "excluding VAT price".
     *
     * @var string
     */
    const EXCLUDING_VAT_PRICE = "excludingVatPrice";

    /**
     * Serializer key "excluding VAT total".
     *
     * @var string
     */
    const EXCLUDING_VAT_TOTAL = "excludingVatTotal";

    /**
     * Serializer key "including VAT price".
     *
     * @var string
     */
    const INCLUDING_VAT_PRICE = "includingVatPrice";

    /**
     * Serializer key "including VAT total".
     *
     * @var string
     */
    const INCLUDING_VAT_TOTAL = "includingVatTotal";

    /**
     * Serializer key "label".
     *
     * @var string
     */
    const LABEL = "label";

    /**
     * Serializer key "quantity".
     *
     * @var string
     */
    const QUANTITY = "quantity";

    /**
     * Serializer key "reference".
     *
     * @var string
     */
    const REFERENCE = "reference";

    /**
     * Serializer key "sending address addressee".
     *
     * @var string
     */
    const SENDING_ADDRESS_ADDRESSEE = "sendingAddressAddressee";

    /**
     * Serializer key "sending address country".
     *
     * @var string
     */
    const SENDING_ADDRESS_COUNTRY = "sendingAddressCountry";

    /**
     * Serializer key "sending address house number".
     *
     * @var string
     */
    const SENDING_ADDRESS_HOUSE_NUMBER = "sendingAddressHouseNumber";

    /**
     * Serializer key "sending address location".
     *
     * @var string
     */
    const SENDING_ADDRESS_LOCATION = "sendingAddressLocation";

    /**
     * Serializer key "sending address postal code".
     *
     * @var string
     */
    const SENDING_ADDRESS_POSTAL_CODE = "sendingAddressPostalCode";

    /**
     * Serializer key "sending address street name".
     *
     * @var string
     */
    const SENDING_ADDRESS_STREET_NAME = "sendingAddressStreetName";

    /**
     * Serializer key "vat amount".
     *
     * @var string
     */
    const VAT_AMOUNT = "vatAmount";

    /**
     * Serializer key "vat rate".
     *
     * @var string
     */
    const VAT_RATE = "vatRate";

    /**
     * Serializer key "vat total".
     *
     * @var string
     */
    const VAT_TOTAL = "vatTotal";
}