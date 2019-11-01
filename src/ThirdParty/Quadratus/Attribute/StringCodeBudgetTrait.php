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
 * Code budget trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeBudgetTrait {

    /**
     * Code budget.
     *
     * @var string
     */
    private $codeBudget;

    /**
     * Get the code budget.
     *
     * @return string Returns the code budget.
     */
    public function getCodeBudget() {
        return $this->codeBudget;
    }

    /**
     * Set the code budget.
     *
     * @param string $codeBudget The code budget.
     */
    public function setCodeBudget($codeBudget) {
        $this->codeBudget = $codeBudget;
        return $this;
    }
}
