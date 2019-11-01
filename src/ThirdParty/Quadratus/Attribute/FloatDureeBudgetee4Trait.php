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
 * Duree budgetee4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee4Trait {

    /**
     * Duree budgetee4.
     *
     * @var float
     */
    private $dureeBudgetee4;

    /**
     * Get the duree budgetee4.
     *
     * @return float Returns the duree budgetee4.
     */
    public function getDureeBudgetee4() {
        return $this->dureeBudgetee4;
    }

    /**
     * Set the duree budgetee4.
     *
     * @param float $dureeBudgetee4 The duree budgetee4.
     */
    public function setDureeBudgetee4($dureeBudgetee4) {
        $this->dureeBudgetee4 = $dureeBudgetee4;
        return $this;
    }
}
