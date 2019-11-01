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
 * Duree budgetee10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee10Trait {

    /**
     * Duree budgetee10.
     *
     * @var float
     */
    private $dureeBudgetee10;

    /**
     * Get the duree budgetee10.
     *
     * @return float Returns the duree budgetee10.
     */
    public function getDureeBudgetee10() {
        return $this->dureeBudgetee10;
    }

    /**
     * Set the duree budgetee10.
     *
     * @param float $dureeBudgetee10 The duree budgetee10.
     */
    public function setDureeBudgetee10($dureeBudgetee10) {
        $this->dureeBudgetee10 = $dureeBudgetee10;
        return $this;
    }
}
