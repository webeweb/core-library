<?php

declare(strict_types = 1);
/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Serializer;

use WBW\Library\Easilys\Serializer\SerializerKeys;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("accountingCreditInvoice", SerializerKeys::ACCOUNTING_CREDIT_INVOICE);
        $this->assertEquals("accountingGeneral", SerializerKeys::ACCOUNTING_GENERAL);
        $this->assertEquals("accountingGeneralSupplier", SerializerKeys::ACCOUNTING_GENERAL_SUPPLIER);
        $this->assertEquals("accountingNumber", SerializerKeys::ACCOUNTING_NUMBER);
        $this->assertEquals("accountingPurchaseInvoice", SerializerKeys::ACCOUNTING_PURCHASE_INVOICE);
        $this->assertEquals("address", SerializerKeys::ADDRESS);
        $this->assertEquals("addresses", SerializerKeys::ADDRESSES);
        $this->assertEquals("addressInvoicing", SerializerKeys::ADDRESS_INVOICING);
        $this->assertEquals("allergens", SerializerKeys::ALLERGENS);
        $this->assertEquals("allClaimWorkflow", SerializerKeys::ALL_CLAIM_WORKFLOW);
        $this->assertEquals("amount", SerializerKeys::AMOUNT);
        $this->assertEquals("amountForConsumptionSite", SerializerKeys::AMOUNT_FOR_CONSUMPTION_SITE);
        $this->assertEquals("amountForProductionSite", SerializerKeys::AMOUNT_FOR_PRODUCTION_SITE);
        $this->assertEquals("analyticalGroup", SerializerKeys::ANALYTICAL_GROUP);
        $this->assertEquals("applyToChildrenSites", SerializerKeys::APPLY_TO_CHILDREN_SITES);
        $this->assertEquals("automaticStockTransfer", SerializerKeys::AUTOMATIC_STOCK_TRANSFER);
        $this->assertEquals("autoCloseReceipt", SerializerKeys::AUTO_CLOSE_RECEIPT);
        $this->assertEquals("autoSentPreOrder", SerializerKeys::AUTO_SENT_PRE_ORDER);

        $this->assertEquals("backgroundColor", SerializerKeys::BACKGROUND_COLOR);
        $this->assertEquals("bestBeforeStatus", SerializerKeys::BEST_BEFORE_STATUS);
        $this->assertEquals("billableStatus", SerializerKeys::BILLABLE_STATUS);
        $this->assertEquals("billingUnit", SerializerKeys::BILLING_UNIT);
        $this->assertEquals("blockClosingInventoryWithPendingReceipts", SerializerKeys::BLOCK_CLOSING_INVENTORY_WITH_PENDING_RECEIPTS);
        $this->assertEquals("brand", SerializerKeys::BRAND);

        $this->assertEquals("calcium", SerializerKeys::CALCIUM);
        $this->assertEquals("carbohydrate", SerializerKeys::CARBOHYDRATE);
        $this->assertEquals("catchwords", SerializerKeys::CATCHWORDS);
        $this->assertEquals("certifications", SerializerKeys::CERTIFICATIONS);
        $this->assertEquals("chain", SerializerKeys::CHAIN);
        $this->assertEquals("city", SerializerKeys::CITY);
        $this->assertEquals("context", SerializerKeys::CONTEXT);
        $this->assertEquals("codeGLN", SerializerKeys::CODE_GLN);
        $this->assertEquals("codeInternal", SerializerKeys::CODE_INTERNAL);
        $this->assertEquals("codePackaging", SerializerKeys::CODE_PACKAGING);
        $this->assertEquals("codes", SerializerKeys::CODES);
        $this->assertEquals("composition", SerializerKeys::COMPOSITION);
        $this->assertEquals("controlSampleConfig", SerializerKeys::CONTROL_SAMPLE_CONFIG);

        $this->assertEquals("dairySubsidy", SerializerKeys::DAIRY_SUBSIDY);
        $this->assertEquals("dateCreated", SerializerKeys::DATE_CREATED);
        $this->assertEquals("dateEnd", SerializerKeys::DATE_END);
        $this->assertEquals("dateLinked", SerializerKeys::DATE_LINKED);
        $this->assertEquals("dateStart", SerializerKeys::DATE_START);
        $this->assertEquals("dateStartBilling", SerializerKeys::DATE_START_BILLING);
        $this->assertEquals("dateUpdated", SerializerKeys::DATE_UPDATED);
        $this->assertEquals("dateValid", SerializerKeys::DATE_VALID);
        $this->assertEquals("days", SerializerKeys::DAYS);
        $this->assertEquals("deliveryDataSendingModes", SerializerKeys::DELIVERY_DATA_SENDING_MODES);
        $this->assertEquals("deliveryDaysProduction", SerializerKeys::DELIVERY_DAYS_PRODUCTION);
        $this->assertEquals("deliveryWeekdays", SerializerKeys::DELIVERY_WEEKDAYS);
        $this->assertEquals("depth", SerializerKeys::DEPTH);
        $this->assertEquals("displayNegativeStock", SerializerKeys::DISPLAY_NEGATIVE_STOCK);
        $this->assertEquals("documentUrl", SerializerKeys::DOCUMENT_URL);

        $this->assertEquals("ean13", SerializerKeys::EAN_13);
        $this->assertEquals("eMail", SerializerKeys::E_MAIL);
        $this->assertEquals("emails", SerializerKeys::EMAILS);
        $this->assertEquals("energyKcal", SerializerKeys::ENERGY_KCAL);
        $this->assertEquals("energyKj", SerializerKeys::ENERGY_KJ);
        $this->assertEquals("ethanol", SerializerKeys::ETHANOL);
        $this->assertEquals("extData", SerializerKeys::EXT_DATA);
        $this->assertEquals("extDocumentProductSheet", SerializerKeys::EXT_DOCUMENT_PRODUCT_SHEET);
        $this->assertEquals("extId", SerializerKeys::EXT_ID);

        $this->assertEquals("family", SerializerKeys::FAMILY);
        $this->assertEquals("faxes", SerializerKeys::FAXES);
        $this->assertEquals("fiber", SerializerKeys::FIBER);
        $this->assertEquals("fromConsumption", SerializerKeys::FROM_CONSUMPTION);

        $this->assertEquals("genericFamily", SerializerKeys::GENERIC_FAMILY);
        $this->assertEquals("generics", SerializerKeys::GENERICS);

        $this->assertEquals("hasFinishedProducts", SerializerKeys::HAS_FINISHED_PRODUCTS);

        $this->assertEquals("idAccountIdeolys", SerializerKeys::ID_ACCOUNT_IDEOLYS);
        $this->assertEquals("idAccountIdeolysRoot", SerializerKeys::ID_ACCOUNT_IDEOLYS_ROOT);
        $this->assertEquals("idDocumentProductSheet", SerializerKeys::ID_DOCUMENT_PRODUCT_SHEET);
        $this->assertEquals("idOasysSupplier", SerializerKeys::ID_OASYS_SUPPLIER);
        $this->assertEquals("idPackagingUnit", SerializerKeys::ID_PACKAGING_UNIT);
        $this->assertEquals("idParent", SerializerKeys::ID_PARENT);
        $this->assertEquals("idSite", SerializerKeys::ID_SITE);
        $this->assertEquals("idSiteOwner", SerializerKeys::ID_SITE_OWNER);
        $this->assertEquals("idTree", SerializerKeys::ID_TREE);
        $this->assertEquals("idUser", SerializerKeys::ID_USER);
        $this->assertEquals("importedOriginSupplierLabel", SerializerKeys::IMPORTED_ORIGIN_SUPPLIER_LABEL);
        $this->assertEquals("includingSugar", SerializerKeys::INCLUDING_SUGAR);
        $this->assertEquals("includingSaturatedFattyAcids", SerializerKeys::INCLUDING_SATURATED_FATTY_ACIDS);
        $this->assertEquals("intraCommunityVAT", SerializerKeys::INTRA_COMMUNITY_VAT);
        $this->assertEquals("isActive", SerializerKeys::IS_ACTIVE);
        $this->assertEquals("isAvailable", SerializerKeys::IS_AVAILABLE);
        $this->assertEquals("isClaimForcedWhenReceiptUpdated", SerializerKeys::IS_CLAIM_FORCED_WHEN_RECEIPT_UPDATED);
        $this->assertEquals("isClaimMustBeSendByFax", SerializerKeys::IS_CLAIM_MUST_BE_SEND_BY_FAX);
        $this->assertEquals("isClaimMustBeSendByMail", SerializerKeys::IS_CLAIM_MUST_BE_SEND_BY_MAIL);
        $this->assertEquals("isControlSampleActive", SerializerKeys::IS_CONTROL_SAMPLE_ACTIVE);
        $this->assertEquals("isControlSampleBillable", SerializerKeys::IS_CONTROL_SAMPLE_BILLABLE);
        $this->assertEquals("isCreditNoteMustBeSendByFax", SerializerKeys::IS_CREDIT_NOTE_MUST_BE_SEND_BY_FAX);
        $this->assertEquals("isCreditNoteMustBeSendByMail", SerializerKeys::IS_CREDIT_NOTE_MUST_BE_SEND_BY_MAIL);
        $this->assertEquals("isCurrent", SerializerKeys::IS_CURRENT);
        $this->assertEquals("isDecimalAllowed", SerializerKeys::IS_DECIMAL_ALLOWED);
        $this->assertEquals("isDeliveryNoteInvoice", SerializerKeys::IS_DELIVERY_NOTE_INVOICE);
        $this->assertEquals("isDoingStockTransfer", SerializerKeys::IS_DOING_STOCK_TRANSFER);
        $this->assertEquals("isFuture", SerializerKeys::IS_FUTURE);
        $this->assertEquals("isInClaimWorkflow", SerializerKeys::IS_IN_CLAIM_WORKFLOW);
        $this->assertEquals("isOrderable", SerializerKeys::IS_ORDERABLE);
        $this->assertEquals("isOrderDelayNullable", SerializerKeys::IS_ORDER_DELAY_NULLABLE);
        $this->assertEquals("isMain", SerializerKeys::IS_MAIN);
        $this->assertEquals("isMandatory", SerializerKeys::IS_MANDATORY);
        $this->assertEquals("isOnSupplierDirectory", SerializerKeys::IS_ON_SUPPLIER_DIRECTORY);
        $this->assertEquals("isPaymentActive", SerializerKeys::IS_PAYMENT_ACTIVE);
        $this->assertEquals("isPreorderAuthorized", SerializerKeys::IS_PREORDER_AUTHORIZED);
        $this->assertEquals("isReceiptPricesFromPricelist", SerializerKeys::IS_RECEIPT_PRICES_FROM_PRICELIST);
        $this->assertEquals("isShippingCostNullable", SerializerKeys::IS_SHIPPING_COST_NULLABLE);
        $this->assertEquals("isStatusLinkInOrderEmail", SerializerKeys::IS_STATUS_LINK_IN_ORDER_EMAIL);
        $this->assertEquals("isThresholdStrict", SerializerKeys::IS_THRESHOLD_STRICT);
        $this->assertEquals("isUsingDeliveryDaysProduction", SerializerKeys::IS_USING_DELIVERY_DAYS_PRODUCTION);
        $this->assertEquals("isUsingOnlyOrderableSupplierProduct", SerializerKeys::IS_USING_ONLY_ORDERABLE_SUPPLIER_PRODUCT);
        $this->assertEquals("isValidated", SerializerKeys::IS_VALIDATED);

        $this->assertEquals("labelDocumentProductSheet", SerializerKeys::LABEL_DOCUMENT_PRODUCT_SHEET);
        $this->assertEquals("labelPackaging", SerializerKeys::LABEL_PACKAGING);
        $this->assertEquals("labelPublic", SerializerKeys::LABEL_PUBLIC);
        $this->assertEquals("leftBorder", SerializerKeys::LEFT_BORDER);
        $this->assertEquals("linkedUsers", SerializerKeys::LINKED_USERS);
        $this->assertEquals("lipid", SerializerKeys::LIPID);

        $this->assertEquals("minOrderQty", SerializerKeys::MIN_ORDER_QTY);

        $this->assertEquals("nbBillingPerOrder", SerializerKeys::NB_BILLING_PER_ORDER);
        $this->assertEquals("nbDaysBetweenDeliveryAndConsumption", SerializerKeys::NB_DAYS_BETWEEN_DELIVERY_AND_CONSUMPTION);
        $this->assertEquals("nbDaysDeliveryBeforeProduction", SerializerKeys::NB_DAYS_DELIVERY_BEFORE_PRODUCTION);
        $this->assertEquals("nbProductionPerOrders", SerializerKeys::NB_PRODUCTION_PER_ORDERS);
        $this->assertEquals("nbStoragePerOrder", SerializerKeys::NB_STORAGE_PER_ORDER);
        $this->assertEquals("networkFull", SerializerKeys::NETWORK_FULL);
        $this->assertEquals("nutritionalValue", SerializerKeys::NUTRITION_VALUE);

        $this->assertEquals("openingDaysType", SerializerKeys::OPENING_DAYS_TYPE);
        $this->assertEquals("orderDelay", SerializerKeys::ORDER_DELAY);
        $this->assertEquals("orderUnit", SerializerKeys::ORDER_UNIT);
        $this->assertEquals("orderSupplierUnit", SerializerKeys::ORDER_SUPPLIER_UNIT);
        $this->assertEquals("organicAcid", SerializerKeys::ORGANIC_ACID);
        $this->assertEquals("origin", SerializerKeys::ORIGIN);

        $this->assertEquals("packagingLevel", SerializerKeys::PACKAGING_LEVEL);
        $this->assertEquals("params", SerializerKeys::PARAMS);
        $this->assertEquals("parent", SerializerKeys::PARENT);
        $this->assertEquals("paymentMethod", SerializerKeys::PAYMENT_METHOD);
        $this->assertEquals("paymentTerms", SerializerKeys::PAYMENT_TERMS);
        $this->assertEquals("phones", SerializerKeys::PHONES);
        $this->assertEquals("polyols", SerializerKeys::POLYOLS);
        $this->assertEquals("preOrderDelay", SerializerKeys::PRE_ORDER_DELAY);
        $this->assertEquals("presentation", SerializerKeys::PRESENTATION);
        $this->assertEquals("priceBillingUnit", SerializerKeys::PRICE_BILLING_UNIT);
        $this->assertEquals("priceList", SerializerKeys::PRICE_LIST);
        $this->assertEquals("priceOrderUnit", SerializerKeys::PRICE_ORDER_UNIT);
        $this->assertEquals("prodFamily", SerializerKeys::PROD_FAMILY);
        $this->assertEquals("prodFamilies", SerializerKeys::PROD_FAMILIES);
        $this->assertEquals("product", SerializerKeys::PRODUCT);
        $this->assertEquals("productionUnit", SerializerKeys::PRODUCTION_UNIT);
        $this->assertEquals("protein", SerializerKeys::PROTEIN);
        $this->assertEquals("purchaseGenerics", SerializerKeys::PURCHASE_GENERICS);
        $this->assertEquals("purchaseType", SerializerKeys::PURCHASE_TYPE);

        $this->assertEquals("quality", SerializerKeys::QUALITY);

        $this->assertEquals("range", SerializerKeys::RANGE);
        $this->assertEquals("ratioCookedOverRaw", SerializerKeys::RATIO_COOKED_OVER_RAW);
        $this->assertEquals("receivedQuantity", SerializerKeys::RECEIVED_QUANTITY);
        $this->assertEquals("refProductOfSupplier", SerializerKeys::REF_PRODUCT_OF_SUPPLIER);
        $this->assertEquals("refSiteOfSupplier", SerializerKeys::REF_SITE_OF_SUPPLIER);
        $this->assertEquals("rightBorder", SerializerKeys::RIGHT_BORDER);

        $this->assertEquals("salt", SerializerKeys::SALT);
        $this->assertEquals("sendingModes", SerializerKeys::SENDING_MODES);
        $this->assertEquals("specifications", SerializerKeys::SPECIFICATIONS);
        $this->assertEquals("shippingCost", SerializerKeys::SHIPPING_COST);
        $this->assertEquals("siret", SerializerKeys::SIRET);
        $this->assertEquals("status", SerializerKeys::STATUS);
        $this->assertEquals("stockValuationType", SerializerKeys::STOCK_VALUATION_TYPE);
        $this->assertEquals("stockWithdrawalOrigin", SerializerKeys::STOCK_WITHDRAWAL_ORIGIN);
        $this->assertEquals("storageType", SerializerKeys::STORAGE_TYPE);
        $this->assertEquals("storageUnit", SerializerKeys::STORAGE_UNIT);
        $this->assertEquals("supplier", SerializerKeys::SUPPLIER);
        $this->assertEquals("supplierAllergen", SerializerKeys::SUPPLIER_ALLERGEN);
        $this->assertEquals("supplierCertification", SerializerKeys::SUPPLIER_CERTIFICATION);
        $this->assertEquals("supplierLabel", SerializerKeys::SUPPLIER_LABEL);
        $this->assertEquals("supplierOrder_autoReceipt", SerializerKeys::SUPPLIER_ORDER_AUTO_RECEIPT);
        $this->assertEquals("supplierProduct", SerializerKeys::SUPPLIER_PRODUCT);
        $this->assertEquals("supplierProductReference", SerializerKeys::SUPPLIER_PRODUCT_REFERENCE);

        $this->assertEquals("tags", SerializerKeys::TAGS);
        $this->assertEquals("targetQuantity", SerializerKeys::TARGET_QUANTITY);
        $this->assertEquals("tax", SerializerKeys::TAX);
        $this->assertEquals("thresholdOrder", SerializerKeys::THRESHOLD_ORDER);
        $this->assertEquals("types", SerializerKeys::TYPES);

        $this->assertEquals("unit", SerializerKeys::UNIT);
        $this->assertEquals("universes", SerializerKeys::UNIVERSES);
        $this->assertEquals("useGrossQuantityInRecipe", SerializerKeys::USE_GROSS_QUANTITY_IN_RECIPE);
        $this->assertEquals("useNetQuantityInRecipe", SerializerKeys::USE_NET_QUANTITY_IN_RECIPE);

        $this->assertEquals("website", SerializerKeys::WEBSITE);
        $this->assertEquals("weekday", SerializerKeys::WEEKDAY);
        $this->assertEquals("weightOrderUnit", SerializerKeys::WEIGHT_ORDER_UNIT);
        $this->assertEquals("weightPerPiece", SerializerKeys::WEIGHT_PER_PIECE);
        $this->assertEquals("weightProductionUnit", SerializerKeys::WEIGHT_PRODUCTION_UNIT);

        $this->assertEquals("zeroQuantityByDefault", SerializerKeys::ZERO_QUANTITY_BY_DEFAULT);
    }
}
