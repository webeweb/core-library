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
 * Rep budget trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepBudgetTrait {

    /**
     * Rep budget.
     *
     * @var bool
     */
    private $repBudget;

    /**
     * Get the rep budget.
     *
     * @return bool Returns the rep budget.
     */
    public function getRepBudget() {
        return $this->repBudget;
    }

    /**
     * Set the rep budget.
     *
     * @param bool $repBudget The rep budget.
     */
    public function setRepBudget($repBudget) {
        $this->repBudget = $repBudget;
        return $this;
    }
}
