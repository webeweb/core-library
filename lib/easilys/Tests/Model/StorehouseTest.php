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

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\AnalyticalGroup;
use WBW\Library\Easilys\Model\DeliveryDaysProduction;
use WBW\Library\Easilys\Model\DeliveryWeekday;
use WBW\Library\Easilys\Model\Email;
use WBW\Library\Easilys\Model\Fax;
use WBW\Library\Easilys\Model\LinkedUser;
use WBW\Library\Easilys\Model\Phone;
use WBW\Library\Easilys\Model\ProdFamily;
use WBW\Library\Easilys\Model\Storehouse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Storehouse test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class StorehouseTest extends AbstractTestCase {

    /**
     * Test addDeliveryDaysProduction()
     *
     * @return void
     */
    public function testAddDeliveryDaysProduction(): void {

        // Set a Delivery day production mock.
        $deliveryDaysProduction = new DeliveryDaysProduction();

        $obj = new Storehouse();

        $obj->addDeliveryDaysProduction($deliveryDaysProduction);
        $this->assertSame($deliveryDaysProduction, $obj->getDeliveryDaysProductions()[0]);
    }

    /**
     * Test addDeliveryWeekday()
     *
     * @return void
     */
    public function testAddDeliveryWeekday(): void {

        // Set a Delivery weekday mock.
        $deliveryWeekday = new DeliveryWeekday();

        $obj = new Storehouse();

        $obj->addDeliveryWeekday($deliveryWeekday);
        $this->assertSame($deliveryWeekday, $obj->getDeliveryWeekdays()[0]);
    }

    /**
     * Test addEmail()
     *
     * @return void
     */
    public function testAddEmail(): void {

        // Set an Email mock.
        $email = new Email();

        $obj = new Storehouse();

        $obj->addEmail($email);
        $this->assertSame($email, $obj->getEmails()[0]);
    }

    /**
     * Test addFax()
     *
     * @return void
     */
    public function testAddFax(): void {

        // Set a Fax mock.
        $fax = new Fax();

        $obj = new Storehouse();

        $obj->addFax($fax);
        $this->assertSame($fax, $obj->getFaxes()[0]);
    }

    /**
     * Test addLinkedUser()
     *
     * @return void
     */
    public function testAddLinkedUser(): void {

        // Set a Linked user mock.
        $linkedUser = new LinkedUser();

        $obj = new Storehouse();

        $obj->addLinkedUser($linkedUser);
        $this->assertSame($linkedUser, $obj->getLinkedUsers()[0]);
    }

    /**
     * Test addPhone()
     *
     * @return void
     */
    public function testAddPhone(): void {

        // Set a Phone mock.
        $phone = new Phone();

        $obj = new Storehouse();

        $obj->addPhone($phone);
        $this->assertSame($phone, $obj->getPhones()[0]);
    }

    /**
     * Test addProdFamily()
     *
     * @return void
     */
    public function testAddProdFamily(): void {

        // Set a Prod family mock.
        $prodFamily = new ProdFamily();

        $obj = new Storehouse();

        $obj->addProdFamily($prodFamily);
        $this->assertSame($prodFamily, $obj->getProdFamilies()[0]);
    }

    /**
     * Test setAccountingNumber()
     *
     * @return void
     */
    public function testSetAccountingNumber(): void {

        $obj = new Storehouse();

        $obj->setAccountingNumber("accountingNumber");
        $this->assertEquals("accountingNumber", $obj->getAccountingNumber());
    }

    /**
     * Test setAllClaimWorkflow()
     *
     * @return void
     */
    public function testSetAllClaimWorkflow(): void {

        $obj = new Storehouse();

        $obj->setAllClaimWorkflow(true);
        $this->asserttrue($obj->getAllClaimWorkflow());
    }

    /**
     * Test setAnalyticalGroup()
     *
     * @return void
     */
    public function testSetAnalyticalGroup(): void {

        // Set an Analytical group.
        $analyticalGroup = new AnalyticalGroup();

        $obj = new Storehouse();

        $obj->setAnalyticalGroup($analyticalGroup);
        $this->assertSame($analyticalGroup, $obj->getAnalyticalGroup());
    }

    /**
     * Test setAutoCloseReceipt()
     *
     * @return void
     */
    public function testSetAutoCloseReceipt(): void {

        $obj = new Storehouse();

        $obj->setAutoCloseReceipt(true);
        $this->assertTrue($obj->getAutoCloseReceipt());
    }

    /**
     * Test setAutoSentPreOrder()
     *
     * @return void
     */
    public function testSetAutoSentPreOrder(): void {

        $obj = new Storehouse();

        $obj->setAutoSentPreOrder(true);
        $this->assertTrue($obj->getAutoSentPreOrder());
    }

    /**
     * Test setCatchwords()
     *
     * @return void
     */
    public function testSetCatchwords(): void {

        $obj = new Storehouse();

        $obj->setCatchwords("catchwords");
        $this->assertEquals("catchwords", $obj->getCatchwords());
    }

    /**
     * Test setDateLinked()
     *
     * @return void
     */
    public function testSetDateLinked(): void {

        $obj = new Storehouse();

        $obj->setDateLinked("dateLinked");
        $this->assertEquals("dateLinked", $obj->getDateLinked());
    }

    /**
     * Test setDateValid()
     *
     * @return void
     */
    public function testSetDateValid(): void {

        $obj = new Storehouse();

        $obj->setDateValid("dateValid");
        $this->assertEquals("dateValid", $obj->getDateValid());
    }

    /**
     * Test setDeliveryDataSendingModes()
     *
     * @return void
     */
    public function testSetDeliveryDataSendingModes(): void {

        $obj = new Storehouse();

        $obj->setDeliveryDataSendingModes([]);
        $this->assertEquals([], $obj->getDeliveryDataSendingModes());
    }

    /**
     * Test setIdOasysSupplier()
     *
     * @return void
     */
    public function testSetIdOasysSupplier(): void {

        $obj = new Storehouse();

        $obj->setIdOasysSupplier(1);
        $this->assertEquals(1, $obj->getIdOasysSupplier());
    }

    /**
     * Test setIntraCommunityVAT()
     *
     * @return void
     */
    public function testSetIntraCommunityVAT(): void {

        $obj = new Storehouse();

        $obj->setIntraCommunityVAT("intraCommunityVAT");
        $this->assertEquals("intraCommunityVAT", $obj->getIntraCommunityVAT());
    }

    /**
     * Test setIsClaimForcedWhenReceiptUpdated()
     *
     * @return void
     */
    public function testSetIsClaimForcedWhenReceiptUpdated(): void {

        $obj = new Storehouse();

        $obj->setIsClaimForcedWhenReceiptUpdated(true);
        $this->assertTrue($obj->getIsClaimForcedWhenReceiptUpdated());
    }

    /**
     * Test setIsClaimMustBeSendByFax()
     *
     * @return void
     */
    public function testSetIsClaimMustBeSendByFax(): void {

        $obj = new Storehouse();

        $obj->setIsClaimMustBeSendByFax(true);
        $this->assertTrue($obj->getIsClaimMustBeSendByFax());
    }

    /**
     * Test setIsClaimMustBeSendByMail()
     *
     * @return void
     */
    public function testSetIsClaimMustBeSendByMail(): void {

        $obj = new Storehouse();

        $obj->setIsClaimMustBeSendByMail(true);
        $this->assertTrue($obj->getIsClaimMustBeSendByMail());
    }

    /**
     * Test setIsCreditNoteMustBeSendByFax()
     *
     * @return void
     */
    public function testSetIsCreditNoteMustBeSendByFax(): void {

        $obj = new Storehouse();

        $obj->setIsCreditNoteMustBeSendByFax(true);
        $this->assertTrue($obj->getIsCreditNoteMustBeSendByFax());
    }

    /**
     * Test setIsCreditNoteMustBeSendByMail()
     *
     * @return void
     */
    public function testSetIsCreditNoteMustBeSendByMail(): void {

        $obj = new Storehouse();

        $obj->setIsCreditNoteMustBeSendByMail(true);
        $this->assertTrue($obj->getIsCreditNoteMustBeSendByMail());
    }

    /**
     * Test setIsDeliveryNoteInvoice()
     *
     * @return void
     */
    public function testSetIsDeliveryNoteInvoice(): void {

        $obj = new Storehouse();

        $obj->setIsDeliveryNoteInvoice(true);
        $this->assertTrue($obj->getIsDeliveryNoteInvoice());
    }

    /**
     * Test setIsInClaimWorkflow()
     *
     * @return void
     */
    public function testSetIsInClaimWorkflow(): void {

        $obj = new Storehouse();

        $obj->setIsInClaimWorkflow(true);
        $this->assertTrue($obj->getIsInClaimWorkflow());
    }

    /**
     * Test setIsOnSupplierDirectory()
     *
     * @return void
     */
    public function testSetIsOnSupplierDirectory(): void {

        $obj = new Storehouse();

        $obj->setIsOnSupplierDirectory(true);
        $this->assertTrue($obj->getIsOnSupplierDirectory());
    }

    /**
     * Test setIsOrderDelayNullable()
     *
     * @return void
     */
    public function testSetIsOrderDelayNullable(): void {

        $obj = new Storehouse();

        $obj->setIsOrderDelayNullable(true);
        $this->assertTrue($obj->getIsOrderDelayNullable());
    }

    /**
     * Test setIsPreorderAuthorized()
     *
     * @return void
     */
    public function testSetIsPreorderAuthorized(): void {

        $obj = new Storehouse();

        $obj->setIsPreorderAuthorized(true);
        $this->assertTrue($obj->getIsPreorderAuthorized());
    }

    /**
     * Test setIsReceiptPricesFromPricelist()
     *
     * @return void
     */
    public function testSetIsReceiptPricesFromPricelist(): void {

        $obj = new Storehouse();

        $obj->setIsReceiptPricesFromPricelist(true);
        $this->assertTrue($obj->getIsReceiptPricesFromPricelist());
    }

    /**
     * Test setIsShippingCostNullable()
     *
     * @return void
     */
    public function testSetIsShippingCostNullable(): void {

        $obj = new Storehouse();

        $obj->setIsShippingCostNullable(true);
        $this->assertTrue($obj->getIsShippingCostNullable());
    }

    /**
     * Test setIsStatusLinkInOrderEmail()
     *
     * @return void
     */
    public function testSetIsStatusLinkInOrderEmail(): void {

        $obj = new Storehouse();

        $obj->setIsStatusLinkInOrderEmail(true);
        $this->assertTrue($obj->getIsStatusLinkInOrderEmail());
    }

    /**
     * Test setIsThresholdStrict()
     *
     * @return void
     */
    public function testSetIsThresholdStrict(): void {

        $obj = new Storehouse();

        $obj->setIsThresholdStrict(true);
        $this->assertTrue($obj->getIsThresholdStrict());
    }

    /**
     * Test setIsUsingDeliveryDaysProduction()
     *
     * @return void
     */
    public function testSetIsUsingDeliveryDaysProduction(): void {

        $obj = new Storehouse();

        $obj->setIsUsingDeliveryDaysProduction(true);
        $this->assertTrue($obj->getIsUsingDeliveryDaysProduction());
    }

    /**
     * Test setLogo()
     *
     * @return void
     */
    public function testSetLogo(): void {

        $obj = new Storehouse();

        $obj->setLogo("logo");
        $this->assertEquals("logo", $obj->getLogo());
    }

    /**
     * Test setNbDaysBetweenDeliveryAndConsumption()
     *
     * @return void
     */
    public function testSetNbDaysBetweenDeliveryAndConsumption(): void {

        $obj = new Storehouse();

        $obj->setNbDaysBetweenDeliveryAndConsumption(1);
        $this->assertEquals(1, $obj->getNbDaysBetweenDeliveryAndConsumption());
    }

    /**
     * Test setNbDaysDeliveryBeforeProduction()
     *
     * @return void
     */
    public function testSetNbDaysDeliveryBeforeProduction(): void {

        $obj = new Storehouse();

        $obj->setNbDaysDeliveryBeforeProduction(1);
        $this->assertEquals(1, $obj->getNbDaysDeliveryBeforeProduction());
    }

    /**
     * Test setNetworkFull()
     *
     * @return void
     */
    public function testSetNetworkFull(): void {

        $obj = new Storehouse();

        $obj->setNetworkFull(1);
        $this->assertEquals(1, $obj->getNetworkFull());
    }

    /**
     * Test setOpeningDaysType()
     *
     * @return void
     */
    public function testSetOpeningDaysType(): void {

        $obj = new Storehouse();

        $obj->setOpeningDaysType(1);
        $this->assertEquals(1, $obj->getOpeningDaysType());
    }

    /**
     * Test setOrderDelay()
     *
     * @return void
     */
    public function testSetOrderDelay(): void {

        $obj = new Storehouse();

        $obj->setOrderDelay(1);
        $this->assertEquals(1, $obj->getOrderDelay());
    }

    /**
     * Test setOrderSupplierUnit()
     *
     * @return void
     */
    public function testSetOrderSupplierUnit(): void {

        $obj = new Storehouse();

        $obj->setOrderSupplierUnit(1);
        $this->assertEquals(1, $obj->getOrderSupplierUnit());
    }

    /**
     * Test setPaymentMethod()
     *
     * @return void
     */
    public function testSetPaymentMethod(): void {

        $obj = new Storehouse();

        $obj->setPaymentMethod(1);
        $this->assertEquals(1, $obj->getPaymentMethod());
    }

    /**
     * Test setPaymentTerms()
     *
     * @return void
     */
    public function testSetPaymentTerms(): void {

        $obj = new Storehouse();

        $obj->setPaymentTerms(1);
        $this->assertEquals(1, $obj->getPaymentTerms());
    }

    /**
     * Test setPresentation()
     *
     * @return void
     */
    public function testSetPresentation(): void {

        $obj = new Storehouse();

        $obj->setPresentation("presentation");
        $this->assertEquals("presentation", $obj->getPresentation());
    }

    /**
     * Test setPurchaseType()
     *
     * @return void
     */
    public function testSetPurchaseType(): void {

        $obj = new Storehouse();

        $obj->setPurchaseType(1);
        $this->assertEquals(1, $obj->getPurchaseType());
    }

    /**
     * Test setRefSiteOfSupplier()
     *
     * @return void
     */
    public function testSetRefSiteOfSupplier(): void {

        $obj = new Storehouse();

        $obj->setRefSiteOfSupplier("refSiteOfSupplier");
        $this->assertEquals("refSiteOfSupplier", $obj->getRefSiteOfSupplier());
    }

    /**
     * Test setSendingModes()
     *
     * @return void
     */
    public function testSetSendingModes(): void {

        $obj = new Storehouse();

        $obj->setSendingModes([]);
        $this->assertEquals([], $obj->getSendingModes());
    }

    /**
     * Test setShippingCost()
     *
     * @return void
     */
    public function testSetShippingCost(): void {

        $obj = new Storehouse();

        $obj->setShippingCost(1);
        $this->assertEquals(1, $obj->getShippingCost());
    }

    /**
     * Test setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new Storehouse();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Test setSpecifications()
     *
     * @return void
     */
    public function testSetSpecifications(): void {

        $obj = new Storehouse();

        $obj->setSpecifications("specifications");
        $this->assertEquals("specifications", $obj->getSpecifications());
    }

    /**
     * Test setThresholdOrder()
     *
     * @return void
     */
    public function testSetThresholdOrder(): void {

        $obj = new Storehouse();

        $obj->setThresholdOrder(1);
        $this->assertEquals(1, $obj->getThresholdOrder());
    }

    /**
     * Test setTypes()
     *
     * @return void
     */
    public function testSetTypes(): void {

        $obj = new Storehouse();

        $obj->setTypes([]);
        $this->assertEquals([], $obj->getTypes());
    }

    /**
     * Test setUniverses()
     *
     * @return void
     */
    public function testSetUniverses(): void {

        $obj = new Storehouse();

        $obj->setUniverses([]);
        $this->assertEquals([], $obj->getUniverses());
    }

    /**
     * Test setWebsite()
     *
     * @return void
     */
    public function testSetWebsite(): void {

        $obj = new Storehouse();

        $obj->setWebsite("website");
        $this->assertEquals("website", $obj->getWebsite());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Storehouse();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getAddress());
        $this->assertEquals([], $obj->getCertifications());
        $this->assertNull($obj->getCodeGln());
        $this->assertNull($obj->getCodeInternal());
        $this->assertNull($obj->getDateEnd());
        $this->assertNull($obj->getDateStart());
        $this->assertNull($obj->getIdSite());
        $this->assertNull($obj->getIdSiteOwner());
        $this->assertNull($obj->getIsActive());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getSupplier());

        $this->assertNull($obj->getAccountingNumber());
        $this->assertNull($obj->getAllClaimWorkflow());
        $this->assertNull($obj->getAnalyticalGroup());
        $this->assertNull($obj->getAutoCloseReceipt());
        $this->assertNull($obj->getAutoSentPreOrder());
        $this->assertNull($obj->getCatchwords());
        $this->assertNull($obj->getDateLinked());
        $this->assertNull($obj->getDateValid());
        $this->assertNull($obj->getDeliveryDataSendingModes());
        $this->assertEquals([], $obj->getDeliveryDaysProductions());
        $this->assertEquals([], $obj->getDeliveryWeekdays());
        $this->assertEquals([], $obj->getEmails());
        $this->assertEquals([], $obj->getFaxes());
        $this->assertNull($obj->getIdOasysSupplier());
        $this->assertNull($obj->getIntraCommunityVAT());
        $this->assertNull($obj->getIsClaimForcedWhenReceiptUpdated());
        $this->assertNull($obj->getIsClaimMustBeSendByFax());
        $this->assertNull($obj->getIsClaimMustBeSendByMail());
        $this->assertNull($obj->getIsCreditNoteMustBeSendByFax());
        $this->assertNull($obj->getIsCreditNoteMustBeSendByMail());
        $this->assertNull($obj->getIsDeliveryNoteInvoice());
        $this->assertNull($obj->getIsInClaimWorkflow());
        $this->assertNull($obj->getIsOnSupplierDirectory());
        $this->assertNull($obj->getIsOrderDelayNullable());
        $this->assertNull($obj->getIsPreorderAuthorized());
        $this->assertNull($obj->getIsReceiptPricesFromPricelist());
        $this->assertNull($obj->getIsShippingCostNullable());
        $this->assertNull($obj->getIsStatusLinkInOrderEmail());
        $this->assertNull($obj->getIsThresholdStrict());
        $this->assertNull($obj->getIsUsingDeliveryDaysProduction());
        $this->assertEquals([], $obj->getLinkedUsers());
        $this->assertNull($obj->getLogo());
        $this->assertNull($obj->getNbDaysBetweenDeliveryAndConsumption());
        $this->assertNull($obj->getNbDaysDeliveryBeforeProduction());
        $this->assertNull($obj->getNetworkFull());
        $this->assertNull($obj->getOpeningDaysType());
        $this->assertNull($obj->getOrderDelay());
        $this->assertNull($obj->getOrderSupplierUnit());
        $this->assertNull($obj->getPaymentMethod());
        $this->assertNull($obj->getPaymentTerms());
        $this->assertEquals([], $obj->getPhones());
        $this->assertNull($obj->getPresentation());
        $this->assertEquals([], $obj->getProdFamilies());
        $this->assertNull($obj->getPurchaseType());
        $this->assertNull($obj->getRefSiteOfSupplier());
        $this->assertNull($obj->getSendingModes());
        $this->assertNull($obj->getShippingCost());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSpecifications());
        $this->assertNull($obj->getThresholdOrder());
        $this->assertNull($obj->getTypes());
        $this->assertNull($obj->getUniverses());
        $this->assertNull($obj->getWebsite());
    }
}
