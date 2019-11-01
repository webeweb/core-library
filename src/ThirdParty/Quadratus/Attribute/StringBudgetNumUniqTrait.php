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
 * Budget num uniq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBudgetNumUniqTrait {

    /**
     * Budget num uniq.
     *
     * @var string
     */
    private $budgetNumUniq;

    /**
     * Get the budget num uniq.
     *
     * @return string Returns the budget num uniq.
     */
    public function getBudgetNumUniq() {
        return $this->budgetNumUniq;
    }

    /**
     * Set the budget num uniq.
     *
     * @param string $budgetNumUniq The budget num uniq.
     */
    public function setBudgetNumUniq($budgetNumUniq) {
        $this->budgetNumUniq = $budgetNumUniq;
        return $this;
    }
}
