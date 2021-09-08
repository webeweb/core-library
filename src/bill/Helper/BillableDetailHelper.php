<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Helper;

use WBW\Library\Bill\Model\BillableDetailInterface;

/**
 * Billable detail helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Helper
 */
class BillableDetailHelper {

    /**
     * Calculates a discount total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the VAT total.
     */
    public static function calcDiscountTotal(BillableDetailInterface $billableDetail): float {

        if (null === $billableDetail->getQuantity()) {
            return 0.0;
        }

        return TaxableHelper::calcDiscountAmount($billableDetail) * $billableDetail->getQuantity();
    }

    /**
     * Calculates an excluding VAT total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the excluding VAT total.
     */
    public static function calcExcludingVatTotal(BillableDetailInterface $billableDetail): float {
        return TaxableHelper::calcExcludingVatPrice($billableDetail);
    }

    /**
     * Calculates an including VAT total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the including VAT total.
     */
    public static function calcIncludingVatTotal(BillableDetailInterface $billableDetail): float {

        if (null === $billableDetail->getQuantity()) {
            return 0.0;
        }

        return TaxableHelper::calcIncludingVatPrice($billableDetail) * $billableDetail->getQuantity();
    }

    /**
     * Calculates a VAT total.
     *
     * @param BillableDetailInterface $billableDetail The billable detail.
     * @return float Returns the VAT total.
     */
    public static function calcVatTotal(BillableDetailInterface $billableDetail): float {

        if (null === $billableDetail->getQuantity()) {
            return 0.0;
        }

        return TaxableHelper::calcVatAmount($billableDetail) * $billableDetail->getQuantity();
    }
}