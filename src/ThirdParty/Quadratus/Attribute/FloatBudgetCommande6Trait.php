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
 * Budget commande6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande6Trait {

    /**
     * Budget commande6.
     *
     * @var float
     */
    private $budgetCommande6;

    /**
     * Get the budget commande6.
     *
     * @return float Returns the budget commande6.
     */
    public function getBudgetCommande6() {
        return $this->budgetCommande6;
    }

    /**
     * Set the budget commande6.
     *
     * @param float $budgetCommande6 The budget commande6.
     */
    public function setBudgetCommande6($budgetCommande6) {
        $this->budgetCommande6 = $budgetCommande6;
        return $this;
    }
}
