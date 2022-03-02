<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Factory;

use WBW\Library\Billing\Factory\BillableDetailFactory;
use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillable;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable detail factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Factory
 */
class BillableDetailFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

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

        $res = BillableDetailFactory::copy($obj, new TestBillableDetail());
        $this->assertEquals($obj->getDiscountAmount(), $res->getDiscountAmount());
        $this->assertEquals($obj->getDiscountRate(), $res->getDiscountRate());
        $this->assertEquals($obj->getExcludingVatPrice(), $res->getExcludingVatPrice());
        $this->assertEquals($obj->getIncludingVatPrice(), $res->getIncludingVatPrice());
        $this->assertEquals($obj->getVatAmount(), $res->getVatAmount());
        $this->assertEquals($obj->getVatRate(), $res->getVatRate());

        $this->assertNull($res->getBillable());
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
}
