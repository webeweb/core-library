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
 * Duree budgetee12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee12Trait {

    /**
     * Duree budgetee12.
     *
     * @var float
     */
    private $dureeBudgetee12;

    /**
     * Get the duree budgetee12.
     *
     * @return float Returns the duree budgetee12.
     */
    public function getDureeBudgetee12() {
        return $this->dureeBudgetee12;
    }

    /**
     * Set the duree budgetee12.
     *
     * @param float $dureeBudgetee12 The duree budgetee12.
     */
    public function setDureeBudgetee12($dureeBudgetee12) {
        $this->dureeBudgetee12 = $dureeBudgetee12;
        return $this;
    }
}
