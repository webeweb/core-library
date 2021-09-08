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

use WBW\Library\Bill\Model\TaxableInterface;

/**
 * Taxable factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Factory
 */
class TaxableFactory {

    /**
     * Copy.
     *
     * @param TaxableInterface $src The taxable source.
     * @param TaxableInterface $dst The taxable destination.
     * @return void
     */
    public static function copy(TaxableInterface $src, TaxableInterface $dst): void {

        $dst->setDiscountAmount($src->getDiscountAmount());
        $dst->setDiscountRate($src->getDiscountRate());
        $dst->setExcludingVatPrice($src->getExcludingVatPrice());
        $dst->setIncludingVatPrice($src->getIncludingVatPrice());
        $dst->setVatAmount($dst->getVatAmount());
        $dst->setVatRate($dst->getVatRate());
    }
}