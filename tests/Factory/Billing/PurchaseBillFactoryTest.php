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

namespace WBW\Library\Common\Tests\Factory\Billing;

use DateTime;
use WBW\Library\Common\Factory\Billing\PurchaseBillFactory;
use WBW\Library\Common\Model\Billing\BillableDetailInterface;
use WBW\Library\Common\Model\Billing\PurchaseBill;
use WBW\Library\Common\Model\Billing\PurchaseBillInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Purchase bill factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class PurchaseBillFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
     *
     * @return void
     */
    public function testCopy(): void {

        // Set a Purchase bill mock.
        $parent = $this->getMockBuilder(PurchaseBillInterface::class)->getMock();

        // Set a Billable detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();

        $obj = new PurchaseBill();
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

        $res = PurchaseBillFactory::copy($obj, new PurchaseBill());
        $this->assertEquals($obj->getComment(), $res->getComment());
        $this->assertEquals($obj->getCreatedAt(), $res->getCreatedAt());
        $this->assertEquals($obj->getDate(), $res->getDate());
        $this->assertEquals($obj->getDetails(), $res->getDetails());
        $this->assertEquals($obj->getDiscountRate(), $res->getDiscountRate());
        $this->assertEquals($obj->getDiscountTotal(), $res->getDiscountTotal());
        $this->assertEquals($obj->getExcludingVatTotal(), $res->getExcludingVatTotal());
        $this->assertEquals($obj->getIncludingVatTotal(), $res->getIncludingVatTotal());
        $this->assertEquals($obj->getNumber(), $res->getNumber());
        $this->assertSame($obj->getParent(), $res->getParent());
        $this->assertEquals($obj->getPaymentDate(), $res->getPaymentDate());
        $this->assertEquals($obj->getReference(), $res->getReference());
        $this->assertEquals($obj->getUpdatedAt(), $res->getUpdatedAt());
        $this->assertEquals($obj->getVatTotal(), $res->getVatTotal());
    }
}
