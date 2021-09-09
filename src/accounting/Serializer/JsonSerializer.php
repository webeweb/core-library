<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Serializer;

use WBW\Library\Accounting\Model\AccountingAccountInterface;
use WBW\Library\Accounting\Model\PaymentChoiceInterface;
use WBW\Library\Accounting\Model\PaymentTermInterface;
use WBW\Library\Accounting\Model\VatRateInterface;
use WBW\Library\Serializer\Helper\JsonSerializerHelper;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Serializer
 */
class JsonSerializer {

    /**
     * Serializes an accounting account.
     *
     * @param AccountingAccountInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeAccountingAccount(AccountingAccountInterface $model): array {
        return [
            SerializerKeys::LABEL  => $model->getLabel(),
            SerializerKeys::NUMBER => $model->getNumber(),
            SerializerKeys::TYPE   => $model->getType(),
        ];
    }

    /**
     * Serializes a payment choice.
     *
     * @param PaymentChoiceInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializePaymentChoice(PaymentChoiceInterface $model): array {
        return [
            SerializerKeys::LABEL => $model->getLabel(),
        ];
    }

    /**
     * Serializes a payment term.
     *
     * @param PaymentTermInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializePaymentTerm(PaymentTermInterface $model): array {
        return [
            SerializerKeys::CODE  => $model->getCode(),
            SerializerKeys::LABEL => $model->getLabel(),
        ];
    }

    /**
     * Serializes a VAT rate.
     *
     * @param VatRateInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeVatRate(VatRateInterface $model): array {
        return [
            SerializerKeys::LABEL                        => $model->getLabel(),
            SerializerKeys::PURCHASES_ACCOUNTING_ACCOUNT => JsonSerializerHelper::jsonSerializeModel($model->getPurchasesAccountingAccount()),
            SerializerKeys::RATE                         => $model->getRate(),
            SerializerKeys::SALES_ACCOUNTING_ACCOUNT     => JsonSerializerHelper::jsonSerializeModel($model->getSalesAccountingAccount()),
        ];
    }
}