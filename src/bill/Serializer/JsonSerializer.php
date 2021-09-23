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

use WBW\Library\Bill\Model\BillingAddressInterface;
use WBW\Library\Bill\Model\DeliveryAddressInterface;
use WBW\Library\Bill\Model\SendingAddressInterface;
use WBW\Library\Bill\Model\TaxableInterface;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Serializer
 */
class JsonSerializer {

    /**
     * Serializes a billing address.
     *
     * @param BillingAddressInterface $model The model.
     * @return array Returns the serialized billing address.
     */
    public static function serializeBillingAddress(BillingAddressInterface $model): array {
        return [
            SerializerKeys::BILLING_ADDRESS_ADDRESSEE    => $model->getBillingAddressAddressee(),
            SerializerKeys::BILLING_ADDRESS_HOUSE_NUMBER => $model->getBillingAddressHouseNumber(),
            SerializerKeys::BILLING_ADDRESS_STREET_NAME  => $model->getBillingAddressStreetName(),
            SerializerKeys::BILLING_ADDRESS_POSTAL_CODE  => $model->getBillingAddressPostalCode(),
            SerializerKeys::BILLING_ADDRESS_LOCATION     => $model->getBillingAddressLocation(),
            SerializerKeys::BILLING_ADDRESS_COUNTRY      => $model->getBillingAddressCountry(),
        ];
    }

    /**
     * Serializes a delivery address.
     *
     * @param DeliveryAddressInterface $model The model.
     * @return array Returns the serialized sending address.
     */
    public static function serializeDeliveryAddress(DeliveryAddressInterface $model): array {
        return [
            SerializerKeys::DELIVERY_ADDRESS_ADDRESSEE    => $model->getDeliveryAddressAddressee(),
            SerializerKeys::DELIVERY_ADDRESS_HOUSE_NUMBER => $model->getDeliveryAddressHouseNumber(),
            SerializerKeys::DELIVERY_ADDRESS_STREET_NAME  => $model->getDeliveryAddressStreetName(),
            SerializerKeys::DELIVERY_ADDRESS_POSTAL_CODE  => $model->getDeliveryAddressPostalCode(),
            SerializerKeys::DELIVERY_ADDRESS_LOCATION     => $model->getDeliveryAddressLocation(),
            SerializerKeys::DELIVERY_ADDRESS_COUNTRY      => $model->getDeliveryAddressCountry(),
        ];
    }

    /**
     * Serializes a sending address.
     *
     * @param SendingAddressInterface $model The model.
     * @return array Returns the serialized sending address.
     */
    public static function serializeSendingAddress(SendingAddressInterface $model): array {
        return [
            SerializerKeys::SENDING_ADDRESS_ADDRESSEE    => $model->getSendingAddressAddressee(),
            SerializerKeys::SENDING_ADDRESS_HOUSE_NUMBER => $model->getSendingAddressHouseNumber(),
            SerializerKeys::SENDING_ADDRESS_STREET_NAME  => $model->getSendingAddressStreetName(),
            SerializerKeys::SENDING_ADDRESS_POSTAL_CODE  => $model->getSendingAddressPostalCode(),
            SerializerKeys::SENDING_ADDRESS_LOCATION     => $model->getSendingAddressLocation(),
            SerializerKeys::SENDING_ADDRESS_COUNTRY      => $model->getSendingAddressCountry(),
        ];
    }

    /**
     * Serializes a taxable.
     *
     * @param TaxableInterface $model The model.
     * @return array Returns the serialized taxable.
     */
    public static function serializeTaxable(TaxableInterface $model): array {
        return [
            SerializerKeys::DISCOUNT_AMOUNT     => $model->getDiscountAmount(),
            SerializerKeys::DISCOUNT_RATE       => $model->getDiscountRate(),
            SerializerKeys::EXCLUDING_VAT_PRICE => $model->getExcludingVatPrice(),
            SerializerKeys::INCLUDING_VAT_PRICE => $model->getIncludingVatPrice(),
            SerializerKeys::VAT_AMOUNT          => $model->getVatAmount(),
            SerializerKeys::VAT_RATE            => $model->getVatRate(),
        ];
    }
}