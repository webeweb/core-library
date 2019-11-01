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
 * Budget2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudget2Trait {

    /**
     * Budget2.
     *
     * @var float
     */
    private $budget2;

    /**
     * Get the budget2.
     *
     * @return float Returns the budget2.
     */
    public function getBudget2() {
        return $this->budget2;
    }

    /**
     * Set the budget2.
     *
     * @param float $budget2 The budget2.
     */
    public function setBudget2($budget2) {
        $this->budget2 = $budget2;
        return $this;
    }
}
