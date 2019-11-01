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
 * Point bt employes sortis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPointBtEmployesSortisTrait {

    /**
     * Point bt employes sortis.
     *
     * @var bool
     */
    private $pointBtEmployesSortis;

    /**
     * Get the point bt employes sortis.
     *
     * @return bool Returns the point bt employes sortis.
     */
    public function getPointBtEmployesSortis() {
        return $this->pointBtEmployesSortis;
    }

    /**
     * Set the point bt employes sortis.
     *
     * @param bool $pointBtEmployesSortis The point bt employes sortis.
     */
    public function setPointBtEmployesSortis($pointBtEmployesSortis) {
        $this->pointBtEmployesSortis = $pointBtEmployesSortis;
        return $this;
    }
}
