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
 * Budget commande10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande10Trait {

    /**
     * Budget commande10.
     *
     * @var float
     */
    private $budgetCommande10;

    /**
     * Get the budget commande10.
     *
     * @return float Returns the budget commande10.
     */
    public function getBudgetCommande10() {
        return $this->budgetCommande10;
    }

    /**
     * Set the budget commande10.
     *
     * @param float $budgetCommande10 The budget commande10.
     */
    public function setBudgetCommande10($budgetCommande10) {
        $this->budgetCommande10 = $budgetCommande10;
        return $this;
    }
}
