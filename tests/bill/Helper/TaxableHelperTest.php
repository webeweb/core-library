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

use WBW\Library\Bill\Helper\TaxableHelper;
use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestTaxable;

/**
 * Taxable helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Helper
 */
class TaxableHelperTest extends AbstractTestCase {

    /**
     * Tests the calcDiscountAmount() method.
     *
     * @return void
     */
    public function testCalcDiscountAmount(): void {

        // Set a Taxable mock.
        $taxable = new TestTaxable();

        $this->assertEquals(0.0, TaxableHelper::calcDiscountAmount($taxable));

        $taxable->setExcludingVatPrice(100);
        $this->assertEquals(0.0, TaxableHelper::calcDiscountAmount($taxable));

        $taxable->setDiscountRate(20);
        $this->assertEquals(20.0, TaxableHelper::calcDiscountAmount($taxable));
    }

    /**
     * Tests the calcDiscountRatio() method.
     *
     * @return void
     */
    public function testCalcDiscountRatio(): void {

        $this->assertEquals(0.0, TaxableHelper::calcDiscountRatio(null));
        $this->assertEquals(0.0, TaxableHelper::calcDiscountRatio(-1));
        $this->assertEquals(0.0, TaxableHelper::calcDiscountRatio(101));
        $this->assertEquals(0.2, TaxableHelper::calcDiscountRatio(20));
        $this->assertEquals(0.8, TaxableHelper::calcDiscountRatio(20, true));
    }

    /**
     * Tests the calcExcludingVatPrice() method.
     *
     * @return void
     */
    public function testCalcExcludingVatPrice(): void {

        // Set a Taxable mock.
        $taxable = new TestTaxable();

        $this->assertEquals(0.0, TaxableHelper::calcExcludingVatPrice($taxable));

        $taxable->setIncludingVatPrice(120);
        $this->assertEquals(0.0, TaxableHelper::calcExcludingVatPrice($taxable));

        $taxable->setVatRate(20);
        $this->assertEquals(100.0, TaxableHelper::calcExcludingVatPrice($taxable));
    }

    /**
     * Tests the calcIncludingVatPrice() method.
     *
     * @return void
     */
    public function testCalcIncludingVatPrice(): void {

        // Set a Taxable mock.
        $taxable = new TestTaxable();

        $this->assertEquals(0.0, TaxableHelper::calcIncludingVatPrice($taxable));

        $taxable->setExcludingVatPrice(100);
        $this->assertEquals(0.0, TaxableHelper::calcIncludingVatPrice($taxable));

        $taxable->setVatRate(20);
        $this->assertEquals(120.0, TaxableHelper::calcIncludingVatPrice($taxable));
    }

    /**
     * Tests the calcVatAmount() method.
     *
     * @return void
     */
    public function testCalcVatAmount(): void {

        // Set a Taxable mock.
        $taxable = new TestTaxable();

        $this->assertEquals(0.0, TaxableHelper::calcVatAmount($taxable));

        $taxable->setExcludingVatPrice(100);
        $this->assertEquals(0.0, TaxableHelper::calcVatAmount($taxable));

        $taxable->setVatRate(20);
        $this->assertEquals(20.0, TaxableHelper::calcVatAmount($taxable));
    }

    /**
     * Tests the calcVatRatio() method.
     *
     * @return void
     */
    public function testCalcVatRatio(): void {

        $this->assertEquals(0.0, TaxableHelper::calcVatRatio(null));
        $this->assertEquals(0.0, TaxableHelper::calcVatRatio(-1));
        $this->assertEquals(0.0, TaxableHelper::calcVatRatio(101));

        $this->assertEquals(0.2, TaxableHelper::calcVatRatio(20));
        $this->assertEquals(1.2, TaxableHelper::calcVatRatio(20, true));
    }
}