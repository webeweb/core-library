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
 * Duree budgetee6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee6Trait {

    /**
     * Duree budgetee6.
     *
     * @var float
     */
    private $dureeBudgetee6;

    /**
     * Get the duree budgetee6.
     *
     * @return float Returns the duree budgetee6.
     */
    public function getDureeBudgetee6() {
        return $this->dureeBudgetee6;
    }

    /**
     * Set the duree budgetee6.
     *
     * @param float $dureeBudgetee6 The duree budgetee6.
     */
    public function setDureeBudgetee6($dureeBudgetee6) {
        $this->dureeBudgetee6 = $dureeBudgetee6;
        return $this;
    }
}
