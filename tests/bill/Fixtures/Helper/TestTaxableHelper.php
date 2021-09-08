<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Fixtures\Helper;

use WBW\Library\Bill\Helper\TaxableHelper;

/**
 * Test taxable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Fixtures\Helper
 */
class TestTaxableHelper extends TaxableHelper {

    /**
     * {@inheritDoc}
     */
    public static function calcDiscountRatio(?float $discountRate, bool $minusOne = false): float {
        return parent::calcDiscountRatio($discountRate, $minusOne);
    }

    /**
     * {@inheritDoc}
     */
    public static function calcVatRatio(?float $vatRate, bool $plusOne = false): float {
        return parent::calcVatRatio($vatRate, $plusOne);
    }
}