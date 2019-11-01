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
 * Budget1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBudget1Trait {

    /**
     * Budget1.
     *
     * @var float
     */
    private $budget1;

    /**
     * Get the budget1.
     *
     * @return float Returns the budget1.
     */
    public function getBudget1() {
        return $this->budget1;
    }

    /**
     * Set the budget1.
     *
     * @param float $budget1 The budget1.
     */
    public function setBudget1($budget1) {
        $this->budget1 = $budget1;
        return $this;
    }
}
