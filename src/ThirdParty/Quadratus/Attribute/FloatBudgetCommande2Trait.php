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
 * Budget commande2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande2Trait {

    /**
     * Budget commande2.
     *
     * @var float
     */
    private $budgetCommande2;

    /**
     * Get the budget commande2.
     *
     * @return float Returns the budget commande2.
     */
    public function getBudgetCommande2() {
        return $this->budgetCommande2;
    }

    /**
     * Set the budget commande2.
     *
     * @param float $budgetCommande2 The budget commande2.
     */
    public function setBudgetCommande2($budgetCommande2) {
        $this->budgetCommande2 = $budgetCommande2;
        return $this;
    }
}
