<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Model;

use WBW\Library\Bill\Model\BillableDetailInterface;
use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Model\TaxableInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillable;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable detail test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class BillableDetailTest extends AbstractTestCase {

    /**
     * Tests the onSubmit() method.
     *
     * @return void
     */
    public function testOnSubmit(): void {

        $obj = new TestBillableDetail();

        $obj->onSubmit();
        $this->assertEquals(0.0, $obj->getDiscountAmount());
        $this->assertEquals(0.0, $obj->getIncludingVatPrice());
        $this->assertEquals(0.0, $obj->getVatAmount());
        $this->assertEquals(0.0, $obj->getDiscountTotal());
        $this->assertEquals(0.0, $obj->getExcludingVatTotal());
        $this->assertEquals(0.0, $obj->getIncludingVatTotal());
        $this->assertEquals(0.0, $obj->getVatTotal());

        $obj->setExcludingVatPrice(100);
        $obj->setDiscountRate(20);
        $obj->setVatRate(20);
        $obj->setQuantity(2);

        $obj->onSubmit();
        $this->assertEquals(20.0, $obj->getDiscountAmount());
        $this->assertEquals(96.0, $obj->getIncludingVatPrice());
        $this->assertEquals(16.0, $obj->getVatAmount());
        $this->assertEquals(40.0, $obj->getDiscountTotal());
        $this->assertEquals(160.0, $obj->getExcludingVatTotal());
        $this->assertEquals(192.0, $obj->getIncludingVatTotal());
        $this->assertEquals(32.0, $obj->getVatTotal());
    }

    /**
     * Tests the setBillable() method.
     *
     * @return void
     */
    public function testSetBillable(): void {

        // Set a Billable mock.
        $billable = $this->getMockBuilder(BillableInterface::class)->getMock();

        $obj = new TestBillableDetail();

        $obj->setBillable($billable);
        $this->assertSame($billable, $obj->getBillable());
    }

    /**
     * Tests the __clone() method.
     *
     * @return void
     */
    public function test__clone(): void {

        // Set a Billable mock.
        $billable = new TestBillable();

        $obj = new TestBillableDetail();
        $obj->setDiscountAmount(0.01);
        $obj->setDiscountRate(0.02);
        $obj->setExcludingVatPrice(0.03);
        $obj->setIncludingVatPrice(0.04);
        $obj->setVatAmount(0.05);
        $obj->setVatRate(0.06);

        $obj->setBillable($billable);
        $obj->setComment("commant");
        $obj->setDiscountAmount(0.07);
        $obj->setDiscountRate(0.08);
        $obj->setDiscountTotal(0.09);
        $obj->setExcludingVatTotal(0.10);
        $obj->setIncludingVatTotal(0.11);
        $obj->setLabel("label");
        $obj->setQuantity(0.12);
        $obj->setReference("reference");
        $obj->setVatTotal(0.13);

        $res = clone $obj;
        $this->assertEquals($obj->getDiscountAmount(), $res->getDiscountAmount());
        $this->assertEquals($obj->getDiscountRate(), $res->getDiscountRate());
        $this->assertEquals($obj->getExcludingVatPrice(), $res->getExcludingVatPrice());
        $this->assertEquals($obj->getIncludingVatPrice(), $res->getIncludingVatPrice());
        $this->assertEquals($obj->getVatAmount(), $res->getVatAmount());
        $this->assertEquals($obj->getVatRate(), $res->getVatRate());

        $this->assertEquals($obj->getBillable(), $res->getBillable());
        $this->assertEquals($obj->getComment(), $res->getComment());
        $this->assertEquals($obj->getDiscountAmount(), $res->getDiscountAmount());
        $this->assertEquals($obj->getDiscountRate(), $res->getDiscountRate());
        $this->assertEquals($obj->getDiscountTotal(), $res->getDiscountTotal());
        $this->assertEquals($obj->getExcludingVatTotal(), $res->getExcludingVatTotal());
        $this->assertEquals($obj->getIncludingVatTotal(), $res->getIncludingVatTotal());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
        $this->assertEquals($obj->getQuantity(), $res->getQuantity());
        $this->assertEquals($obj->getReference(), $res->getReference());
        $this->assertEquals($obj->getVatTotal(), $res->getVatTotal());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBillableDetail();

        $this->assertInstanceOf(BillableDetailInterface::class, $obj);
        $this->assertInstanceOf(TaxableInterface::class, $obj);

        $this->assertNull($obj->getBillable());
        $this->assertNull($obj->getComment());
        $this->assertNull($obj->getDiscountAmount());
        $this->assertNull($obj->getDiscountRate());
        $this->assertNull($obj->getDiscountTotal());
        $this->assertNull($obj->getExcludingVatTotal());
        $this->assertNull($obj->getIncludingVatTotal());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getQuantity());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getVatTotal());
    }
}