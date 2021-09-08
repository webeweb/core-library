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

use WBW\Library\Bill\Model\BillableDetailInterface;
use WBW\Library\Bill\Model\BillableInterface;
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBillableDetail();

        $this->assertInstanceOf(BillableDetailInterface::class, $obj);

        $this->assertNull($obj->getBillable());
        $this->assertNull($obj->getComment());
        $this->assertNull($obj->getDiscountRate());
        $this->assertNull($obj->getExcludingVatPrice());
        $this->assertNull($obj->getExcludingVatTotal());
        $this->assertNull($obj->getIncludingVatPrice());
        $this->assertNull($obj->getIncludingVatTotal());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getQuantity());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getVatAmount());
        $this->assertNull($obj->getVatRate());
        $this->assertNull($obj->getVatTotal());
    }
}