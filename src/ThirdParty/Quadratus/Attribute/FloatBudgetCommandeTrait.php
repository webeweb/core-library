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
 * Budget commande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommandeTrait {

    /**
     * Budget commande.
     *
     * @var float
     */
    private $budgetCommande;

    /**
     * Get the budget commande.
     *
     * @return float Returns the budget commande.
     */
    public function getBudgetCommande() {
        return $this->budgetCommande;
    }

    /**
     * Set the budget commande.
     *
     * @param float $budgetCommande The budget commande.
     */
    public function setBudgetCommande($budgetCommande) {
        $this->budgetCommande = $budgetCommande;
        return $this;
    }
}
