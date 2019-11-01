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
 * Plan fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlanFactTrait {

    /**
     * Plan fact.
     *
     * @var bool
     */
    private $planFact;

    /**
     * Get the plan fact.
     *
     * @return bool Returns the plan fact.
     */
    public function getPlanFact() {
        return $this->planFact;
    }

    /**
     * Set the plan fact.
     *
     * @param bool $planFact The plan fact.
     */
    public function setPlanFact($planFact) {
        $this->planFact = $planFact;
        return $this;
    }
}
