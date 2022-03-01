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

use WBW\Library\Billing\Helper\TaxableHelper;
use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Helper\TestTaxableHelper;
use WBW\Library\Billing\Tests\Fixtures\Model\TestTaxable;

/**
 * Taxable helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Helper
 */
class TaxableHelperTest extends AbstractTestCase {

    /**
     * Tests calcDiscountAmount()
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
     * Tests calcExcludingVatPrice()
     *
     * @return void
     */
    public function testCalcExcludingVatPrice(): void {

        // Set a Taxable mock.
        $taxable = new TestTaxable();

        $this->assertEquals(0.0, TaxableHelper::calcExcludingVatPrice($taxable));

        $taxable->setIncludingVatPrice(120);
        $this->assertEquals(120.0, TaxableHelper::calcExcludingVatPrice($taxable));

        $taxable->setVatRate(20);
        $this->assertEquals(100.0, TaxableHelper::calcExcludingVatPrice($taxable));

        $taxable->setDiscountRate(20);
        $this->assertEquals(80.0, TaxableHelper::calcExcludingVatPrice($taxable));
    }

    /**
     * Tests calcIncludingVatPrice()
     *
     * @return void
     */
    public function testCalcIncludingVatPrice(): void {

        // Set a Taxable mock.
        $taxable = new TestTaxable();

        $this->assertEquals(0.0, TaxableHelper::calcIncludingVatPrice($taxable));

        $taxable->setExcludingVatPrice(100);
        $this->assertEquals(100.0, TaxableHelper::calcIncludingVatPrice($taxable));

        $taxable->setVatRate(20);
        $this->assertEquals(120.0, TaxableHelper::calcIncludingVatPrice($taxable));

        $taxable->setDiscountRate(20);
        $this->assertEquals(96.0, TaxableHelper::calcIncludingVatPrice($taxable));
    }

    /**
     * Tests calcVatAmount()
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

        $taxable->setDiscountRate(20);
        $this->assertEquals(16.0, TaxableHelper::calcVatAmount($taxable));
    }

    /**
     * Tests getDiscountRatio()
     *
     * @return void
     */
    public function testGetDiscountRatio(): void {

        $this->assertEquals(0.0, TestTaxableHelper::getDiscountRatio(null));
        $this->assertEquals(0.0, TestTaxableHelper::getDiscountRatio(-1));
        $this->assertEquals(0.0, TestTaxableHelper::getDiscountRatio(101));
        $this->assertEquals(0.2, TestTaxableHelper::getDiscountRatio(20));
        $this->assertEquals(0.8, TestTaxableHelper::getDiscountRatio(20, true));
    }

    /**
     * Tests getVatRatio()
     *
     * @return void
     */
    public function testGetVatRatio(): void {

        $this->assertEquals(0.0, TestTaxableHelper::getVatRatio(null));
        $this->assertEquals(0.0, TestTaxableHelper::getVatRatio(-1));
        $this->assertEquals(0.0, TestTaxableHelper::getVatRatio(101));

        $this->assertEquals(0.2, TestTaxableHelper::getVatRatio(20));
        $this->assertEquals(1.2, TestTaxableHelper::getVatRatio(20, true));
    }
}
