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
 * Duree budgetee1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee1Trait {

    /**
     * Duree budgetee1.
     *
     * @var float
     */
    private $dureeBudgetee1;

    /**
     * Get the duree budgetee1.
     *
     * @return float Returns the duree budgetee1.
     */
    public function getDureeBudgetee1() {
        return $this->dureeBudgetee1;
    }

    /**
     * Set the duree budgetee1.
     *
     * @param float $dureeBudgetee1 The duree budgetee1.
     */
    public function setDureeBudgetee1($dureeBudgetee1) {
        $this->dureeBudgetee1 = $dureeBudgetee1;
        return $this;
    }
}
