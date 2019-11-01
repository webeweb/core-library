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
 * Budget commande11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande11Trait {

    /**
     * Budget commande11.
     *
     * @var float
     */
    private $budgetCommande11;

    /**
     * Get the budget commande11.
     *
     * @return float Returns the budget commande11.
     */
    public function getBudgetCommande11() {
        return $this->budgetCommande11;
    }

    /**
     * Set the budget commande11.
     *
     * @param float $budgetCommande11 The budget commande11.
     */
    public function setBudgetCommande11($budgetCommande11) {
        $this->budgetCommande11 = $budgetCommande11;
        return $this;
    }
}
