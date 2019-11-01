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
 * Ed bord rupture emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdBordRuptureEmpTrait {

    /**
     * Ed bord rupture emp.
     *
     * @var bool
     */
    private $edBordRuptureEmp;

    /**
     * Get the ed bord rupture emp.
     *
     * @return bool Returns the ed bord rupture emp.
     */
    public function getEdBordRuptureEmp() {
        return $this->edBordRuptureEmp;
    }

    /**
     * Set the ed bord rupture emp.
     *
     * @param bool $edBordRuptureEmp The ed bord rupture emp.
     */
    public function setEdBordRuptureEmp($edBordRuptureEmp) {
        $this->edBordRuptureEmp = $edBordRuptureEmp;
        return $this;
    }
}
