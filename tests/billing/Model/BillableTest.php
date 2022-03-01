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

use DateTime;
use DateTimeZone;
use Exception;
use JsonSerializable;
use WBW\Library\Billing\Model\BillableDetailInterface;
use WBW\Library\Billing\Model\BillableInterface;
use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillable;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class BillableTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/BillableTest.testJsonSerialize.json");

        $obj = new TestBillable();
        $obj->setComment("comment");
        $obj->setCreatedAt(new DateTime("2021-09-23 15:20:00.000000", new DateTimeZone("UTC")));
        $obj->setDate(new DateTime("2021-09-23 15:20:01.000000", new DateTimeZone("UTC")));
        $obj->setDiscountRate(0.1);
        $obj->setDiscountTotal(0.2);
        $obj->setExcludingVatTotal(0.3);
        $obj->setIncludingVatTotal(0.4);
        $obj->setNumber("number");
        $obj->setParent(new TestBillable());
        $obj->setReference("reference");
        $obj->setUpdatedAt(new DateTime("2021-09-23 15:20:02.000000", new DateTimeZone("UTC")));
        $obj->setVatTotal(0.5);

        $obj->addDetail(new TestBillableDetail());

        $res = $obj->jsonSerialize();
        $this->assertCount(13, $res);

        $this->assertEquals($data, json_encode($res, JSON_PRETTY_PRINT) . "\n");
    }

    /**
     * Tests onSubmit()
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
     * Tests removeDetail()
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
     * Tests setParent()
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
     * Tests __construct()
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
