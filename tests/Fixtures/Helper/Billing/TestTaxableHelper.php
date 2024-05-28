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

namespace WBW\Library\Common\Tests\Fixtures\Helper\Billing;

use WBW\Library\Common\Helper\Billing\TaxableHelper;

/**
 * Test taxable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Helper\Billing
 */
class TestTaxableHelper extends TaxableHelper {

    /**
     * {@inheritDoc}
     */
    public static function getDiscountRatio(?float $discountRate, bool $minusOne = false): float {
        return parent::getDiscountRatio($discountRate, $minusOne);
    }

    /**
     * {@inheritDoc}
     */
    public static function getVatRatio(?float $vatRate, bool $plusOne = false): float {
        return parent::getVatRatio($vatRate, $plusOne);
    }
}
