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
 * Budget depense frf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudgetDepenseFrfTrait {

    /**
     * Budget depense frf.
     *
     * @var float
     */
    private $budgetDepenseFrf;

    /**
     * Get the budget depense frf.
     *
     * @return float Returns the budget depense frf.
     */
    public function getBudgetDepenseFrf() {
        return $this->budgetDepenseFrf;
    }

    /**
     * Set the budget depense frf.
     *
     * @param float $budgetDepenseFrf The budget depense frf.
     */
    public function setBudgetDepenseFrf($budgetDepenseFrf) {
        $this->budgetDepenseFrf = $budgetDepenseFrf;
        return $this;
    }
}
