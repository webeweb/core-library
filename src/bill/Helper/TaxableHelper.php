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

use WBW\Library\Bill\Model\Taxable;
use WBW\Library\Bill\Model\TaxableInterface;

/**
 * Taxable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Helper
 */
class TaxableHelper {

    /**
     * Calculates a discount ratio.
     *
     * @param float|null $discountRate The discount rate.
     * @return float Returns the VAT ratio.
     */
    public static function calcDiscountRatio(?float $discountRate): float {

        if (null === $discountRate || $discountRate < 0) {
            return 1.0;
        }

        return 1 - $discountRate / 100;
    }

    /**
     * Calculates an excluding VAT price.
     *
     * @param TaxableInterface|null $taxable The taxable.
     * @return float Returns the excluding VAT price.
     */
    public static function calcExcludingVatPrice(?TaxableInterface $taxable): float {

        if (null === $taxable || null === $taxable->getIncludingVatPrice()) {
            return 0.0;
        }

        $ratio = static::calcVatRatio($taxable->getVatRate(), true);
        if (0.0 === $ratio) {
            return 0.0;
        }

        return $taxable->getIncludingVatPrice() / $ratio;
    }

    /**
     * Calculates an including VAT price.
     *
     * @param Taxable|null $taxable The taxable.
     * @return float Returns the including VAT price.
     */
    public static function calcIncludingVatPrice(?Taxable $taxable): float {

        if (null === $taxable || null === $taxable->getExcludingVatPrice()) {
            return 0.0;
        }

        return $taxable->getExcludingVatPrice() * static::calcVatRatio($taxable->getVatRate(), true);
    }

    /**
     * Calculates a VAT amount.
     *
     * @param Taxable|null $taxable The taxable.
     * @return float Returns the VAT amount.
     */
    public static function calcVatAmount(?Taxable $taxable): float {

        if (null === $taxable || null === $taxable->getExcludingVatPrice()) {
            return 0.0;
        }

        return $taxable->getExcludingVatPrice() * static::calcVatRatio($taxable->getVatRate());
    }

    /**
     * Calculates a VAT ratio.
     *
     * @param float|null $vatRate The VAT rate.
     * @param bool $plusOne Plus one ?
     * @return float Returns the VAT ratio.
     */
    public static function calcVatRatio(?float $vatRate, bool $plusOne = false): float {

        if (null === $vatRate || $vatRate < 0) {
            return 0.0;
        }

        $ratio = $vatRate / 100;

        return true === $plusOne ? 1 + $ratio : $ratio;
    }
}