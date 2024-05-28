<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Serializer;

use WBW\Library\Common\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Easilys\Model\AccountingGeneral;
use WBW\Library\Easilys\Model\Address;
use WBW\Library\Easilys\Model\Allergen;
use WBW\Library\Easilys\Model\AnalyticalGroup;
use WBW\Library\Easilys\Model\AutomaticStockTransfer;
use WBW\Library\Easilys\Model\Certification;
use WBW\Library\Easilys\Model\Code;
use WBW\Library\Easilys\Model\ControlSampleConfig;
use WBW\Library\Easilys\Model\DairySubsidy;
use WBW\Library\Easilys\Model\DeliveryDaysProduction;
use WBW\Library\Easilys\Model\DeliveryWeekday;
use WBW\Library\Easilys\Model\Email;
use WBW\Library\Easilys\Model\ExtData;
use WBW\Library\Easilys\Model\Family;
use WBW\Library\Easilys\Model\Fax;
use WBW\Library\Easilys\Model\Generic;
use WBW\Library\Easilys\Model\GenericFamily;
use WBW\Library\Easilys\Model\LinkedUser;
use WBW\Library\Easilys\Model\NutritionValue;
use WBW\Library\Easilys\Model\Origin;
use WBW\Library\Easilys\Model\PackagingLevel;
use WBW\Library\Easilys\Model\Params;
use WBW\Library\Easilys\Model\Phone;
use WBW\Library\Easilys\Model\PriceList;
use WBW\Library\Easilys\Model\PriceListSupplierProduct;
use WBW\Library\Easilys\Model\ProdFamily;
use WBW\Library\Easilys\Model\Product;
use WBW\Library\Easilys\Model\ProductionUnit;
use WBW\Library\Easilys\Model\Quality;
use WBW\Library\Easilys\Model\Range;
use WBW\Library\Easilys\Model\Site;
use WBW\Library\Easilys\Model\StorageType;
use WBW\Library\Easilys\Model\Storehouse;
use WBW\Library\Easilys\Model\Supplier;
use WBW\Library\Easilys\Model\SupplierProduct;
use WBW\Library\Easilys\Model\SupplierProductReference;
use WBW\Library\Easilys\Model\Tag;
use WBW\Library\Easilys\Model\Tax;
use WBW\Library\Easilys\Model\Tree;
use WBW\Library\Easilys\Model\Unit;
use WBW\Library\Easilys\Serializer\JsonDeserializer;
use WBW\Library\Easilys\Serializer\SerializerKeys;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * JSON deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Serializer
 */
class JsonDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeAccountingGeneral()
     *
     * @return void
     */
    public function testDeserializeAccountingGeneral(): void {

        $this->assertNull(JsonDeserializer::deserializeAccountingGeneral([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeAccountingGeneral.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAccountingGeneral($data);
        $this->assertInstanceOf(AccountingGeneral::class, $res);

        $this->assertEquals(SerializerKeys::ACCOUNTING_CREDIT_INVOICE, $res->getAccountingCreditInvoice());
        $this->assertEquals(SerializerKeys::ACCOUNTING_GENERAL_SUPPLIER, $res->getAccountingGeneralSupplier());
        $this->assertEquals(SerializerKeys::ACCOUNTING_PURCHASE_INVOICE, $res->getAccountingPurchaseInvoice());
    }

    /**
     * Test deserializeAddress()
     *
     * @return void
     */
    public function testDeserializeAddress(): void {

        $this->assertNull(JsonDeserializer::deserializeAddress([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeAddress.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAddress($data);
        $this->assertInstanceOf(Address::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::ADDRESS, $res->getAddress());
        $this->assertEquals(SerializerKeys::CITY, $res->getCity());
        $this->assertEquals(BaseSerializerKeys::COUNTRY, $res->getCountry());
        $this->assertEquals(SerializerKeys::IS_MAIN, $res->getIsMain());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(BaseSerializerKeys::POSTAL_CODE, $res->getPostalCode());
        $this->assertEquals(BaseSerializerKeys::TYPE, $res->getType());
    }

    /**
     * Test deserializeAllergen()
     *
     * @return void
     */
    public function testDeserializeAllergen(): void {

        $this->assertNull(JsonDeserializer::deserializeAllergen([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeAllergen.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAllergen($data);
        $this->assertInstanceOf(Allergen::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeAnalyticalGroup()
     *
     * @return void
     */
    public function testDeserializeAnalyticalGroup(): void {

        $this->assertNull(JsonDeserializer::deserializeAnalyticalGroup([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeAnalyticalGroup.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAnalyticalGroup($data);
        $this->assertInstanceOf(AnalyticalGroup::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeAutomaticStockTransfer()
     *
     * @return void
     */
    public function testDeserializeAutomaticStockTransfer(): void {

        $this->assertNull(JsonDeserializer::deserializeAutomaticStockTransfer([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeAutomaticStockTransfer.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeAutomaticStockTransfer($data);
        $this->assertInstanceOf(AutomaticStockTransfer::class, $res);

        $this->assertTrue($res->getFromConsumption());
    }

    /**
     * Test deserializeCertification()
     *
     * @return void
     */
    public function testDeserializeCertification(): void {

        $this->assertNull(JsonDeserializer::deserializeCertification([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeCertification.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeCertification($data);
        $this->assertInstanceOf(Certification::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::CODE, $res->getCode());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(BaseSerializerKeys::IMAGE, $res->getImage());
    }

    /**
     * Test deserializeCode()
     *
     * @return void
     */
    public function testDeserializeCode(): void {

        $this->assertNull(JsonDeserializer::deserializeCode([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeCode.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeCode($data);
        $this->assertInstanceOf(Code::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::CODE_PACKAGING, $res->getCodePackaging());
        $this->assertEquals(2, $res->getIdPackagingUnit());
        $this->assertEquals(SerializerKeys::LABEL_PACKAGING, $res->getLabelPackaging());
    }

    /**
     * Test deserializeControlSampleConfig()
     *
     * @return void
     */
    public function testDeserializeControlSampleConfig(): void {

        $this->assertNull(JsonDeserializer::deserializeControlSampleConfig([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeControlSampleConfig.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeControlSampleConfig($data);
        $this->assertInstanceOf(ControlSampleConfig::class, $res);

        $this->assertEquals(SerializerKeys::AMOUNT_FOR_CONSUMPTION_SITE, $res->getAmountForConsumptionSite());
        $this->assertEquals(SerializerKeys::AMOUNT_FOR_PRODUCTION_SITE, $res->getAmountForProductionSite());
        $this->assertTrue($res->getIsControlSampleActive());
        $this->assertTrue($res->getIsControlSampleBillable());
    }

    /**
     * Test deserializeDairySubsidy()
     *
     * @return void
     */
    public function testDeserializeDairySubsidy(): void {

        $this->assertNull(JsonDeserializer::deserializeDairySubsidy([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeDairySubsidy.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeDairySubsidy($data);
        $this->assertInstanceOf(DairySubsidy::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(0.1, $res->getAmount());
        $this->assertEquals(BaseSerializerKeys::CODE, $res->getCode());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertNotNull($res->getUnit());
    }

    /**
     * Test deserializeDeliveryDaysProduction()
     *
     * @return void
     */
    public function testDeserializeDeliveryDaysProduction(): void {

        $this->assertNull(JsonDeserializer::deserializeDeliveryDaysProduction([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeDeliveryDaysProduction.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeDeliveryDaysProduction($data);
        $this->assertInstanceOf(DeliveryDaysProduction::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals([], $res->getDays());
    }

    /**
     * Test deserializeDeliveryWeekday()
     *
     * @return void
     */
    public function testDeserializeDeliveryWeekday(): void {

        $this->assertNull(JsonDeserializer::deserializeDeliveryWeekday([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeDeliveryWeekday.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeDeliveryWeekday($data);
        $this->assertInstanceOf(DeliveryWeekday::class, $res);

        $this->assertEquals(SerializerKeys::WEEKDAY, $res->getWeekday());
    }

    /**
     * Test deserializeEmail()
     *
     * @return void
     */
    public function testDeserializeEmail(): void {

        $this->assertNull(JsonDeserializer::deserializeEmail([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeEmail.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeEmail($data);
        $this->assertInstanceOf(Email::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::CONTEXT, $res->getContext());
        $this->assertEquals(SerializerKeys::E_MAIL, $res->getEmail());
        $this->assertEquals(SerializerKeys::IS_MAIN, $res->getIsMain());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeExtData()
     *
     * @return void
     */
    public function testDeserializeExtData(): void {

        $this->assertNull(JsonDeserializer::deserializeExtData([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeExtData.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeExtData($data);
        $this->assertInstanceOf(ExtData::class, $res);
    }

    /**
     * Test deserializeFamily()
     *
     * @return void
     */
    public function testDeserializeFamily(): void {

        $this->assertNull(JsonDeserializer::deserializeFamily([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeFamily.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeFamily($data);
        $this->assertInstanceOf(Family::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());

        $this->assertEquals(0, $res->getParent()->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getParent()->getLabel());
        $this->assertNull($res->getParent()->getParent());
    }

    /**
     * Test deserializeFax()
     *
     * @return void
     */
    public function testDeserializeFax(): void {

        $this->assertNull(JsonDeserializer::deserializeFax([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeFax.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeFax($data);
        $this->assertInstanceOf(Fax::class, $res);

        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(BaseSerializerKeys::NUMBER, $res->getNumber());
    }

    /**
     * Test deserializeGeneric()
     *
     * @return void
     */
    public function testDeserializeGeneric(): void {

        $this->assertNull(JsonDeserializer::deserializeGeneric([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeGeneric.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeGeneric($data);
        $this->assertInstanceOf(Generic::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertNotNull($res->getGenericFamily());
        $this->assertEquals(2, $res->getIdSiteOwner());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertNotNull($res->getProductionUnit());
    }

    /**
     * Test deserializeGenericFamily()
     *
     * @return void
     */
    public function testDeserializeGenericFamily(): void {

        $this->assertNull(JsonDeserializer::deserializeGenericFamily([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeGenericFamily.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeGenericFamily($data);
        $this->assertInstanceOf(GenericFamily::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());

        $this->assertEquals(0, $res->getParent()->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getParent()->getLabel());
        $this->assertNull($res->getParent()->getParent());
    }

    /**
     * Test deserializeLinkedUser()
     *
     * @return void
     */
    public function testDeserializeLinkedUser(): void {

        $this->assertNull(JsonDeserializer::deserializeLinkedUser([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeLinkedUser.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeLinkedUser($data);
        $this->assertInstanceOf(LinkedUser::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::FIRST_NAME, $res->getFirstName());
        $this->assertEquals(BaseSerializerKeys::LAST_NAME, $res->getLastName());
    }

    /**
     * Test deserializeNutritionValue()
     *
     * @return void
     */
    public function testDeserializeNutritionValue(): void {

        $this->assertNull(JsonDeserializer::deserializeNutritionValue([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeNutritionValue.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeNutritionValue($data);
        $this->assertInstanceOf(NutritionValue::class, $res);

        $this->assertEquals(1, $res->getCalcium());
        $this->assertEquals(2, $res->getCarbohydrate());
        $this->assertEquals(3, $res->getEnergyKcal());
        $this->assertEquals(4, $res->getEnergyKj());
        $this->assertEquals(5, $res->getEthanol());
        $this->assertEquals(6, $res->getFiber());
        $this->assertEquals(7, $res->getIncludingSaturatedFattyAcids());
        $this->assertEquals(8, $res->getIncludingSugar());
        $this->assertEquals(9, $res->getLipid());
        $this->assertEquals(10, $res->getOrganicAcid());
        $this->assertEquals(11, $res->getPolyols());
        $this->assertEquals(12, $res->getProtein());
        $this->assertEquals(13, $res->getSalt());
    }

    /**
     * Test deserializeOrigin()
     *
     * @return void
     */
    public function testDeserializeOrigin(): void {

        $this->assertNull(JsonDeserializer::deserializeOrigin([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeOrigin.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeOrigin($data);
        $this->assertInstanceOf(Origin::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializePackagingLevel()
     *
     * @return void
     */
    public function testDeserializePackagingLevel(): void {

        $this->assertNull(JsonDeserializer::deserializePackagingLevel([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializePackagingLevel.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePackagingLevel($data);
        $this->assertInstanceOf(PackagingLevel::class, $res);

        $this->assertEquals(1, $res->getId());
    }

    /**
     * Test deserializeParams()
     *
     * @return void
     */
    public function testDeserializeParams(): void {

        $this->assertNull(JsonDeserializer::deserializeParams([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeParams.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeParams($data);
        $this->assertInstanceOf(Params::class, $res);

        $this->assertTrue($res->getSupplierOrderAutoReceipt());
    }

    /**
     * Test deserializePhone()
     *
     * @return void
     */
    public function testDeserializePhone(): void {

        $this->assertNull(JsonDeserializer::deserializePhone([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializePhone.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePhone($data);
        $this->assertInstanceOf(Phone::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::CONTEXT, $res->getContext());
        $this->assertEquals(SerializerKeys::IS_MAIN, $res->getIsMain());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(BaseSerializerKeys::NUMBER, $res->getNumber());
        $this->assertEquals(BaseSerializerKeys::TYPE, $res->getType());
    }

    /**
     * Test deserializePriceList()
     *
     * @return void
     */
    public function testDeserializePriceList(): void {

        $this->assertNull(JsonDeserializer::deserializePriceList([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializePriceList.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePriceList($data);
        $this->assertInstanceOf(PriceList::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::DATE_CREATED, $res->getDateCreated());
        $this->assertEquals(SerializerKeys::DATE_END, $res->getDateEnd());
        $this->assertEquals(SerializerKeys::DATE_START, $res->getDateStart());
        $this->assertEquals(SerializerKeys::DATE_UPDATED, $res->getDateUpdated());
        $this->assertEquals(SerializerKeys::EXT_ID, $res->getExtId());
        $this->assertEquals(2, $res->getIdSiteOwner());
        $this->assertEquals(3, $res->getIdUser());
        $this->assertTrue($res->getIsValidated());
        $this->assertNotNull($res->getProdFamily());
        $this->assertNotNull($res->getSupplier());
    }

    /**
     * Test deserializePriceListSupplierProduct()
     *
     * @return void
     */
    public function testDeserializePriceListSupplierProduct(): void {

        $this->assertNull(JsonDeserializer::deserializePriceListSupplierProduct([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializePriceListSupplierProduct.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializePriceListSupplierProduct($data);
        $this->assertInstanceOf(PriceListSupplierProduct::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::DATE_END, $res->getDateEnd());
        $this->assertEquals(SerializerKeys::DATE_START, $res->getDateStart());
        $this->assertEquals(SerializerKeys::DATE_UPDATED, $res->getDateUpdated());
        $this->assertTrue($res->getIsAvailable());
        $this->assertFalse($res->getIsCurrent());
        $this->assertNull($res->getIsFuture());
        $this->assertTrue($res->getIsOrderable());
        $this->assertEquals(0.1, $res->getPriceBillingUnit());
        $this->assertNotNull($res->getPriceList());
        $this->assertEquals(0.2, $res->getPriceOrderUnit());
        $this->assertEquals(3, $res->getReceivedQuantity());
        //$this->assertNotNull($res->getSupplierProduct());
        $this->assertEquals(4, $res->getTargetQuantity());
    }

    /**
     * Test deserializeProdFamily()
     *
     * @return void
     */
    public function testDeserializeProdFamily(): void {

        $this->assertNull(JsonDeserializer::deserializeProdFamily([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeProdFamily.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeProdFamily($data);
        $this->assertInstanceOf(ProdFamily::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeProduct()
     *
     * @return void
     */
    public function testDeserializeProduct(): void {

        $this->assertNull(JsonDeserializer::deserializeProduct([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeProduct.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeProduct($data);
        $this->assertInstanceOf(Product::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertCount(1, $res->getAllergens());
        $this->assertEquals(2, $res->getBestBeforeStatus());
        $this->assertEquals(SerializerKeys::BRAND, $res->getBrand());
        $this->assertCount(1, $res->getCertifications());
        $this->assertEquals(SerializerKeys::CODE_INTERNAL, $res->getCodeInternal());
        $this->assertCount(1, $res->getCodes());
        $this->assertEquals(SerializerKeys::COMPOSITION, $res->getComposition());
        $this->assertEquals(SerializerKeys::DATE_CREATED, $res->getDateCreated());
        $this->assertEquals(SerializerKeys::DATE_UPDATED, $res->getDateUpdated());
        $this->assertEquals(SerializerKeys::DOCUMENT_URL, $res->getDocumentUrl());
        $this->assertEquals(SerializerKeys::EAN_13, $res->getEan13());
        $this->assertEquals(SerializerKeys::EXT_DOCUMENT_PRODUCT_SHEET, $res->getExtDocumentProductSheet());
        $this->assertNotNull($res->getFamily());
        $this->assertCount(1, $res->getGenerics());
        $this->assertEquals(BaseSerializerKeys::ICON, $res->getIcon());
        $this->assertEquals(3, $res->getIdDocumentProductSheet());
        $this->assertEquals(4, $res->getIdSiteOwner());
        $this->assertEquals(BaseSerializerKeys::IMAGE, $res->getImage());
        $this->assertEquals(SerializerKeys::IMPORTED_ORIGIN_SUPPLIER_LABEL, $res->getImportedOriginSupplierLabel());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(SerializerKeys::LABEL_DOCUMENT_PRODUCT_SHEET, $res->getLabelDocumentProductSheet());
        $this->assertEquals(SerializerKeys::LABEL_PUBLIC, $res->getLabelPublic());
        $this->assertNotNull($res->getNutritionValue());
        $this->assertNotNull($res->getOrigin());
        $this->assertCount(1, $res->getPurchaseGenerics());
        $this->assertNotNull($res->getQuality());
        $this->assertNotNull($res->getRange());
        $this->assertEquals(5, $res->getRatioCookedOverRaw());
        $this->assertEquals(SerializerKeys::REF_PRODUCT_OF_SUPPLIER, $res->getRefProductOfSupplier());
        $this->assertNotNull($res->getStorageType());
        $this->assertEquals(SerializerKeys::SUPPLIER_ALLERGEN, $res->getSupplierAllergen());
        $this->assertEquals(SerializerKeys::SUPPLIER_CERTIFICATION, $res->getSupplierCertification());
        $this->assertEquals(SerializerKeys::SUPPLIER_LABEL, $res->getSupplierLabel());
        $this->assertNotNull($res->getTax());
        $this->assertEquals(6, $res->getWeightPerPiece());
        $this->assertEquals(7, $res->getWeightProductionUnit());
    }

    /**
     * Test deserializeProductionUnit()
     *
     * @return void
     */
    public function testDeserializeProductionUnit(): void {

        $this->assertNull(JsonDeserializer::deserializeProductionUnit([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeProductionUnit.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeProductionUnit($data);
        $this->assertInstanceOf(ProductionUnit::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::CODE, $res->getCode());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeQuality()
     *
     * @return void
     */
    public function testDeserializeQuality(): void {

        $this->assertNull(JsonDeserializer::deserializeQuality([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeQuality.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeQuality($data);
        $this->assertInstanceOf(Quality::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeRange()
     *
     * @return void
     */
    public function testDeserializeRange(): void {

        $this->assertNull(JsonDeserializer::deserializeRange([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeRange.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeRange($data);
        $this->assertInstanceOf(Range::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeSite()
     *
     * @return void
     */
    public function testDeserializeSite(): void {

        $this->assertNull(JsonDeserializer::deserializeSite([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeSite.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeSite($data);
        $this->assertInstanceOf(Site::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertNotNull($res->getAccountingGeneral());
        $this->assertCount(1, $res->getAddresses());
        $this->assertNotNull($res->getAddressInvoicing());
        $this->assertEquals(SerializerKeys::APPLY_TO_CHILDREN_SITES, $res->getApplyToChildrenSites());
        $this->assertNotNull($res->getAutomaticStockTransfer());
        $this->assertEquals(2, $res->getBillableStatus());
        $this->assertTrue($res->getBlockClosingInventoryWithPendingReceipts());
        $this->assertEquals(SerializerKeys::CODE_GLN, $res->getCodeGln());
        $this->assertEquals(SerializerKeys::CODE_INTERNAL, $res->getCodeInternal());
        $this->assertNotNull($res->getControlSampleConfig());
        $this->assertEquals(SerializerKeys::DATE_START_BILLING, $res->getDateStartBilling());
        $this->assertEquals(3, $res->getDepth());
        $this->assertTrue($res->getDisplayNegativeStock());
        $this->assertNull($res->getExtData());
        $this->assertEquals(SerializerKeys::EXT_ID, $res->getExtId());
        $this->assertEquals(SerializerKeys::HAS_FINISHED_PRODUCTS, $res->getHasFinishedProducts());
        $this->assertEquals(SerializerKeys::ID_ACCOUNT_IDEOLYS, $res->getIdAccountIdeolys());
        $this->assertEquals(SerializerKeys::ID_ACCOUNT_IDEOLYS_ROOT, $res->getIdAccountIdeolysRoot());
        $this->assertEquals(4, $res->getIdParent());
        $this->assertEquals(5, $res->getIdTree());
        $this->assertEquals(SerializerKeys::IS_DOING_STOCK_TRANSFER, $res->getIsDoingStockTransfer());
        $this->assertEquals(SerializerKeys::IS_PAYMENT_ACTIVE, $res->getIsPaymentActive());
        $this->assertEquals(SerializerKeys::IS_USING_ONLY_ORDERABLE_SUPPLIER_PRODUCT, $res->getIsUsingOnlyOrderableSupplierProduct());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(BaseSerializerKeys::LINK, $res->getLink());
        $this->assertEquals(6, $res->getLeftBorder());
        $this->assertNotNull($res->getParams());
        $this->assertEquals(7, $res->getRightBorder());
        $this->assertEquals(8, $res->getStatus());
        $this->assertEquals(9, $res->getStockValuationType());
        $this->assertEquals(SerializerKeys::STOCK_WITHDRAWAL_ORIGIN, $res->getStockWithdrawalOrigin());
        $this->assertNotNull($res->getSupplier());
        $this->assertNotNull($res->getSupplierProductReference());
        $this->assertCount(1, $res->getTags());
        $this->assertEquals(10, $res->getType());
        $this->assertTrue($res->getUseGrossQuantityInRecipe());
        $this->assertFalse($res->getUseNetQuantityInRecipe());
        $this->assertNull($res->getZeroQuantityByDefault());
    }

    /**
     * Test deserializeStorageType()
     *
     * @return void
     */
    public function testDeserializeStorageType(): void {

        $this->assertNull(JsonDeserializer::deserializeStorageType([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeStorageType.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeStorageType($data);
        $this->assertInstanceOf(StorageType::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeStorehouse()
     *
     * @return void
     */
    public function testDeserializeStorehouse(): void {

        $this->assertNull(JsonDeserializer::deserializeStorehouse([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeStorehouse.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeStorehouse($data);
        $this->assertInstanceOf(Storehouse::class, $res);

        $this->assertEquals(1, $res->getId());

        $this->assertEquals(SerializerKeys::ACCOUNTING_NUMBER, $res->getAccountingNumber());
        $this->assertNotNull($res->getAddress());
        $this->assertTrue($res->getAllClaimWorkflow());
        $this->assertNotNull($res->getAnalyticalGroup());
        $this->assertFalse($res->getAutoCloseReceipt());
        $this->assertNull($res->getAutoSentPreOrder());
        $this->assertEquals(SerializerKeys::CATCHWORDS, $res->getCatchwords());
        $this->assertCount(1, $res->getCertifications());
        $this->assertEquals(SerializerKeys::CODE_GLN, $res->getCodeGLN());
        $this->assertEquals(SerializerKeys::CODE_INTERNAL, $res->getCodeInternal());
        $this->assertEquals(SerializerKeys::DATE_END, $res->getDateEnd());
        $this->assertEquals(SerializerKeys::DATE_LINKED, $res->getDateLinked());
        $this->assertEquals(SerializerKeys::DATE_START, $res->getDateStart());
        $this->assertEquals(SerializerKeys::DATE_VALID, $res->getDateValid());
        $this->assertEquals([], $res->getDeliveryDataSendingModes());
        $this->assertCount(1, $res->getDeliveryDaysProductions());
        $this->assertCount(1, $res->getDeliveryWeekdays());
        $this->assertCount(1, $res->getEmails());
        $this->assertCount(1, $res->getFaxes());
        $this->assertEquals(2, $res->getIdOasysSupplier());
        $this->assertEquals(3, $res->getIdSite());
        $this->assertEquals(4, $res->getIdSiteOwner());
        $this->assertEquals(SerializerKeys::INTRA_COMMUNITY_VAT, $res->getIntraCommunityVAT());
        $this->assertTrue($res->getIsActive());
        $this->assertFalse($res->getIsClaimForcedWhenReceiptUpdated());
        $this->assertNull($res->getIsClaimMustBeSendByFax());
        $this->assertTrue($res->getIsClaimMustBeSendByMail());
        $this->assertFalse($res->getIsCreditNoteMustBeSendByFax());
        $this->assertNull($res->getIsCreditNoteMustBeSendByMail());
        $this->assertTrue($res->getIsDeliveryNoteInvoice());
        $this->assertFalse($res->getIsInClaimWorkflow());
        $this->assertNull($res->getIsOnSupplierDirectory());
        $this->assertTrue($res->getIsOrderDelayNullable());
        $this->assertFalse($res->getIsPreorderAuthorized());
        $this->assertNull($res->getIsReceiptPricesFromPricelist());
        $this->assertTrue($res->getIsShippingCostNullable());
        $this->assertFalse($res->getIsStatusLinkInOrderEmail());
        $this->assertNull($res->getIsThresholdStrict());
        $this->assertTrue($res->getIsUsingDeliveryDaysProduction());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertCount(1, $res->getLinkedUsers());
        $this->assertEquals(BaseSerializerKeys::LOGO, $res->getLogo());
        $this->assertEquals(5, $res->getNbDaysBetweenDeliveryAndConsumption());
        $this->assertEquals(6, $res->getNbDaysDeliveryBeforeProduction());
        $this->assertEquals(7, $res->getNetworkFull());
        $this->assertEquals(8, $res->getOpeningDaysType());
        $this->assertEquals(9, $res->getOrderDelay());
        $this->assertEquals(10, $res->getOrderSupplierUnit());
        $this->assertEquals(11, $res->getPaymentMethod());
        $this->assertEquals(12, $res->getPaymentTerms());
        $this->assertCount(1, $res->getPhones());
        $this->assertEquals(SerializerKeys::PRESENTATION, $res->getPresentation());
        $this->assertCount(1, $res->getProdFamilies());
        $this->assertEquals(13, $res->getPurchaseType());
        $this->assertEquals(SerializerKeys::REF_SITE_OF_SUPPLIER, $res->getRefSiteOfSupplier());
        $this->assertEquals([1], $res->getSendingModes());
        $this->assertEquals(14, $res->getShippingCost());
        $this->assertEquals(SerializerKeys::SIRET, $res->getSiret());
        $this->assertEquals(SerializerKeys::SPECIFICATIONS, $res->getSpecifications());
        $this->assertNotNull($res->getSupplier());
        $this->assertEquals(15, $res->getThresholdOrder());
        $this->assertEquals([], $res->getTypes());
        $this->assertNull($res->getUniverses());
        $this->assertEquals(SerializerKeys::WEBSITE, $res->getWebsite());
    }

    /**
     * Test deserializeSupplier()
     *
     * @return void
     */
    public function testDeserializeSupplier(): void {

        $this->assertNull(JsonDeserializer::deserializeSupplier([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeSupplier.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeSupplier($data);
        $this->assertInstanceOf(Supplier::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::CODE_INTERNAL, $res->getCodeInternal());
        $this->assertTrue($res->getIsActive());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeSupplierProduct()
     *
     * @return void
     */
    public function testDeserializeSupplierProduct(): void {

        $this->assertNull(JsonDeserializer::deserializeSupplierProduct([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeSupplierProduct.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeSupplierProduct($data);
        $this->assertInstanceOf(SupplierProduct::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::BILLING_UNIT, $res->getBillingUnit());
        $this->assertEquals(2, $res->getChain());
        $this->assertEquals(SerializerKeys::CODE_INTERNAL, $res->getCodeInternal());
        $this->assertNotNull($res->getDairySubsidy());
        $this->assertEquals(3, $res->getDateCreated());
        $this->assertEquals(4, $res->getDateUpdated());
        $this->assertEquals(SerializerKeys::EXT_ID, $res->getExtId());
        $this->assertEquals(5, $res->getIdDocumentProductSheet());
        $this->assertEquals(6, $res->getIdSiteOwner());
        $this->assertTrue($res->getIsActive());
        $this->assertFalse($res->getIsDecimalAllowed());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(7, $res->getMinOrderQty());
        $this->assertEquals(8, $res->getNbBillingPerOrder());
        $this->assertEquals([1, 2, 3], $res->getNbProductionPerOrders());
        $this->assertEquals(9, $res->getNbStoragePerOrder());
        $this->assertEquals(SerializerKeys::ORDER_UNIT, $res->getOrderUnit());
        $this->assertNotNull($res->getPackagingLevel());
        $this->assertNotNull($res->getProduct());
        $this->assertEquals(10, $res->getPreOrderDelay());
        $this->assertEquals(BaseSerializerKeys::REFERENCE, $res->getReference());
        $this->assertEquals(SerializerKeys::STORAGE_UNIT, $res->getStorageUnit());
        $this->assertEquals(11, $res->getWeightOrderUnit());
    }

    /**
     * Test deserializeSupplierProductReference()
     *
     * @return void
     */
    public function testDeserializeSupplierProductReference(): void {

        $this->assertNull(JsonDeserializer::deserializeSupplierProductReference([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeSupplierProductReference.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeSupplierProductReference($data);
        $this->assertInstanceOf(SupplierProductReference::class, $res);

        $this->assertTrue($res->getApplyToChildrenSites());
        $this->assertTrue($res->getIsMandatory());
    }

    /**
     * Test deserializeTag()
     *
     * @return void
     */
    public function testDeserializeTag(): void {

        $this->assertNull(JsonDeserializer::deserializeTag([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeTag.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeTag($data);
        $this->assertInstanceOf(Tag::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(SerializerKeys::BACKGROUND_COLOR, $res->getBackgroundColor());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(2, $res->getType());
    }

    /**
     * Test deserializeTax()
     *
     * @return void
     */
    public function testDeserializeTax(): void {

        $this->assertNull(JsonDeserializer::deserializeTax([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeTax.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeTax($data);
        $this->assertInstanceOf(Tax::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
        $this->assertEquals(0.1, $res->getValue());
    }

    /**
     * Test deserializeTree()
     *
     * @return void
     */
    public function testDeserializeTree(): void {

        $this->assertNull(JsonDeserializer::deserializeTree([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeTree.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeTree($data);
        $this->assertInstanceOf(Tree::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }

    /**
     * Test deserializeUnit()
     *
     * @return void
     */
    public function testDeserializeUnit(): void {

        $this->assertNull(JsonDeserializer::deserializeUnit([]));

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Serializer/JsonDeserializerTest.testDeserializeUnit.json");
        $data = json_decode($json, true);

        $res = JsonDeserializer::deserializeUnit($data);
        $this->assertInstanceOf(Unit::class, $res);

        $this->assertEquals(1, $res->getId());
        $this->assertEquals(BaseSerializerKeys::CODE, $res->getCode());
        $this->assertEquals(BaseSerializerKeys::LABEL, $res->getLabel());
    }
}
