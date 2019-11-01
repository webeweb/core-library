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
 * Budget commande9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande9Trait {

    /**
     * Budget commande9.
     *
     * @var float
     */
    private $budgetCommande9;

    /**
     * Get the budget commande9.
     *
     * @return float Returns the budget commande9.
     */
    public function getBudgetCommande9() {
        return $this->budgetCommande9;
    }

    /**
     * Set the budget commande9.
     *
     * @param float $budgetCommande9 The budget commande9.
     */
    public function setBudgetCommande9($budgetCommande9) {
        $this->budgetCommande9 = $budgetCommande9;
        return $this;
    }
}
