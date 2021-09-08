<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Factory;

use WBW\Library\Bill\Model\BillableDetailInterface;

/**
 * Billable detail factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Factory
 */
class BillableDetailFactory {

    /**
     * Copy.
     *
     * @param BillableDetailInterface $src The billable detail source.
     * @param BillableDetailInterface $dst The billable detail destination.
     * @return void
     */
    public static function copy(BillableDetailInterface $src, BillableDetailInterface $dst): void {
        TaxableFactory::copy($src, $dst);

        $dst->setComment($src->getComment());
        $dst->setDiscountTotal($src->getDiscountTotal());
        $dst->setExcludingVatTotal($src->getExcludingVatTotal());
        $dst->setIncludingVatTotal($src->getIncludingVatTotal());
        $dst->setLabel($src->getLabel());
        $dst->setQuantity($src->getQuantity());
        $dst->setReference($src->getReference());
        $dst->setVatTotal($src->getVatTotal());
    }
}