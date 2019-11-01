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
 * Montant budget trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBudgetTrait {

    /**
     * Montant budget.
     *
     * @var float
     */
    private $montantBudget;

    /**
     * Get the montant budget.
     *
     * @return float Returns the montant budget.
     */
    public function getMontantBudget() {
        return $this->montantBudget;
    }

    /**
     * Set the montant budget.
     *
     * @param float $montantBudget The montant budget.
     */
    public function setMontantBudget($montantBudget) {
        $this->montantBudget = $montantBudget;
        return $this;
    }
}
