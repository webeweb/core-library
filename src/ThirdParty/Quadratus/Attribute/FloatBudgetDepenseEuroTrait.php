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
 * Budget depense euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetDepenseEuroTrait {

    /**
     * Budget depense euro.
     *
     * @var float
     */
    private $budgetDepenseEuro;

    /**
     * Get the budget depense euro.
     *
     * @return float Returns the budget depense euro.
     */
    public function getBudgetDepenseEuro() {
        return $this->budgetDepenseEuro;
    }

    /**
     * Set the budget depense euro.
     *
     * @param float $budgetDepenseEuro The budget depense euro.
     */
    public function setBudgetDepenseEuro($budgetDepenseEuro) {
        $this->budgetDepenseEuro = $budgetDepenseEuro;
        return $this;
    }
}
