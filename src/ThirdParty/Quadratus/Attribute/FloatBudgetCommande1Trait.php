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
 * Budget commande1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande1Trait {

    /**
     * Budget commande1.
     *
     * @var float
     */
    private $budgetCommande1;

    /**
     * Get the budget commande1.
     *
     * @return float Returns the budget commande1.
     */
    public function getBudgetCommande1() {
        return $this->budgetCommande1;
    }

    /**
     * Set the budget commande1.
     *
     * @param float $budgetCommande1 The budget commande1.
     */
    public function setBudgetCommande1($budgetCommande1) {
        $this->budgetCommande1 = $budgetCommande1;
        return $this;
    }
}
