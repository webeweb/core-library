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

use WBW\Library\Easilys\Model\PriceList;
use WBW\Library\Easilys\Model\PriceListSupplierProduct;
use WBW\Library\Easilys\Model\SupplierProduct;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Price list supplier product test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class PriceListSupplierProductTest extends AbstractTestCase {

    /**
     * Test setIsAvailable()
     *
     * @return void
     */
    public function testSetIsAvailable(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setIsAvailable(true);
        $this->assertTrue($obj->getIsAvailable());
    }

    /**
     * Test setIsCurrent()
     *
     * @return void
     */
    public function testSetIsCurrent(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setIsCurrent(true);
        $this->assertTrue($obj->getIsCurrent());
    }

    /**
     * Test setIsFuture()
     *
     * @return void
     */
    public function testSetIsFuture(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setIsFuture(true);
        $this->assertTrue($obj->getIsFuture());
    }

    /**
     * Test setIsOrderable()
     *
     * @return void
     */
    public function testSetIsOrderable(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setIsOrderable(true);
        $this->assertTrue($obj->getIsOrderable());
    }

    /**
     * Test setPriceBillingUnit()
     *
     * @return void
     */
    public function testSetPriceBillingUnit(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setPriceBillingUnit(0.1);
        $this->assertEquals(0.1, $obj->getPriceBillingUnit());
    }

    /**
     * Test setPriceList()
     *
     * @return void
     */
    public function testSetPriceList(): void {

        // Set a Price list mock.
        $priceList = new PriceList();

        $obj = new PriceListSupplierProduct();

        $obj->setPriceList($priceList);
        $this->assertSame($priceList, $obj->getPriceList());
    }

    /**
     * Test setPriceOrderUnit()
     *
     * @return void
     */
    public function testSetPriceOrderUnit(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setPriceOrderUnit(0.1);
        $this->assertEquals(0.1, $obj->getPriceOrderUnit());
    }

    /**
     * Test setReceivedQuantity()
     *
     * @return void
     */
    public function testSetReceivedQuantity(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setReceivedQuantity(1);
        $this->assertEquals(1, $obj->getReceivedQuantity());
    }

    /**
     * Test setSupplierProduct()
     *
     * @return void
     */
    public function testSetSupplierProduct(): void {

        // Set a Supplier product mock.
        $supplierProduct = new SupplierProduct();

        $obj = new PriceListSupplierProduct();

        $obj->setSupplierProduct($supplierProduct);
        $this->assertSame($supplierProduct, $obj->getSupplierProduct());
    }

    /**
     * Test setTargetQuantity()
     *
     * @return void
     */
    public function testSetTargetQuantity(): void {

        $obj = new PriceListSupplierProduct();

        $obj->setTargetQuantity(1);
        $this->assertEquals(1, $obj->getTargetQuantity());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PriceListSupplierProduct();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getDateEnd());
        $this->assertNull($obj->getDateStart());
        $this->assertNull($obj->getDateUpdated());
        $this->assertNull($obj->getIsValidated());

        $this->assertNull($obj->getIsAvailable());
        $this->assertNull($obj->getIsCurrent());
        $this->assertNull($obj->getIsFuture());
        $this->assertNull($obj->getIsOrderable());
        $this->assertNull($obj->getPriceBillingUnit());
        $this->assertNull($obj->getPriceList());
        $this->assertNull($obj->getPriceOrderUnit());
        $this->assertNull($obj->getReceivedQuantity());
        $this->assertNull($obj->getSupplierProduct());
        $this->assertNull($obj->getTargetQuantity());
    }
}
