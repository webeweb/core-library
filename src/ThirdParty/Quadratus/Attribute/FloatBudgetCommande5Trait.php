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
 * Budget commande5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande5Trait {

    /**
     * Budget commande5.
     *
     * @var float
     */
    private $budgetCommande5;

    /**
     * Get the budget commande5.
     *
     * @return float Returns the budget commande5.
     */
    public function getBudgetCommande5() {
        return $this->budgetCommande5;
    }

    /**
     * Set the budget commande5.
     *
     * @param float $budgetCommande5 The budget commande5.
     */
    public function setBudgetCommande5($budgetCommande5) {
        $this->budgetCommande5 = $budgetCommande5;
        return $this;
    }
}
