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

namespace WBW\Library\Common\Tests\Serializer\Billing;

use DateTime;
use WBW\Library\Common\Model\Billing\AccountingAccountInterface;
use WBW\Library\Common\Model\Billing\BankDetailsInterface;
use WBW\Library\Common\Model\Billing\BillableDetailInterface;
use WBW\Library\Common\Model\Billing\BillableInterface;
use WBW\Library\Common\Model\Billing\BillingAddressInterface;
use WBW\Library\Common\Model\Billing\DeliveryAddressInterface;
use WBW\Library\Common\Model\Billing\DeliveryNoteInterface;
use WBW\Library\Common\Model\Billing\PaymentChoiceInterface;
use WBW\Library\Common\Model\Billing\PaymentTermInterface;
use WBW\Library\Common\Model\Billing\PurchaseBillInterface;
use WBW\Library\Common\Model\Billing\PurchaseOrderInterface;
use WBW\Library\Common\Model\Billing\QuotationInterface;
use WBW\Library\Common\Model\Billing\SalesBillInterface;
use WBW\Library\Common\Model\Billing\SendingAddressInterface;
use WBW\Library\Common\Model\Billing\TaxableInterface;
use WBW\Library\Common\Model\Billing\VatRateInterface;
use WBW\Library\Common\Serializer\Billing\JsonSerializer;
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer\Billing
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
        $model->expects($this->any())->method("getLabel")->willReturn(SerializerKeys::LABEL);
        $model->expects($this->any())->method("getNumber")->willReturn(SerializerKeys::NUMBER);
        $model->expects($this->any())->method("getType")->willReturn(SerializerKeys::TYPE);

        $res = JsonSerializer::serializeAccountingAccount($model);
        $this->assertCount(3, $res);

        $this->assertEquals($model->getLabel(), $res[SerializerKeys::LABEL]);
        $this->assertEquals($model->getNumber(), $res[SerializerKeys::NUMBER]);
        $this->assertEquals($model->getType(), $res[SerializerKeys::TYPE]);
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
     * Test serializeBillable()
     *
     * @return void
     */
    public function testSerializeBillable(): void {

        // Set a detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();
        $detail->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillableDetail($detail));

        // Set a parent mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();
        $parent->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillable($parent));

        // Set the date/time mocks.
        $createdAt = new DateTime("2024-04-24 19:00:00");
        $date      = new DateTime("2024-04-24 19:00:01");
        $updatedAt = new DateTime("2024-04-24 19:00:02");

        // Set a Billable mock.
        $model = $this->getMockBuilder(BillableInterface::class)->getMock();
        $model->expects($this->any())->method("getComment")->willReturn(SerializerKeys::COMMENT);
        $model->expects($this->any())->method("getCreatedAt")->willReturn($createdAt);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getDetails")->willReturn([$detail]);
        $model->expects($this->any())->method("getDiscountRate")->willReturn(0.1);
        $model->expects($this->any())->method("getDiscountTotal")->willReturn(0.2);
        $model->expects($this->any())->method("getExcludingVatTotal")->willReturn(0.3);
        $model->expects($this->any())->method("getIncludingVatTotal")->willReturn(0.4);
        $model->expects($this->any())->method("getNumber")->willReturn(SerializerKeys::NUMBER);
        $model->expects($this->any())->method("getParent")->willReturn($parent);
        $model->expects($this->any())->method("getReference")->willReturn(SerializerKeys::REFERENCE);
        $model->expects($this->any())->method("getUpdatedAt")->willReturn($updatedAt);
        $model->expects($this->any())->method("getVatTotal")->willReturn(0.5);

        $res = JsonSerializer::serializeBillable($model);
        $this->assertCount(13, $res);

        $this->assertEquals($model->getComment(), $res[SerializerKeys::COMMENT]);
        $this->assertSame($model->getCreatedAt(), $res[SerializerKeys::CREATED_AT]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertIsArray($res[SerializerKeys::DETAILS][0]);
        $this->assertEquals($model->getDiscountRate(), $res[SerializerKeys::DISCOUNT_RATE]);
        $this->assertEquals($model->getDiscountTotal(), $res[SerializerKeys::DISCOUNT_TOTAL]);
        $this->assertEquals($model->getExcludingVatTotal(), $res[SerializerKeys::EXCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getIncludingVatTotal(), $res[SerializerKeys::INCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getNumber(), $res[SerializerKeys::NUMBER]);
        $this->assertIsArray($res[SerializerKeys::PARENT]);
        $this->assertEquals($model->getReference(), $res[SerializerKeys::REFERENCE]);
        $this->assertSame($model->getUpdatedAt(), $res[SerializerKeys::UPDATED_AT]);
        $this->assertEquals($model->getVatTotal(), $res[SerializerKeys::VAT_TOTAL]);
    }

    /**
     * Test serializeBillableDetail()
     *
     * @return void
     */
    public function testSerializeBillableDetail(): void {

        // Set a Billable detail mock.
        $model = $this->getMockBuilder(BillableDetailInterface::class)->getMock();
        $model->expects($this->any())->method("getComment")->willReturn(SerializerKeys::COMMENT);
        $model->expects($this->any())->method("getDiscountTotal")->willReturn(0.1);
        $model->expects($this->any())->method("getExcludingVatTotal")->willReturn(0.2);
        $model->expects($this->any())->method("getIncludingVatTotal")->willReturn(0.3);
        $model->expects($this->any())->method("getLabel")->willReturn(SerializerKeys::LABEL);
        $model->expects($this->any())->method("getQuantity")->willReturn(0.4);
        $model->expects($this->any())->method("getReference")->willReturn(SerializerKeys::REFERENCE);
        $model->expects($this->any())->method("getVatTotal")->willReturn(0.5);

        $res = JsonSerializer::serializeBillableDetail($model);
        $this->assertCount(14, $res);

        $this->assertArrayHasKey(SerializerKeys::DISCOUNT_AMOUNT, $res);
        $this->assertArrayHasKey(SerializerKeys::DISCOUNT_RATE, $res);
        $this->assertArrayHasKey(SerializerKeys::EXCLUDING_VAT_PRICE, $res);
        $this->assertArrayHasKey(SerializerKeys::INCLUDING_VAT_PRICE, $res);
        $this->assertArrayHasKey(SerializerKeys::VAT_AMOUNT, $res);
        $this->assertArrayHasKey(SerializerKeys::VAT_RATE, $res);

        $this->assertEquals($model->getComment(), $res[SerializerKeys::COMMENT]);
        $this->assertEquals($model->getDiscountTotal(), $res[SerializerKeys::DISCOUNT_TOTAL]);
        $this->assertEquals($model->getExcludingVatTotal(), $res[SerializerKeys::EXCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getIncludingVatTotal(), $res[SerializerKeys::INCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getLabel(), $res[SerializerKeys::LABEL]);
        $this->assertEquals($model->getQuantity(), $res[SerializerKeys::QUANTITY]);
        $this->assertEquals($model->getReference(), $res[SerializerKeys::REFERENCE]);
        $this->assertEquals($model->getVatTotal(), $res[SerializerKeys::VAT_TOTAL]);
    }

    /**
     * Test serializeBillingAddress()
     *
     * @return void
     */
    public function testSerializeBillingAddress(): void {

        // Set a Billing address mock.
        $model = $this->getMockBuilder(BillingAddressInterface::class)->getMock();
        $model->expects($this->any())->method("getBillingAddressAddressee")->willReturn(SerializerKeys::BILLING_ADDRESS_ADDRESSEE);
        $model->expects($this->any())->method("getBillingAddressHouseNumber")->willReturn(SerializerKeys::BILLING_ADDRESS_HOUSE_NUMBER);
        $model->expects($this->any())->method("getBillingAddressStreetName")->willReturn(SerializerKeys::BILLING_ADDRESS_STREET_NAME);
        $model->expects($this->any())->method("getBillingAddressPostalCode")->willReturn(SerializerKeys::BILLING_ADDRESS_POSTAL_CODE);
        $model->expects($this->any())->method("getBillingAddressLocation")->willReturn(SerializerKeys::BILLING_ADDRESS_LOCATION);
        $model->expects($this->any())->method("getBillingAddressCountry")->willReturn(SerializerKeys::BILLING_ADDRESS_COUNTRY);

        $res = JsonSerializer::serializeBillingAddress($model);
        $this->assertCount(6, $res);

        $this->assertEquals($model->getBillingAddressAddressee(), $res[SerializerKeys::BILLING_ADDRESS_ADDRESSEE]);
        $this->assertEquals($model->getBillingAddressHouseNumber(), $res[SerializerKeys::BILLING_ADDRESS_HOUSE_NUMBER]);
        $this->assertEquals($model->getBillingAddressStreetName(), $res[SerializerKeys::BILLING_ADDRESS_STREET_NAME]);
        $this->assertEquals($model->getBillingAddressPostalCode(), $res[SerializerKeys::BILLING_ADDRESS_POSTAL_CODE]);
        $this->assertEquals($model->getBillingAddressLocation(), $res[SerializerKeys::BILLING_ADDRESS_LOCATION]);
        $this->assertEquals($model->getBillingAddressCountry(), $res[SerializerKeys::BILLING_ADDRESS_COUNTRY]);
    }

    /**
     * Test serializeDeliveryAddress()
     *
     * @return void
     */
    public function testSerializeDeliveryAddress(): void {

        // Set a Delivery address mock.
        $model = $this->getMockBuilder(DeliveryAddressInterface::class)->getMock();
        $model->expects($this->any())->method("getDeliveryAddressAddressee")->willReturn(SerializerKeys::DELIVERY_ADDRESS_ADDRESSEE);
        $model->expects($this->any())->method("getDeliveryAddressHouseNumber")->willReturn(SerializerKeys::DELIVERY_ADDRESS_HOUSE_NUMBER);
        $model->expects($this->any())->method("getDeliveryAddressStreetName")->willReturn(SerializerKeys::DELIVERY_ADDRESS_STREET_NAME);
        $model->expects($this->any())->method("getDeliveryAddressPostalCode")->willReturn(SerializerKeys::DELIVERY_ADDRESS_POSTAL_CODE);
        $model->expects($this->any())->method("getDeliveryAddressLocation")->willReturn(SerializerKeys::DELIVERY_ADDRESS_LOCATION);
        $model->expects($this->any())->method("getDeliveryAddressCountry")->willReturn(SerializerKeys::DELIVERY_ADDRESS_COUNTRY);

        $res = JsonSerializer::serializeDeliveryAddress($model);
        $this->assertCount(6, $res);

        $this->assertEquals($model->getDeliveryAddressAddressee(), $res[SerializerKeys::DELIVERY_ADDRESS_ADDRESSEE]);
        $this->assertEquals($model->getDeliveryAddressHouseNumber(), $res[SerializerKeys::DELIVERY_ADDRESS_HOUSE_NUMBER]);
        $this->assertEquals($model->getDeliveryAddressStreetName(), $res[SerializerKeys::DELIVERY_ADDRESS_STREET_NAME]);
        $this->assertEquals($model->getDeliveryAddressPostalCode(), $res[SerializerKeys::DELIVERY_ADDRESS_POSTAL_CODE]);
        $this->assertEquals($model->getDeliveryAddressLocation(), $res[SerializerKeys::DELIVERY_ADDRESS_LOCATION]);
        $this->assertEquals($model->getDeliveryAddressCountry(), $res[SerializerKeys::DELIVERY_ADDRESS_COUNTRY]);
    }

    /**
     * Test serializeDeliveryNote()
     *
     * @return void
     */
    public function testSerializeDeliveryNote(): void {

        // Set a detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();
        $detail->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillableDetail($detail));

        // Set a parent mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();
        $parent->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillable($parent));

        // Set the date/time mocks.
        $createdAt = new DateTime("2024-04-24 19:00:00");
        $date      = new DateTime("2024-04-24 19:00:01");
        $updatedAt = new DateTime("2024-04-24 19:00:02");

        // Set a Delivery note mock.
        $model = $this->getMockBuilder(DeliveryNoteInterface::class)->getMock();
        $model->expects($this->any())->method("getComment")->willReturn(SerializerKeys::COMMENT);
        $model->expects($this->any())->method("getCreatedAt")->willReturn($createdAt);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getDetails")->willReturn([$detail]);
        $model->expects($this->any())->method("getDiscountRate")->willReturn(0.1);
        $model->expects($this->any())->method("getDiscountTotal")->willReturn(0.2);
        $model->expects($this->any())->method("getExcludingVatTotal")->willReturn(0.3);
        $model->expects($this->any())->method("getIncludingVatTotal")->willReturn(0.4);
        $model->expects($this->any())->method("getNumber")->willReturn(SerializerKeys::NUMBER);
        $model->expects($this->any())->method("getParent")->willReturn($parent);
        $model->expects($this->any())->method("getReference")->willReturn(SerializerKeys::REFERENCE);
        $model->expects($this->any())->method("getUpdatedAt")->willReturn($updatedAt);
        $model->expects($this->any())->method("getVatTotal")->willReturn(0.5);

        $res = JsonSerializer::serializeDeliveryNote($model);
        $this->assertCount(13, $res);

        $this->assertEquals($model->getComment(), $res[SerializerKeys::COMMENT]);
        $this->assertSame($model->getCreatedAt(), $res[SerializerKeys::CREATED_AT]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertIsArray($res[SerializerKeys::DETAILS][0]);
        $this->assertEquals($model->getDiscountRate(), $res[SerializerKeys::DISCOUNT_RATE]);
        $this->assertEquals($model->getDiscountTotal(), $res[SerializerKeys::DISCOUNT_TOTAL]);
        $this->assertEquals($model->getExcludingVatTotal(), $res[SerializerKeys::EXCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getIncludingVatTotal(), $res[SerializerKeys::INCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getNumber(), $res[SerializerKeys::NUMBER]);
        $this->assertIsArray($res[SerializerKeys::PARENT]);
        $this->assertEquals($model->getReference(), $res[SerializerKeys::REFERENCE]);
        $this->assertSame($model->getUpdatedAt(), $res[SerializerKeys::UPDATED_AT]);
        $this->assertEquals($model->getVatTotal(), $res[SerializerKeys::VAT_TOTAL]);
    }

    /**
     * Test serializePaymentChoice()
     *
     * @return void
     */
    public function testSerializePaymentChoice(): void {

        // Set a Payment choice mock.
        $model = $this->getMockBuilder(PaymentChoiceInterface::class)->getMock();
        $model->expects($this->any())->method("getLabel")->willReturn(SerializerKeys::LABEL);

        $res = JsonSerializer::serializePaymentChoice($model);
        $this->assertCount(1, $res);

        $this->assertEquals($model->getLabel(), $res[SerializerKeys::LABEL]);
    }

    /**
     * Test serializePaymentTerm()
     *
     * @return void
     */
    public function testSerializePaymentTerm(): void {

        // Set a Payment term mock.
        $model = $this->getMockBuilder(PaymentTermInterface::class)->getMock();
        $model->expects($this->any())->method("getCode")->willReturn(SerializerKeys::CODE);
        $model->expects($this->any())->method("getLabel")->willReturn(SerializerKeys::LABEL);

        $res = JsonSerializer::serializePaymentTerm($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getCode(), $res[SerializerKeys::CODE]);
        $this->assertEquals($model->getLabel(), $res[SerializerKeys::LABEL]);
    }

    /**
     * Test serializePurchaseBill()
     *
     * @return void
     */
    public function testSerializePurchaseBille(): void {

        // Set a detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();
        $detail->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillableDetail($detail));

        // Set a parent mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();
        $parent->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillable($parent));

        // Set the date/time mocks.
        $createdAt   = new DateTime("2024-04-24 19:00:00");
        $date        = new DateTime("2024-04-24 19:00:01");
        $paymentDate = new DateTime("2024-04-24 19:00:02");
        $updatedAt   = new DateTime("2024-04-24 19:00:03");

        // Set a Purchase bill mock.
        $model = $this->getMockBuilder(PurchaseBillInterface::class)->getMock();
        $model->expects($this->any())->method("getComment")->willReturn(SerializerKeys::COMMENT);
        $model->expects($this->any())->method("getCreatedAt")->willReturn($createdAt);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getDetails")->willReturn([$detail]);
        $model->expects($this->any())->method("getDiscountRate")->willReturn(0.1);
        $model->expects($this->any())->method("getDiscountTotal")->willReturn(0.2);
        $model->expects($this->any())->method("getExcludingVatTotal")->willReturn(0.3);
        $model->expects($this->any())->method("getIncludingVatTotal")->willReturn(0.4);
        $model->expects($this->any())->method("getNumber")->willReturn(SerializerKeys::NUMBER);
        $model->expects($this->any())->method("getParent")->willReturn($parent);
        $model->expects($this->any())->method("getPaymentDate")->willReturn($paymentDate);
        $model->expects($this->any())->method("getReference")->willReturn(SerializerKeys::REFERENCE);
        $model->expects($this->any())->method("getUpdatedAt")->willReturn($updatedAt);
        $model->expects($this->any())->method("getVatTotal")->willReturn(0.5);

        $res = JsonSerializer::serializePurchaseBill($model);
        $this->assertCount(14, $res);

        $this->assertEquals($model->getComment(), $res[SerializerKeys::COMMENT]);
        $this->assertSame($model->getCreatedAt(), $res[SerializerKeys::CREATED_AT]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertIsArray($res[SerializerKeys::DETAILS][0]);
        $this->assertEquals($model->getDiscountRate(), $res[SerializerKeys::DISCOUNT_RATE]);
        $this->assertEquals($model->getDiscountTotal(), $res[SerializerKeys::DISCOUNT_TOTAL]);
        $this->assertEquals($model->getExcludingVatTotal(), $res[SerializerKeys::EXCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getIncludingVatTotal(), $res[SerializerKeys::INCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getNumber(), $res[SerializerKeys::NUMBER]);
        $this->assertIsArray($res[SerializerKeys::PARENT]);
        $this->assertSame($model->getPaymentDate(), $res[SerializerKeys::PAYMENT_DATE]);
        $this->assertEquals($model->getReference(), $res[SerializerKeys::REFERENCE]);
        $this->assertSame($model->getUpdatedAt(), $res[SerializerKeys::UPDATED_AT]);
        $this->assertEquals($model->getVatTotal(), $res[SerializerKeys::VAT_TOTAL]);
    }

    /**
     * Test serializePurchaseOrder()
     *
     * @return void
     */
    public function testSerializePurchaseOrder(): void {

        // Set a detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();
        $detail->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillableDetail($detail));

        // Set a parent mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();
        $parent->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillable($parent));

        // Set the date/time mocks.
        $createdAt = new DateTime("2024-04-24 19:00:00");
        $date      = new DateTime("2024-04-24 19:00:01");
        $updatedAt = new DateTime("2024-04-24 19:00:02");

        // Set a Purchase order mock.
        $model = $this->getMockBuilder(PurchaseOrderInterface::class)->getMock();
        $model->expects($this->any())->method("getComment")->willReturn(SerializerKeys::COMMENT);
        $model->expects($this->any())->method("getCreatedAt")->willReturn($createdAt);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getDetails")->willReturn([$detail]);
        $model->expects($this->any())->method("getDiscountRate")->willReturn(0.1);
        $model->expects($this->any())->method("getDiscountTotal")->willReturn(0.2);
        $model->expects($this->any())->method("getExcludingVatTotal")->willReturn(0.3);
        $model->expects($this->any())->method("getIncludingVatTotal")->willReturn(0.4);
        $model->expects($this->any())->method("getNumber")->willReturn(SerializerKeys::NUMBER);
        $model->expects($this->any())->method("getParent")->willReturn($parent);
        $model->expects($this->any())->method("getReference")->willReturn(SerializerKeys::REFERENCE);
        $model->expects($this->any())->method("getUpdatedAt")->willReturn($updatedAt);
        $model->expects($this->any())->method("getVatTotal")->willReturn(0.5);

        $res = JsonSerializer::serializePurchaseOrder($model);
        $this->assertCount(13, $res);

        $this->assertEquals($model->getComment(), $res[SerializerKeys::COMMENT]);
        $this->assertSame($model->getCreatedAt(), $res[SerializerKeys::CREATED_AT]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertIsArray($res[SerializerKeys::DETAILS][0]);
        $this->assertEquals($model->getDiscountRate(), $res[SerializerKeys::DISCOUNT_RATE]);
        $this->assertEquals($model->getDiscountTotal(), $res[SerializerKeys::DISCOUNT_TOTAL]);
        $this->assertEquals($model->getExcludingVatTotal(), $res[SerializerKeys::EXCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getIncludingVatTotal(), $res[SerializerKeys::INCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getNumber(), $res[SerializerKeys::NUMBER]);
        $this->assertIsArray($res[SerializerKeys::PARENT]);
        $this->assertEquals($model->getReference(), $res[SerializerKeys::REFERENCE]);
        $this->assertSame($model->getUpdatedAt(), $res[SerializerKeys::UPDATED_AT]);
        $this->assertEquals($model->getVatTotal(), $res[SerializerKeys::VAT_TOTAL]);
    }

    /**
     * Test serializeQuotation()
     *
     * @return void
     */
    public function testSerializeQuotation(): void {

        // Set a detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();
        $detail->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillableDetail($detail));

        // Set a parent mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();
        $parent->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillable($parent));

        // Set the date/time mocks.
        $createdAt      = new DateTime("2024-04-24 19:00:00");
        $date           = new DateTime("2024-04-24 19:00:01");
        $expirationDate = new DateTime("2024-04-24 19:00:02");
        $updatedAt      = new DateTime("2024-04-24 19:00:03");

        // Set a Quotation mock.
        $model = $this->getMockBuilder(QuotationInterface::class)->getMock();
        $model->expects($this->any())->method("getComment")->willReturn(SerializerKeys::COMMENT);
        $model->expects($this->any())->method("getCreatedAt")->willReturn($createdAt);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getDetails")->willReturn([$detail]);
        $model->expects($this->any())->method("getDiscountRate")->willReturn(0.1);
        $model->expects($this->any())->method("getDiscountTotal")->willReturn(0.2);
        $model->expects($this->any())->method("getExcludingVatTotal")->willReturn(0.3);
        $model->expects($this->any())->method("getExpirationDate")->willReturn($expirationDate);
        $model->expects($this->any())->method("getIncludingVatTotal")->willReturn(0.4);
        $model->expects($this->any())->method("getNumber")->willReturn(SerializerKeys::NUMBER);
        $model->expects($this->any())->method("getParent")->willReturn($parent);
        $model->expects($this->any())->method("getReference")->willReturn(SerializerKeys::REFERENCE);
        $model->expects($this->any())->method("getUpdatedAt")->willReturn($updatedAt);
        $model->expects($this->any())->method("getVatTotal")->willReturn(0.5);

        $res = JsonSerializer::serializeQuotation($model);
        $this->assertCount(14, $res);

        $this->assertEquals($model->getComment(), $res[SerializerKeys::COMMENT]);
        $this->assertSame($model->getCreatedAt(), $res[SerializerKeys::CREATED_AT]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertIsArray($res[SerializerKeys::DETAILS][0]);
        $this->assertEquals($model->getDiscountRate(), $res[SerializerKeys::DISCOUNT_RATE]);
        $this->assertEquals($model->getDiscountTotal(), $res[SerializerKeys::DISCOUNT_TOTAL]);
        $this->assertEquals($model->getExcludingVatTotal(), $res[SerializerKeys::EXCLUDING_VAT_TOTAL]);
        $this->assertSame($model->getExpirationDate(), $res[SerializerKeys::EXPIRATION_DATE]);
        $this->assertEquals($model->getIncludingVatTotal(), $res[SerializerKeys::INCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getNumber(), $res[SerializerKeys::NUMBER]);
        $this->assertIsArray($res[SerializerKeys::PARENT]);
        $this->assertEquals($model->getReference(), $res[SerializerKeys::REFERENCE]);
        $this->assertSame($model->getUpdatedAt(), $res[SerializerKeys::UPDATED_AT]);
        $this->assertEquals($model->getVatTotal(), $res[SerializerKeys::VAT_TOTAL]);
    }

    /**
     * Test serializeSalesBill()
     *
     * @return void
     */
    public function testSerializeSalesBill(): void {

        // Set a detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();
        $detail->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillableDetail($detail));

        // Set a parent mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();
        $parent->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeBillable($parent));

        // Set the date/time mocks.
        $createdAt = new DateTime("2024-04-24 19:00:00");
        $date      = new DateTime("2024-04-24 19:00:01");
        $updatedAt = new DateTime("2024-04-24 19:00:02");

        // Set a Sales bill mock.
        $model = $this->getMockBuilder(SalesBillInterface::class)->getMock();
        $model->expects($this->any())->method("getComment")->willReturn(SerializerKeys::COMMENT);
        $model->expects($this->any())->method("getCreatedAt")->willReturn($createdAt);
        $model->expects($this->any())->method("getDate")->willReturn($date);
        $model->expects($this->any())->method("getDetails")->willReturn([$detail]);
        $model->expects($this->any())->method("getDiscountRate")->willReturn(0.1);
        $model->expects($this->any())->method("getDiscountTotal")->willReturn(0.2);
        $model->expects($this->any())->method("getExcludingVatTotal")->willReturn(0.3);
        $model->expects($this->any())->method("getIncludingVatTotal")->willReturn(0.4);
        $model->expects($this->any())->method("getNumber")->willReturn(SerializerKeys::NUMBER);
        $model->expects($this->any())->method("getParent")->willReturn($parent);
        $model->expects($this->any())->method("getReference")->willReturn(SerializerKeys::REFERENCE);
        $model->expects($this->any())->method("getUpdatedAt")->willReturn($updatedAt);
        $model->expects($this->any())->method("getVatTotal")->willReturn(0.5);

        $res = JsonSerializer::serializeSalesBill($model);
        $this->assertCount(13, $res);

        $this->assertEquals($model->getComment(), $res[SerializerKeys::COMMENT]);
        $this->assertSame($model->getCreatedAt(), $res[SerializerKeys::CREATED_AT]);
        $this->assertSame($model->getDate(), $res[SerializerKeys::DATE]);
        $this->assertIsArray($res[SerializerKeys::DETAILS][0]);
        $this->assertEquals($model->getDiscountRate(), $res[SerializerKeys::DISCOUNT_RATE]);
        $this->assertEquals($model->getDiscountTotal(), $res[SerializerKeys::DISCOUNT_TOTAL]);
        $this->assertEquals($model->getExcludingVatTotal(), $res[SerializerKeys::EXCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getIncludingVatTotal(), $res[SerializerKeys::INCLUDING_VAT_TOTAL]);
        $this->assertEquals($model->getNumber(), $res[SerializerKeys::NUMBER]);
        $this->assertIsArray($res[SerializerKeys::PARENT]);
        $this->assertEquals($model->getReference(), $res[SerializerKeys::REFERENCE]);
        $this->assertSame($model->getUpdatedAt(), $res[SerializerKeys::UPDATED_AT]);
        $this->assertEquals($model->getVatTotal(), $res[SerializerKeys::VAT_TOTAL]);
    }

    /**
     * Test serializeSendingAddress()
     *
     * @return void
     */
    public function testSerializeSendingAddress(): void {

        // Set a Sending address mock.
        $model = $this->getMockBuilder(SendingAddressInterface::class)->getMock();
        $model->expects($this->any())->method("getSendingAddressAddressee")->willReturn(SerializerKeys::SENDING_ADDRESS_ADDRESSEE);
        $model->expects($this->any())->method("getSendingAddressHouseNumber")->willReturn(SerializerKeys::SENDING_ADDRESS_HOUSE_NUMBER);
        $model->expects($this->any())->method("getSendingAddressStreetName")->willReturn(SerializerKeys::SENDING_ADDRESS_STREET_NAME);
        $model->expects($this->any())->method("getSendingAddressPostalCode")->willReturn(SerializerKeys::SENDING_ADDRESS_POSTAL_CODE);
        $model->expects($this->any())->method("getSendingAddressLocation")->willReturn(SerializerKeys::SENDING_ADDRESS_LOCATION);
        $model->expects($this->any())->method("getSendingAddressCountry")->willReturn(SerializerKeys::SENDING_ADDRESS_COUNTRY);

        $res = JsonSerializer::serializeSendingAddress($model);
        $this->assertCount(6, $res);

        $this->assertEquals($model->getSendingAddressAddressee(), $res[SerializerKeys::SENDING_ADDRESS_ADDRESSEE]);
        $this->assertEquals($model->getSendingAddressHouseNumber(), $res[SerializerKeys::SENDING_ADDRESS_HOUSE_NUMBER]);
        $this->assertEquals($model->getSendingAddressStreetName(), $res[SerializerKeys::SENDING_ADDRESS_STREET_NAME]);
        $this->assertEquals($model->getSendingAddressPostalCode(), $res[SerializerKeys::SENDING_ADDRESS_POSTAL_CODE]);
        $this->assertEquals($model->getSendingAddressLocation(), $res[SerializerKeys::SENDING_ADDRESS_LOCATION]);
        $this->assertEquals($model->getSendingAddressCountry(), $res[SerializerKeys::SENDING_ADDRESS_COUNTRY]);
    }

    /**
     * Test serializeTaxable()
     *
     * @return void
     */
    public function testSerializeTaxable(): void {

        // Set a Taxable mock.
        $model = $this->getMockBuilder(TaxableInterface::class)->getMock();
        $model->expects($this->any())->method("getDiscountAmount")->willReturn(0.1);
        $model->expects($this->any())->method("getDiscountRate")->willReturn(0.1);
        $model->expects($this->any())->method("getExcludingVatPrice")->willReturn(0.3);
        $model->expects($this->any())->method("getIncludingVatPrice")->willReturn(0.4);
        $model->expects($this->any())->method("getVatAmount")->willReturn(0.5);
        $model->expects($this->any())->method("getVatRate")->willReturn(0.6);

        $res = JsonSerializer::serializeTaxable($model);
        $this->assertCount(6, $res);

        $this->assertEquals($model->getDiscountAmount(), $res[SerializerKeys::DISCOUNT_AMOUNT]);
        $this->assertEquals($model->getDiscountRate(), $res[SerializerKeys::DISCOUNT_RATE]);
        $this->assertEquals($model->getExcludingVatPrice(), $res[SerializerKeys::EXCLUDING_VAT_PRICE]);
        $this->assertEquals($model->getIncludingVatPrice(), $res[SerializerKeys::INCLUDING_VAT_PRICE]);
        $this->assertEquals($model->getVatAmount(), $res[SerializerKeys::VAT_AMOUNT]);
        $this->assertEquals($model->getVatRate(), $res[SerializerKeys::VAT_RATE]);
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
        $model->expects($this->any())->method("getLabel")->willReturn(SerializerKeys::LABEL);
        $model->expects($this->any())->method("getPurchasesAccountingAccount")->willReturn($accountingAccount);
        $model->expects($this->any())->method("getRate")->willReturn(0.1);
        $model->expects($this->any())->method("getSalesAccountingAccount")->willReturn($accountingAccount);

        $res = JsonSerializer::serializeVatRate($model);
        $this->assertCount(4, $res);

        $this->assertEquals($model->getLabel(), $res[SerializerKeys::LABEL]);
        $this->assertIsArray($res[SerializerKeys::PURCHASES_ACCOUNTING_ACCOUNT]);
        $this->assertEquals($model->getRate(), $res[SerializerKeys::RATE]);
        $this->assertIsArray($res[SerializerKeys::SALES_ACCOUNTING_ACCOUNT]);
    }
}
