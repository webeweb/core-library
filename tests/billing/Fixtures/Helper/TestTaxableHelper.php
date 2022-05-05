<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Fixtures\Helper;

use WBW\Library\Billing\Helper\TaxableHelper;

/**
 * Test taxable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Fixtures\Helper
 */
class TestTaxableHelper extends TaxableHelper {

    /**
     * {@inheritdoc}
     */
    public static function getDiscountRatio(?float $discountRate, bool $minusOne = false): float {
        return parent::getDiscountRatio($discountRate, $minusOne);
    }

    /**
     * {@inheritdoc}
     */
    public static function getVatRatio(?float $vatRate, bool $plusOne = false): float {
        return parent::getVatRatio($vatRate, $plusOne);
    }
}
