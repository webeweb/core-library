<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Helper;

use WBW\Library\Bill\Helper\BillableHelper;
use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Helper\TestBillableHelper;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillable;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Helper
 */
class BillableHelperTest extends AbstractTestCase {

    /**
     * Tests the calcDiscountTotal() method.
     *
     * @return void
     */
    public function testCalcDiscountTotal(): void {

        // Set the Billable detail mocks.
        $detail = new TestBillableDetail();
        $detail->setExcludingVatPrice(100);
        $detail->setQuantity(1);
        $detail->setDiscountRate(20);

        $obj = new TestBillable();
        $obj->addDetail($detail);

        $this->assertEquals(20, BillableHelper::calcDiscountTotal($obj));
    }

    /**
     * Tests the calcExcludingVatTotal() method.
     *
     * @return void
     */
    public function testCalcExcludingVatTotal(): void {

        // Set the Billable detail mocks.
        $detail = new TestBillableDetail();
        $detail->setExcludingVatPrice(100);
        $detail->setQuantity(1);
        $detail->setVatRate(20);

        $obj = new TestBillable();
        $obj->addDetail($detail);

        $this->assertEquals(100, BillableHelper::calcExcludingVatTotal($obj));
    }

    /**
     * Tests the calcIncludingVatTotal() method.
     *
     * @return void
     */
    public function testCalcIncludingVatTotal(): void {

        // Set the Billable detail mocks.
        $detail = new TestBillableDetail();
        $detail->setExcludingVatPrice(100);
        $detail->setQuantity(1);
        $detail->setVatRate(20);

        $obj = new TestBillable();
        $obj->addDetail($detail);

        $this->assertEquals(120, BillableHelper::calcIncludingVatTotal($obj));
    }

    /**
     * Tests the calcTotal() method.
     *
     * @return void
     */
    public function testCalcTotal(): void {

        // Set the Billable detail mocks.
        $detail = new TestBillableDetail();
        $detail->setExcludingVatPrice(100);
        $detail->setQuantity(1);
        $detail->setDiscountRate(20);

        $obj = new TestBillable();
        $obj->addDetail($detail);

        $this->assertEquals(0.0, TestBillableHelper::calcTotal($obj, "exception"));
    }

    /**
     * Tests the calcVatTotal() method.
     *
     * @return void
     */
    public function testCalcVatTotal(): void {

        // Set the Billable detail mocks.
        $detail = new TestBillableDetail();
        $detail->setExcludingVatPrice(100);
        $detail->setQuantity(1);
        $detail->setVatRate(20);

        $obj = new TestBillable();
        $obj->addDetail($detail);

        $this->assertEquals(20, BillableHelper::calcVatTotal($obj));
    }
}
