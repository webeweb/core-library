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
 * Duree budget trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBudgetTrait {

    /**
     * Duree budget.
     *
     * @var float
     */
    private $dureeBudget;

    /**
     * Get the duree budget.
     *
     * @return float Returns the duree budget.
     */
    public function getDureeBudget() {
        return $this->dureeBudget;
    }

    /**
     * Set the duree budget.
     *
     * @param float $dureeBudget The duree budget.
     */
    public function setDureeBudget($dureeBudget) {
        $this->dureeBudget = $dureeBudget;
        return $this;
    }
}
