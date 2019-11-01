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
 * Budget commande4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande4Trait {

    /**
     * Budget commande4.
     *
     * @var float
     */
    private $budgetCommande4;

    /**
     * Get the budget commande4.
     *
     * @return float Returns the budget commande4.
     */
    public function getBudgetCommande4() {
        return $this->budgetCommande4;
    }

    /**
     * Set the budget commande4.
     *
     * @param float $budgetCommande4 The budget commande4.
     */
    public function setBudgetCommande4($budgetCommande4) {
        $this->budgetCommande4 = $budgetCommande4;
        return $this;
    }
}
