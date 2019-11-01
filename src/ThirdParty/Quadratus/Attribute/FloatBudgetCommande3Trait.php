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
 * Budget commande3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande3Trait {

    /**
     * Budget commande3.
     *
     * @var float
     */
    private $budgetCommande3;

    /**
     * Get the budget commande3.
     *
     * @return float Returns the budget commande3.
     */
    public function getBudgetCommande3() {
        return $this->budgetCommande3;
    }

    /**
     * Set the budget commande3.
     *
     * @param float $budgetCommande3 The budget commande3.
     */
    public function setBudgetCommande3($budgetCommande3) {
        $this->budgetCommande3 = $budgetCommande3;
        return $this;
    }
}
