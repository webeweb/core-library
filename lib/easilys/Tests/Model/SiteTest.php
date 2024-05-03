<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\AccountingGeneral;
use WBW\Library\Easilys\Model\Address;
use WBW\Library\Easilys\Model\AutomaticStockTransfer;
use WBW\Library\Easilys\Model\ControlSampleConfig;
use WBW\Library\Easilys\Model\ExtData;
use WBW\Library\Easilys\Model\Params;
use WBW\Library\Easilys\Model\Site;
use WBW\Library\Easilys\Model\SupplierProductReference;
use WBW\Library\Easilys\Model\Tag;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Site test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class SiteTest extends AbstractTestCase {

    /**
     * Test addAddress()
     *
     * @return void
     */
    public function testAddAddress(): void {

        // Set a Address mock.
        $address = new Address();

        $obj = new Site();

        $obj->addAddress($address);
        $this->assertSame($address, $obj->getAddresses()[0]);
    }

    /**
     * Test addTag()
     *
     * @return void
     */
    public function testAddTag(): void {

        // Set a Tag mock.
        $tag = new Tag();

        $obj = new Site();

        $obj->addTag($tag);
        $this->assertSame($tag, $obj->getTags()[0]);
    }

    /**
     * Test setAccountingGeneral()
     *
     * @return void
     */
    public function testSetAccountingGeneral(): void {

        // Set an Accounting general mock.
        $accountingGeneral = new AccountingGeneral();

        $obj = new Site();

        $obj->setAccountingGeneral($accountingGeneral);
        $this->assertSame($accountingGeneral, $obj->getAccountingGeneral());
    }

    /**
     * Test setAddressInvoicing()
     *
     * @return void
     */
    public function testSetAddressInvoicing(): void {

        // Set an Address mock.
        $address = new Address();

        $obj = new Site();

        $obj->setAddressInvoicing($address);
        $this->assertSame($address, $obj->getAddressInvoicing());
    }

    /**
     * Test setAutomaticStockTransfer()
     *
     * @return void
     */
    public function testSetAutomaticStockTransfer(): void {

        // Set an Automatic stock transfer.
        $automaticStockTransfer = new AutomaticStockTransfer();

        $obj = new Site();

        $obj->setAutomaticStockTransfer($automaticStockTransfer);
        $this->assertSame($automaticStockTransfer, $obj->getAutomaticStockTransfer());
    }

    /**
     * Test setBillableStatus()
     *
     * @return void
     */
    public function testSetBillableStatus(): void {

        $obj = new Site();

        $obj->setBillableStatus(1);
        $this->assertEquals(1, $obj->getBillableStatus());
    }

    /**
     * Test setBlockClosingInventoryWithPendingReceipts()
     *
     * @return void
     */
    public function testSetBlockClosingInventoryWithPendingReceipts(): void {

        $obj = new Site();

        $obj->setBlockClosingInventoryWithPendingReceipts(true);
        $this->assertTrue($obj->getBlockClosingInventoryWithPendingReceipts());
    }

    /**
     * Test setControlSampleConfig()
     *
     * @return void
     */
    public function testSetControlSampleConfig(): void {

        // Set a Control sample config.
        $controlSampleConfig = new ControlSampleConfig();

        $obj = new Site();

        $obj->setControlSampleConfig($controlSampleConfig);
        $this->assertSame($controlSampleConfig, $obj->getControlSampleConfig());
    }

    /**
     * Test setDateStartBilling()
     *
     * @return void
     */
    public function testSetDateStartBilling(): void {

        $obj = new Site();

        $obj->setDateStartBilling("dateStartBilling");
        $this->assertEquals("dateStartBilling", $obj->getDateStartBilling());
    }

    /**
     * Test setDepth()
     *
     * @return void
     */
    public function testSetDepth(): void {

        $obj = new Site();

        $obj->setDepth(1);
        $this->assertEquals(1, $obj->getDepth());
    }

    /**
     * Test setDisplayNegativeStock()
     *
     * @return void
     */
    public function testSetDisplayNegativeStock(): void {

        $obj = new Site();

        $obj->setDisplayNegativeStock(true);
        $this->assertTrue($obj->getDisplayNegativeStock());
    }

    /**
     * Test setExtData()
     *
     * @return void
     */
    public function testSetExtData(): void {

        // Set an Ext data mock.
        $extData = new ExtData();

        $obj = new Site();

        $obj->setExtData($extData);
        $this->assertSame($extData, $obj->getExtData());
    }

    /**
     * Test setHasFinishedProducts()
     *
     * @return void
     */
    public function testSetHasFinishedProducts(): void {

        $obj = new Site();

        $obj->setHasFinishedProducts(true);
        $this->assertTrue($obj->getHasFinishedProducts());
    }

    /**
     * Test setIdAccountIdeolys()
     *
     * @return void
     */
    public function testSetIdAccountIdeolys(): void {

        $obj = new Site();

        $obj->setIdAccountIdeolys("idAccountIdeolys");
        $this->assertEquals("idAccountIdeolys", $obj->getIdAccountIdeolys());
    }

    /**
     * Test setIdAccountIdeolysRoot()
     *
     * @return void
     */
    public function testSetIdAccountIdeolysRoot(): void {

        $obj = new Site();

        $obj->setIdAccountIdeolysRoot("idAccountIdeolysRoot");
        $this->assertEquals("idAccountIdeolysRoot", $obj->getIdAccountIdeolysRoot());
    }

    /**
     * Test setIsDoingStockTransfer()
     *
     * @return void
     */
    public function testSetIsDoingStockTransfer(): void {

        $obj = new Site();

        $obj->setIsDoingStockTransfer(true);
        $this->assertTrue($obj->getIsDoingStockTransfer());
    }

    /**
     * Test setIsPaymentActive()
     *
     * @return void
     */
    public function testSetIsPaymentActive(): void {

        $obj = new Site();

        $obj->setIsPaymentActive(true);
        $this->assertTrue($obj->getIsPaymentActive());
    }

    /**
     * Test setIsUsingOnlyOrderableSupplierProduct()
     *
     * @return void
     */
    public function testSetIsUsingOnlyOrderableSupplierProduct(): void {

        $obj = new Site();

        $obj->setIsUsingOnlyOrderableSupplierProduct(true);
        $this->assertTrue($obj->getIsUsingOnlyOrderableSupplierProduct());
    }

    /**
     * Test setLeftBorder()
     *
     * @return void
     */
    public function testSetLeftBorder(): void {

        $obj = new Site();

        $obj->setLeftBorder(1);
        $this->assertEquals(1, $obj->getLeftBorder());
    }

    /**
     * Test setParams()
     *
     * @return void
     */
    public function testSetParams(): void {

        // Set a Params mock.
        $params = new Params();

        $obj = new Site();

        $obj->setParams($params);
        $this->assertSame($params, $obj->getParams());
    }

    /**
     * Test setRightBorder()
     *
     * @return void
     */
    public function testSetRightBorder(): void {

        $obj = new Site();

        $obj->setRightBorder(1);
        $this->assertEquals(1, $obj->getRightBorder());
    }

    /**
     * Test setStockValuationType()
     *
     * @return void
     */
    public function testSetStockValuationType(): void {

        $obj = new Site();

        $obj->setStockValuationType(1);
        $this->assertEquals(1, $obj->getStockValuationType());
    }

    /**
     * Test setStockWithdrawalOrigin()
     *
     * @return void
     */
    public function testSetStockWithdrawalOrigin(): void {

        $obj = new Site();

        $obj->setStockWithdrawalOrigin("stockWithdrawalOrigin");
        $this->assertEquals("stockWithdrawalOrigin", $obj->getStockWithdrawalOrigin());
    }

    /**
     * Test setSupplierProductReference()
     *
     * @return void
     */
    public function testSetSupplierProductReference(): void {

        // Set a Supplier mock.
        $supplierProductReference = new SupplierProductReference();

        $obj = new Site();

        $obj->setSupplierProductReference($supplierProductReference);
        $this->assertSame($supplierProductReference, $obj->getSupplierProductReference());
    }

    /**
     * Test setUseGrossQuantityInRecipe()
     *
     * @return void
     */
    public function testSetUseGrossQuantityInRecipe(): void {

        $obj = new Site();

        $obj->setUseGrossQuantityInRecipe(true);
        $this->assertTrue($obj->getUseGrossQuantityInRecipe());
    }

    /**
     * Test setUseNetQuantityInRecipe()
     *
     * @return void
     */
    public function testSetUseNetQuantityInRecipe(): void {

        $obj = new Site();

        $obj->setUseNetQuantityInRecipe(true);
        $this->assertTrue($obj->getUseNetQuantityInRecipe());
    }

    /**
     * Test setZeroQuantityByDefault()
     *
     * @return void
     */
    public function testSetZeroQuantityByDefault(): void {

        $obj = new Site();

        $obj->setZeroQuantityByDefault(true);
        $this->assertTrue($obj->getZeroQuantityByDefault());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Site();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getApplyToChildrenSites());
        $this->assertNull($obj->getCodeGln());
        $this->assertNull($obj->getCodeInternal());
        $this->assertNull($obj->getExtId());
        $this->assertNull($obj->getIdParent());
        $this->assertNull($obj->getIdTree());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getLink());
        $this->assertNull($obj->getStatus());
        $this->assertNull($obj->getSupplier());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getAccountingGeneral());
        $this->assertNull($obj->getAddressInvoicing());
        $this->assertEquals([], $obj->getAddresses());
        $this->assertNull($obj->getAutomaticStockTransfer());
        $this->assertNull($obj->getBillableStatus());
        $this->assertNull($obj->getBlockClosingInventoryWithPendingReceipts());
        $this->assertNull($obj->getControlSampleConfig());
        $this->assertNull($obj->getDateStartBilling());
        $this->assertNull($obj->getDepth());
        $this->assertNull($obj->getDisplayNegativeStock());
        $this->assertNull($obj->getExtData());
        $this->assertNull($obj->getHasFinishedProducts());
        $this->assertNull($obj->getIdAccountIdeolys());
        $this->assertNull($obj->getIdAccountIdeolysRoot());
        $this->assertNull($obj->getIsDoingStockTransfer());
        $this->assertNull($obj->getIsPaymentActive());
        $this->assertNull($obj->getIsUsingOnlyOrderableSupplierProduct());
        $this->assertNull($obj->getLeftBorder());
        $this->assertNull($obj->getParams());
        $this->assertNull($obj->getRightBorder());
        $this->assertNull($obj->getStockValuationType());
        $this->assertNull($obj->getStockWithdrawalOrigin());
        $this->assertNull($obj->getSupplierProductReference());
        $this->assertEquals([], $obj->getTags());
        $this->assertNull($obj->getUseGrossQuantityInRecipe());
        $this->assertNull($obj->getUseNetQuantityInRecipe());
        $this->assertNull($obj->getZeroQuantityByDefault());
    }
}
