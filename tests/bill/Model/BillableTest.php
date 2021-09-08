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

/**
 * Billable test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class BillableTest extends AbstractTestCase {

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