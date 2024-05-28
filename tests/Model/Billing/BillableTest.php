<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\Billing;

use JsonSerializable;
use Throwable;
use WBW\Library\Common\Model\Billing\BillableDetailInterface;
use WBW\Library\Common\Model\Billing\BillableInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestBillable;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestBillableDetail;

/**
 * Billable test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Billing
 */
class BillableTest extends AbstractTestCase {

    /**
     * Test hasDetails()
     *
     * @return void
     */
    public function testHasDetails(): void {

        $obj = new TestBillable();

        $this->assertFalse($obj->hasDetails());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testJsonSerialize(): void {

        $obj = new TestBillable();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test onSubmit()
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
     * Test removeDetail()
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
     * Test setParent()
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
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBillable();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
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
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getUpdatedAt());
        $this->assertNull($obj->getVatTotal());
    }
}
