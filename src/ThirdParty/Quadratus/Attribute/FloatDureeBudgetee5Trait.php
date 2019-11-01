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
 * Duree budgetee5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee5Trait {

    /**
     * Duree budgetee5.
     *
     * @var float
     */
    private $dureeBudgetee5;

    /**
     * Get the duree budgetee5.
     *
     * @return float Returns the duree budgetee5.
     */
    public function getDureeBudgetee5() {
        return $this->dureeBudgetee5;
    }

    /**
     * Set the duree budgetee5.
     *
     * @param float $dureeBudgetee5 The duree budgetee5.
     */
    public function setDureeBudgetee5($dureeBudgetee5) {
        $this->dureeBudgetee5 = $dureeBudgetee5;
        return $this;
    }
}
