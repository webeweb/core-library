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
 * Budget commande8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande8Trait {

    /**
     * Budget commande8.
     *
     * @var float
     */
    private $budgetCommande8;

    /**
     * Get the budget commande8.
     *
     * @return float Returns the budget commande8.
     */
    public function getBudgetCommande8() {
        return $this->budgetCommande8;
    }

    /**
     * Set the budget commande8.
     *
     * @param float $budgetCommande8 The budget commande8.
     */
    public function setBudgetCommande8($budgetCommande8) {
        $this->budgetCommande8 = $budgetCommande8;
        return $this;
    }
}
