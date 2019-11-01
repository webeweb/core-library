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
 * Num ligne plan trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLignePlanTrait {

    /**
     * Num ligne plan.
     *
     * @var int
     */
    private $numLignePlan;

    /**
     * Get the num ligne plan.
     *
     * @return int Returns the num ligne plan.
     */
    public function getNumLignePlan() {
        return $this->numLignePlan;
    }

    /**
     * Set the num ligne plan.
     *
     * @param int $numLignePlan The num ligne plan.
     */
    public function setNumLignePlan($numLignePlan) {
        $this->numLignePlan = $numLignePlan;
        return $this;
    }
}
