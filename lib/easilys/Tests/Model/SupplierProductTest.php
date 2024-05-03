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

use WBW\Library\Easilys\Model\DairySubsidy;
use WBW\Library\Easilys\Model\PackagingLevel;
use WBW\Library\Easilys\Model\Product;
use WBW\Library\Easilys\Model\SupplierProduct;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Supplier product test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class SupplierProductTest extends AbstractTestCase {

    /**
     * Test setBillingUnit()
     *
     * @return void
     */
    public function testSetBillingUnit(): void {

        $obj = new SupplierProduct();

        $obj->setBillingUnit("billingUnit");
        $this->assertEquals("billingUnit", $obj->getBillingUnit());
    }

    /**
     * Test setChain()
     *
     * @return void
     */
    public function testSetChain(): void {

        $obj = new SupplierProduct();

        $obj->setChain(1);
        $this->assertEquals(1, $obj->getChain());
    }

    /**
     * Test setDairySubsidy()
     *
     * @return void
     */
    public function testSetDairySubsidy(): void {

        // Set a Dairy subsidy mock.
        $dairySubsidy = new DairySubsidy();

        $obj = new SupplierProduct();

        $obj->setDairySubsidy($dairySubsidy);
        $this->assertSame($dairySubsidy, $obj->getDairySubsidy());
    }

    /**
     * Test setIsDecimalAllowed()
     *
     * @return void
     */
    public function testSetIsDecimalAllowed(): void {

        $obj = new SupplierProduct();

        $obj->setIsDecimalAllowed(true);
        $this->assertTrue($obj->getIsDecimalAllowed());
    }

    /**
     * Test setMinOrderQty()
     *
     * @return void
     */
    public function testSetMinOrderQty(): void {

        $obj = new SupplierProduct();

        $obj->setMinOrderQty(1);
        $this->assertEquals(1, $obj->getMinOrderQty());
    }

    /**
     * Test setNbBillingPerOrder()
     *
     * @return void
     */
    public function testSetNbBillingPerOrder(): void {

        $obj = new SupplierProduct();

        $obj->setNbBillingPerOrder(1);
        $this->assertEquals(1, $obj->getNbBillingPerOrder());
    }

    /**
     * Test setNbProductionPerOrders()
     *
     * @return void
     */
    public function testSetNbProductionPerOrders(): void {

        $obj = new SupplierProduct();

        $obj->setNbProductionPerOrders([]);
        $this->assertEquals([], $obj->getNbProductionPerOrders());
    }

    /**
     * Test setNbStoragePerOrder()
     *
     * @return void
     */
    public function testSetNbStoragePerOrder(): void {

        $obj = new SupplierProduct();

        $obj->setNbStoragePerOrder(1);
        $this->assertEquals(1, $obj->getNbStoragePerOrder());
    }

    /**
     * Test setOrderUnit()
     *
     * @return void
     */
    public function testSetOrderUnit(): void {

        $obj = new SupplierProduct();

        $obj->setOrderUnit("orderUnit");
        $this->assertEquals("orderUnit", $obj->getOrderUnit());
    }

    /**
     * Test setPackagingLevel()
     *
     * @return void
     */
    public function testSetPackagingLevel(): void {

        // Set a Packaging level mock.
        $packagingLevel = new PackagingLevel();

        $obj = new SupplierProduct();

        $obj->setPackagingLevel($packagingLevel);
        $this->assertSame($packagingLevel, $obj->getPackagingLevel());
    }

    /**
     * Test setPreOrderDelay()
     *
     * @return void
     */
    public function testSetPreOrderDelay(): void {

        $obj = new SupplierProduct();

        $obj->setPreOrderDelay(1);
        $this->assertEquals(1, $obj->getPreOrderDelay());
    }

    /**
     * Test setProduct()
     *
     * @return void
     */
    public function testSetProduct(): void {

        // Set a Product mock.
        $product = new Product();

        $obj = new SupplierProduct();

        $obj->setProduct($product);
        $this->assertSame($product, $obj->getProduct());
    }

    /**
     * Test setStorageUnit()
     *
     * @return void
     */
    public function testSetStorageUnit(): void {

        $obj = new SupplierProduct();

        $obj->setStorageUnit("storageUnit");
        $this->assertEquals("storageUnit", $obj->getStorageUnit());
    }

    /**
     * Test setWeightOrderUnit()
     *
     * @return void
     */
    public function testSetWeightOrderUnit(): void {

        $obj = new SupplierProduct();

        $obj->setWeightOrderUnit(1);
        $this->assertEquals(1, $obj->getWeightOrderUnit());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj = new SupplierProduct();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getCodeInternal());
        $this->assertNull($obj->getDateCreated());
        $this->assertNull($obj->getDateUpdated());
        $this->assertNull($obj->getExtId());
        $this->assertNull($obj->getIdDocumentProductSheet());
        $this->assertNull($obj->getIdSiteOwner());
        $this->assertNull($obj->getIsActive());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getReference());

        $this->assertNull($obj->getBillingUnit());
        $this->assertNull($obj->getChain());
        $this->assertNull($obj->getDairySubsidy());
        $this->assertNull($obj->getIsDecimalAllowed());
        $this->assertNull($obj->getMinOrderQty());
        $this->assertNull($obj->getNbBillingPerOrder());
        $this->assertNull($obj->getNbProductionPerOrders());
        $this->assertNull($obj->getNbStoragePerOrder());
        $this->assertNull($obj->getOrderUnit());
        $this->assertNull($obj->getPackagingLevel());
        $this->assertNull($obj->getPreOrderDelay());
        $this->assertNull($obj->getProduct());
        $this->assertNull($obj->getStorageUnit());
        $this->assertNull($obj->getWeightOrderUnit());
    }
}
