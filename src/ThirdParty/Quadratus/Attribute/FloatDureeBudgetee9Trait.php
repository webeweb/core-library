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
 * Duree budgetee9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee9Trait {

    /**
     * Duree budgetee9.
     *
     * @var float
     */
    private $dureeBudgetee9;

    /**
     * Get the duree budgetee9.
     *
     * @return float Returns the duree budgetee9.
     */
    public function getDureeBudgetee9() {
        return $this->dureeBudgetee9;
    }

    /**
     * Set the duree budgetee9.
     *
     * @param float $dureeBudgetee9 The duree budgetee9.
     */
    public function setDureeBudgetee9($dureeBudgetee9) {
        $this->dureeBudgetee9 = $dureeBudgetee9;
        return $this;
    }
}
