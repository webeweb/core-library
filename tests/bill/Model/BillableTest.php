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

use DateTime;
use Exception;
use WBW\Library\Bill\Model\BillableDetailInterface;
use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillable;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class BillableTest extends AbstractTestCase {

    /**
     * Tests the onSubmit() method.
     *
     * @return void
     */
    public function testOnSubmit(): void {

        // Set a Billable detail mock.
        $detail = new TestBillableDetail();

        $obj = new TestBillable();
        $obj->addDetail($detail);

        $obj->onSubmit();
        $this->assertEquals(0.0, $obj->getDiscountTotal());
        $this->assertEquals(0.0, $obj->getExcludingVatTotal());
        $this->assertEquals(0.0, $obj->getIncludingVatTotal());
        $this->assertEquals(0.0, $obj->getVatTotal());

        $detail->setExcludingVatPrice(100);
        $detail->setDiscountRate(20);
        $detail->setVatRate(20);
        $detail->setQuantity(2);

        $obj->onSubmit();
        $this->assertEquals(40.0, $obj->getDiscountTotal());
        $this->assertEquals(160.0, $obj->getExcludingVatTotal());
        $this->assertEquals(192.0, $obj->getIncludingVatTotal());
        $this->assertEquals(32.0, $obj->getVatTotal());
    }

    /**
     * Tests the removeDetail() method.
     *
     * @return void
     */
    public function testRemoveDetail(): void {

        // Set a Billable detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();

        $obj = new TestBillable();

        $obj->addDetail($detail);
        $this->assertSame($detail, $obj->getDetails()[0]);

        $obj->removeDetail($detail);
        $this->assertEquals([], $obj->getDetails());
    }

    /**
     * Tests the setParent() method.
     *
     * @return void
     */
    public function testSetParent(): void {

        // Set a Billable mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();

        $obj = new TestBillable();

        $obj->setParent($parent);
        $this->assertSame($parent, $obj->getParent());
    }

    /**
     * Tests the setPaymentDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPaymentDate(): void {

        // Set a Payment date mock.
        $paymentDate = new DateTime();

        $obj = new TestBillable();

        $obj->setPaymentDate($paymentDate);
        $this->assertSame($paymentDate, $obj->getPaymentDate());
    }

    /**
     * Tests the __clone() method.
     *
     * @return void
     */
    public function test__clone(): void {

        // Set a Billable mock.
        $parent = $this->getMockBuilder(BillableInterface::class)->getMock();

        // Set a Billable detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();

        $obj = new TestBillable();
        $obj->setComment("comment");
        $obj->setCreatedAt(new DateTime());
        $obj->setDate(new DateTime());
        $obj->addDetail($detail);
        $obj->setDiscountRate(0.01);
        $obj->setDiscountTotal(0.02);
        $obj->setExcludingVatTotal(0.03);
        $obj->setIncludingVatTotal(0.04);
        $obj->setNumber("number");
        $obj->setParent($parent);
        $obj->setPaymentDate(new DateTime());
        $obj->setReference("reference");
        $obj->setUpdatedAt(new DateTime());
        $obj->setVatTotal(0.05);

        $res = clone $obj;
        $this->assertEquals($obj->getComment(), $res->getComment());
        $this->assertEquals($obj->getCreatedAt(), $res->getCreatedAt());
        $this->assertEquals($obj->getDate(), $res->getDate());
        $this->assertEquals($obj->getDetails(), $res->getDetails());
        $this->assertEquals($obj->getDiscountRate(), $res->getDiscountRate());
        $this->assertEquals($obj->getDiscountTotal(), $res->getDiscountTotal());
        $this->assertEquals($obj->getExcludingVatTotal(), $res->getExcludingVatTotal());
        $this->assertEquals($obj->getIncludingVatTotal(), $res->getIncludingVatTotal());
        $this->assertEquals($obj->getNumber(), $res->getNumber());
        $this->assertEquals($obj->getParent(), $res->getParent());
        $this->assertEquals($obj->getPaymentDate(), $res->getPaymentDate());
        $this->assertEquals($obj->getReference(), $res->getReference());
        $this->assertEquals($obj->getUpdatedAt(), $res->getUpdatedAt());
        $this->assertEquals($obj->getVatTotal(), $res->getVatTotal());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBillable();

        $this->assertInstanceOf(BillableInterface::class, $obj);

        $this->assertNull($obj->getComment());
        $this->assertNull($obj->getCreatedAt());
        $this->assertNull($obj->getDate());
        $this->assertEquals([], $obj->getDetails());
        $this->assertNull($obj->getDiscountRate());
        $this->assertNull($obj->getDiscountTotal());
        $this->assertNull($obj->getExcludingVatTotal());
        $this->assertNull($obj->getIncludingVatTotal());
        $this->assertNull($obj->getNumber());
        $this->assertNull($obj->getParent());
        $this->assertNull($obj->getPaymentDate());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getUpdatedAt());
        $this->assertNull($obj->getVatTotal());
    }
}