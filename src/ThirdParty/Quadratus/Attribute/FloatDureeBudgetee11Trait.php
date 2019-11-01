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
 * Duree budgetee11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee11Trait {

    /**
     * Duree budgetee11.
     *
     * @var float
     */
    private $dureeBudgetee11;

    /**
     * Get the duree budgetee11.
     *
     * @return float Returns the duree budgetee11.
     */
    public function getDureeBudgetee11() {
        return $this->dureeBudgetee11;
    }

    /**
     * Set the duree budgetee11.
     *
     * @param float $dureeBudgetee11 The duree budgetee11.
     */
    public function setDureeBudgetee11($dureeBudgetee11) {
        $this->dureeBudgetee11 = $dureeBudgetee11;
        return $this;
    }
}
