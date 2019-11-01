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
 * X fer planning trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerPlanningTrait {

    /**
     * X fer planning.
     *
     * @var bool
     */
    private $xFerPlanning;

    /**
     * Get the x fer planning.
     *
     * @return bool Returns the x fer planning.
     */
    public function getXFerPlanning() {
        return $this->xFerPlanning;
    }

    /**
     * Set the x fer planning.
     *
     * @param bool $xFerPlanning The x fer planning.
     */
    public function setXFerPlanning($xFerPlanning) {
        $this->xFerPlanning = $xFerPlanning;
        return $this;
    }
}
