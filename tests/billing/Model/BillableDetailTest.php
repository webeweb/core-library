<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Model;

use JsonSerializable;
use WBW\Library\Billing\Model\BillableDetailInterface;
use WBW\Library\Billing\Model\BillableInterface;
use WBW\Library\Billing\Model\TaxableInterface;
use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable detail test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class BillableDetailTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/BillableDetailTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestBillableDetail();
        $obj->setDiscountAmount(0.1);
        $obj->setDiscountRate(0.2);
        $obj->setExcludingVatPrice(0.3);
        $obj->setIncludingVatPrice(0.4);
        $obj->setVatAmount(0.5);
        $obj->setVatRate(0.6);

        $obj->setComment("comment");
        $obj->setDiscountTotal(0.7);
        $obj->setExcludingVatTotal(0.8);
        $obj->setIncludingVatTotal(0.9);
        $obj->setLabel("label");
        $obj->setQuantity(1.0);
        $obj->setReference("reference");
        $obj->setVatTotal(1.1);

        $res = $obj->jsonSerialize();
        $this->assertCount(14, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests onSubmit()
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
     * Tests setBillable()
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
     * Tests __construct()
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
