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

namespace WBW\Library\Common\Tests\Factory\Billing;

use DateTime;
use WBW\Library\Common\Factory\Billing\PurchaseOrderFactory;
use WBW\Library\Common\Model\Billing\BillableDetailInterface;
use WBW\Library\Common\Model\Billing\PurchaseOrder;
use WBW\Library\Common\Model\Billing\PurchaseOrderInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Purchase order factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class PurchaseOrderFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
     *
     * @return void
     */
    public function testCopy(): void {

        // Set a Purchase order mock.
        $parent = $this->getMockBuilder(PurchaseOrderInterface::class)->getMock();

        // Set a Billable detail mock.
        $detail = $this->getMockBuilder(BillableDetailInterface::class)->getMock();

        $obj = new PurchaseOrder();
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
        $obj->setReference("reference");
        $obj->setUpdatedAt(new DateTime());
        $obj->setVatTotal(0.05);

        $res = PurchaseOrderFactory::copy($obj, new PurchaseOrder());
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
        $this->assertEquals($obj->getReference(), $res->getReference());
        $this->assertEquals($obj->getUpdatedAt(), $res->getUpdatedAt());
        $this->assertEquals($obj->getVatTotal(), $res->getVatTotal());
    }
}
