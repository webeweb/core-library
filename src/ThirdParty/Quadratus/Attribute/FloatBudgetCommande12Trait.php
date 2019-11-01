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
 * Budget commande12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande12Trait {

    /**
     * Budget commande12.
     *
     * @var float
     */
    private $budgetCommande12;

    /**
     * Get the budget commande12.
     *
     * @return float Returns the budget commande12.
     */
    public function getBudgetCommande12() {
        return $this->budgetCommande12;
    }

    /**
     * Set the budget commande12.
     *
     * @param float $budgetCommande12 The budget commande12.
     */
    public function setBudgetCommande12($budgetCommande12) {
        $this->budgetCommande12 = $budgetCommande12;
        return $this;
    }
}
