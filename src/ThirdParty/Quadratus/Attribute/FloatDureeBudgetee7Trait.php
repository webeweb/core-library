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
 * Duree budgetee7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetee7Trait {

    /**
     * Duree budgetee7.
     *
     * @var float
     */
    private $dureeBudgetee7;

    /**
     * Get the duree budgetee7.
     *
     * @return float Returns the duree budgetee7.
     */
    public function getDureeBudgetee7() {
        return $this->dureeBudgetee7;
    }

    /**
     * Set the duree budgetee7.
     *
     * @param float $dureeBudgetee7 The duree budgetee7.
     */
    public function setDureeBudgetee7($dureeBudgetee7) {
        $this->dureeBudgetee7 = $dureeBudgetee7;
        return $this;
    }
}
