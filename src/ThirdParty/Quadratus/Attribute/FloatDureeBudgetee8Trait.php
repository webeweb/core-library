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
 * Duree budgetee8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee8Trait {

    /**
     * Duree budgetee8.
     *
     * @var float
     */
    private $dureeBudgetee8;

    /**
     * Get the duree budgetee8.
     *
     * @return float Returns the duree budgetee8.
     */
    public function getDureeBudgetee8() {
        return $this->dureeBudgetee8;
    }

    /**
     * Set the duree budgetee8.
     *
     * @param float $dureeBudgetee8 The duree budgetee8.
     */
    public function setDureeBudgetee8($dureeBudgetee8) {
        $this->dureeBudgetee8 = $dureeBudgetee8;
        return $this;
    }
}
