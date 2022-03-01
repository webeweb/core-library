<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Helper;

use WBW\Library\Billing\Helper\BillableDetailHelper;
use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Helper\TestBillableDetailHelper;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Billable detail helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Helper
 */
class BillableDetailHelperTest extends AbstractTestCase {

    /**
     * Tests calcDiscountTotal()
     *
     * @return void
     */
    public function testCalcDiscountTotal(): void {

        // Set a Billable detail mock.
        $billableDetail = new TestBillableDetail();
        $billableDetail->setExcludingVatPrice(100);
        $billableDetail->setDiscountRate(20);
        $billableDetail->setQuantity(2);

        $this->assertEquals(40.0, BillableDetailHelper::calcDiscountTotal($billableDetail));
    }

    /**
     * Tests calcIncludingVatTotal()
     *
     * @return void
     */
    public function testCalcExcludingVatTotal(): void {

        // Set a Billable detail mock.
        $billableDetail = new TestBillableDetail();
        $billableDetail->setQuantity(2);

        $this->assertEquals(0.0, BillableDetailHelper::calcExcludingVatTotal($billableDetail));

        $billableDetail->setExcludingVatPrice(100);
        $this->assertEquals(200.0, BillableDetailHelper::calcExcludingVatTotal($billableDetail));

        $billableDetail->setDiscountRate(20);
        $this->assertEquals(160.0, BillableDetailHelper::calcExcludingVatTotal($billableDetail));
    }

    /**
     * Tests calcIncludingVatTotal()
     *
     * @return void
     */
    public function testCalcIncludingVatTotal(): void {

        // Set a Billable detail mock.
        $billableDetail = new TestBillableDetail();
        $billableDetail->setExcludingVatPrice(100);
        $billableDetail->setQuantity(2);
        $billableDetail->setVatRate(20);

        $this->assertEquals(240.0, BillableDetailHelper::calcIncludingVatTotal($billableDetail));
    }

    /**
     * Tests calcVatTotal()
     *
     * @return void
     */
    public function testCalcVatTotal(): void {

        // Set a Billable detail mock.
        $billableDetail = new TestBillableDetail();
        $billableDetail->setExcludingVatPrice(100);
        $billableDetail->setQuantity(2);
        $billableDetail->setVatRate(20);

        $this->assertEquals(40.0, BillableDetailHelper::calcVatTotal($billableDetail));
    }

    /**
     * Tests getQuantity()
     *
     * @return void
     */
    public function testGetQuantity(): void {

        // Set a Billable detail mock.
        $billableDetail = new TestBillableDetail();

        $this->assertEquals(0.0, TestBillableDetailHelper::getQuantity($billableDetail));

        $billableDetail->setQuantity(1.0);
        $this->assertEquals(1.0, TestBillableDetailHelper::getQuantity($billableDetail));
    }
}
