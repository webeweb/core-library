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
     * Tests the calcExcludingVatPrice() method.
     *
     * @return void
     */
    public function testCalcExcludingVatPrice(): void {

        // Set a Taxable mock.
        $taxable = new TestTaxable();

        $this->assertEquals(0.0, TaxableHelper::calcExcludingVatPrice(null));
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

        $this->assertEquals(0.0, TaxableHelper::calcIncludingVatPrice(null));
        $this->assertEquals(0.0, TaxableHelper::calcIncludingVatPrice($taxable));

        $taxable->setExcludingVatPrice(100);
        $this->assertEquals(0.0, TaxableHelper::calcIncludingVatPrice($taxable));

        $taxable->setVatRate(20);
        $this->assertEquals(120.0, TaxableHelper::calcIncludingVatPrice($taxable));
    }

    /**
     * Tests the calcVatRatio() method.
     *
     * @return void
     */
    public function testCalcVatRatio(): void {

        $this->assertEquals(0.0, TaxableHelper::calcVatRatio(null));
        $this->assertEquals(0.0, TaxableHelper::calcVatRatio(-1));

        $this->assertEquals(0.2, TaxableHelper::calcVatRatio(20));
        $this->assertEquals(1.2, TaxableHelper::calcVatRatio(20, true));
    }
}