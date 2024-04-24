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

namespace WBW\Library\Common\Serializer\Billing;

use WBW\Library\Common\Billing\AccountingAccountInterface;
use WBW\Library\Common\Billing\BankDetailsInterface;
use WBW\Library\Common\Billing\PaymentChoiceInterface;
use WBW\Library\Common\Billing\PaymentTermInterface;
use WBW\Library\Common\Billing\VatRateInterface;
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Serializer\Helper\JsonSerializerHelper;

/**
 *  JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Serializer\Billing
 */
class JsonSerializer {

    /**
     * Serialize an accounting account.
     *
     * @param AccountingAccountInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeAccountingAccount(AccountingAccountInterface $model): array {

        return [
            SerializerKeys::LABEL  => $model->getLabel(),
            SerializerKeys::NUMBER => $model->getNumber(),
            SerializerKeys::TYPE   => $model->getType(),
        ];
    }

    /**
     * Serialize a bank details.
     *
     * @param BankDetailsInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeBankDetails(BankDetailsInterface $model): array {

        return [
            SerializerKeys::ACCOUNT_NUMBER     => $model->getAccountNumber(),
            SerializerKeys::BANK_CODE          => $model->getBankCode(),
            SerializerKeys::BANK_DOMICILIATION => $model->getBankDomiciliation(),
            SerializerKeys::BANK_NAME          => $model->getBankName(),
            SerializerKeys::BIC                => $model->getBic(),
            SerializerKeys::BRANCH_CODE        => $model->getBranchCode(),
            SerializerKeys::IBAN               => $model->getIban(),
            SerializerKeys::OWNER              => $model->getOwner(),
            SerializerKeys::RIB_KEY            => $model->getRibKey(),
        ];
    }

    /**
     * Serialize a payment choice.
     *
     * @param PaymentChoiceInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializePaymentChoice(PaymentChoiceInterface $model): array {

        return [
            SerializerKeys::LABEL => $model->getLabel(),
        ];
    }

    /**
     * Serialize a payment term.
     *
     * @param PaymentTermInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializePaymentTerm(PaymentTermInterface $model): array {

        return [
            SerializerKeys::CODE  => $model->getCode(),
            SerializerKeys::LABEL => $model->getLabel(),
        ];
    }

    /**
     * Serialize a VAT rate.
     *
     * @param VatRateInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeVatRate(VatRateInterface $model): array {

        return [
            SerializerKeys::LABEL                    => $model->getLabel(),
            SerializerKeys::PURCHASES_ACCOUNTING_ACCOUNT => JsonSerializerHelper::jsonSerializeModel($model->getPurchasesAccountingAccount()),
            SerializerKeys::RATE                     => $model->getRate(),
            SerializerKeys::SALES_ACCOUNTING_ACCOUNT     => JsonSerializerHelper::jsonSerializeModel($model->getSalesAccountingAccount()),
        ];
    }
}
