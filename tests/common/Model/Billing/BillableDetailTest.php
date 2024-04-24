<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\Billing;

use JsonSerializable;
use WBW\Library\Common\Model\Billing\BillableDetailInterface;
use WBW\Library\Common\Model\Billing\BillableInterface;
use WBW\Library\Common\Model\Billing\TaxableInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestBillableDetail;

/**
 * Billable detail test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Billing
 */
class BillableDetailTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new TestBillableDetail();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test onSubmit()
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
     * Test setBillable()
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
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBillableDetail();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
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
