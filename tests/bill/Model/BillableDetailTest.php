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

use WBW\Library\Bill\Model\BillableDetail;
use WBW\Library\Bill\Model\BillableDetailInterface;
use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Model\TaxableInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable detail test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class BillableDetailTest extends AbstractTestCase {

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
        $this->assertEquals(192.0, $obj->getIncludingVatTotal());
        $this->assertEquals(32.0, $obj->getVatTotal());
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
        $this->assertNull($obj->getDiscountTotal());
        $this->assertNull($obj->getExcludingVatTotal());
        $this->assertNull($obj->getIncludingVatTotal());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getQuantity());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getVatTotal());
    }
}