<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Billing\Serializer;

use WBW\Library\Common\Billing\Model\AccountingAccountInterface;
use WBW\Library\Common\Billing\Model\BankDetailsInterface;
use WBW\Library\Common\Billing\Model\PaymentChoiceInterface;
use WBW\Library\Common\Billing\Model\PaymentTermInterface;
use WBW\Library\Common\Billing\Model\VatRateInterface;
use WBW\Library\Common\Billing\Serializer\JsonSerializer;
use WBW\Library\Common\Billing\Serializer\SerializerKeys;
use WBW\Library\Common\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Billing\Serializer
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeAccountingAccount()
     *
     * @return void
     */
    public function testSerializeAccountingAccount(): void {

        // Set an Accounting account mock.
        $model = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();
        $model->expects($this->any())->method("getLabel")->willReturn(BaseSerializerKeys::LABEL);
        $model->expects($this->any())->method("getNumber")->willReturn(BaseSerializerKeys::NUMBER);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeAccountingAccount($model);
        $this->assertCount(3, $res);

        $this->assertEquals($model->getLabel(), $res[BaseSerializerKeys::LABEL]);
        $this->assertEquals($model->getNumber(), $res[BaseSerializerKeys::NUMBER]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }

    /**
     * Test serializeBankDetails()
     *
     * @return void
     */
    public function testSerializeBankDetails(): void {

        // Set a Bank details mock.
        $model = $this->getMockBuilder(BankDetailsInterface::class)->getMock();
        $model->expects($this->any())->method("getAccountNumber")->willReturn(SerializerKeys::ACCOUNT_NUMBER);
        $model->expects($this->any())->method("getBankCode")->willReturn(SerializerKeys::BANK_CODE);
        $model->expects($this->any())->method("getBankDomiciliation")->willReturn(SerializerKeys::BANK_DOMICILIATION);
        $model->expects($this->any())->method("getBankName")->willReturn(SerializerKeys::BANK_NAME);
        $model->expects($this->any())->method("getBic")->willReturn(SerializerKeys::BIC);
        $model->expects($this->any())->method("getBranchCode")->willReturn(SerializerKeys::BRANCH_CODE);
        $model->expects($this->any())->method("getIban")->willReturn(SerializerKeys::IBAN);
        $model->expects($this->any())->method("getOwner")->willReturn(SerializerKeys::OWNER);
        $model->expects($this->any())->method("getRibKey")->willReturn(SerializerKeys::RIB_KEY);

        $res = JsonSerializer::serializeBankDetails($model);
        $this->assertCount(9, $res);

        $this->assertEquals($model->getAccountNumber(), $res[SerializerKeys::ACCOUNT_NUMBER]);
        $this->assertEquals($model->getBankCode(), $res[SerializerKeys::BANK_CODE]);
        $this->assertEquals($model->getBankDomiciliation(), $res[SerializerKeys::BANK_DOMICILIATION]);
        $this->assertEquals($model->getBankName(), $res[SerializerKeys::BANK_NAME]);
        $this->assertEquals($model->getBic(), $res[SerializerKeys::BIC]);
        $this->assertEquals($model->getBranchCode(), $res[SerializerKeys::BRANCH_CODE]);
        $this->assertEquals($model->getIban(), $res[SerializerKeys::IBAN]);
        $this->assertEquals($model->getOwner(), $res[SerializerKeys::OWNER]);
        $this->assertEquals($model->getRibKey(), $res[SerializerKeys::RIB_KEY]);
    }

    /**
     * Test serializePaymentChoice()
     *
     * @return void
     */
    public function testSerializePaymentChoice(): void {

        // Set a Payment choice mock.
        $model = $this->getMockBuilder(PaymentChoiceInterface::class)->getMock();
        $model->expects($this->any())->method("getLabel")->willReturn(BaseSerializerKeys::LABEL);

        $res = JsonSerializer::serializePaymentChoice($model);
        $this->assertCount(1, $res);

        $this->assertEquals($model->getLabel(), $res[BaseSerializerKeys::LABEL]);
    }

    /**
     * Test serializePaymentTerm()
     *
     * @return void
     */
    public function testSerializePaymentTerm(): void {

        // Set a Payment term mock.
        $model = $this->getMockBuilder(PaymentTermInterface::class)->getMock();
        $model->expects($this->any())->method("getCode")->willReturn(BaseSerializerKeys::CODE);
        $model->expects($this->any())->method("getLabel")->willReturn(BaseSerializerKeys::LABEL);

        $res = JsonSerializer::serializePaymentTerm($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getCode(), $res[BaseSerializerKeys::CODE]);
        $this->assertEquals($model->getLabel(), $res[BaseSerializerKeys::LABEL]);
    }

    /**
     * Test serializeVatRate()
     *
     * @return void
     */
    public function testSerializeVatRate(): void {

        // Set an Accounting account mock.
        $accountingAccount = $this->getMockBuilder(AccountingAccountInterface::class)->getMock();
        $accountingAccount->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeAccountingAccount($accountingAccount));

        // Set a Payment term mock.
        $model = $this->getMockBuilder(VatRateInterface::class)->getMock();
        $model->expects($this->any())->method("getLabel")->willReturn(BaseSerializerKeys::LABEL);
        $model->expects($this->any())->method("getPurchasesAccountingAccount")->willReturn($accountingAccount);
        $model->expects($this->any())->method("getRate")->willReturn(0.1);
        $model->expects($this->any())->method("getSalesAccountingAccount")->willReturn($accountingAccount);

        $res = JsonSerializer::serializeVatRate($model);
        $this->assertCount(4, $res);

        $this->assertEquals($model->getLabel(), $res[BaseSerializerKeys::LABEL]);
        $this->assertIsArray($res[SerializerKeys::PURCHASES_ACCOUNTING_ACCOUNT]);
        $this->assertEquals($model->getRate(), $res[BaseSerializerKeys::RATE]);
        $this->assertIsArray($res[SerializerKeys::SALES_ACCOUNTING_ACCOUNT]);
    }
}