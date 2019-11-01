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
 * Duree budgetee2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee2Trait {

    /**
     * Duree budgetee2.
     *
     * @var float
     */
    private $dureeBudgetee2;

    /**
     * Get the duree budgetee2.
     *
     * @return float Returns the duree budgetee2.
     */
    public function getDureeBudgetee2() {
        return $this->dureeBudgetee2;
    }

    /**
     * Set the duree budgetee2.
     *
     * @param float $dureeBudgetee2 The duree budgetee2.
     */
    public function setDureeBudgetee2($dureeBudgetee2) {
        $this->dureeBudgetee2 = $dureeBudgetee2;
        return $this;
    }
}
