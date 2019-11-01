<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Valeur deduction trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurDeductionTrait {

    /**
     * Valeur deduction.
     *
     * @var float
     */
    private $valeurDeduction;

    /**
     * Get the valeur deduction.
     *
     * @return float Returns the valeur deduction.
     */
    public function getValeurDeduction() {
        return $this->valeurDeduction;
    }

    /**
     * Set the valeur deduction.
     *
     * @param float $valeurDeduction The valeur deduction.
     */
    public function setValeurDeduction($valeurDeduction) {
        $this->valeurDeduction = $valeurDeduction;
        return $this;
    }
}
