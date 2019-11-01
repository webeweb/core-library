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
 * X fer budgets temps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerBudgetsTempsTrait {

    /**
     * X fer budgets temps.
     *
     * @var bool
     */
    private $xFerBudgetsTemps;

    /**
     * Get the x fer budgets temps.
     *
     * @return bool Returns the x fer budgets temps.
     */
    public function getXFerBudgetsTemps() {
        return $this->xFerBudgetsTemps;
    }

    /**
     * Set the x fer budgets temps.
     *
     * @param bool $xFerBudgetsTemps The x fer budgets temps.
     */
    public function setXFerBudgetsTemps($xFerBudgetsTemps) {
        $this->xFerBudgetsTemps = $xFerBudgetsTemps;
        return $this;
    }
}
