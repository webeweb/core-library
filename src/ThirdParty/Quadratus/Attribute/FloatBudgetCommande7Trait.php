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
 * Budget commande7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetCommande7Trait {

    /**
     * Budget commande7.
     *
     * @var float
     */
    private $budgetCommande7;

    /**
     * Get the budget commande7.
     *
     * @return float Returns the budget commande7.
     */
    public function getBudgetCommande7() {
        return $this->budgetCommande7;
    }

    /**
     * Set the budget commande7.
     *
     * @param float $budgetCommande7 The budget commande7.
     */
    public function setBudgetCommande7($budgetCommande7) {
        $this->budgetCommande7 = $budgetCommande7;
        return $this;
    }
}
