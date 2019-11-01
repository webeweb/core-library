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
 * Duree budgetee3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee3Trait {

    /**
     * Duree budgetee3.
     *
     * @var float
     */
    private $dureeBudgetee3;

    /**
     * Get the duree budgetee3.
     *
     * @return float Returns the duree budgetee3.
     */
    public function getDureeBudgetee3() {
        return $this->dureeBudgetee3;
    }

    /**
     * Set the duree budgetee3.
     *
     * @param float $dureeBudgetee3 The duree budgetee3.
     */
    public function setDureeBudgetee3($dureeBudgetee3) {
        $this->dureeBudgetee3 = $dureeBudgetee3;
        return $this;
    }
}
