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
 * Jf charge emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolJfChargeEmpTrait {

    /**
     * Jf charge emp.
     *
     * @var bool
     */
    private $jfChargeEmp;

    /**
     * Get the jf charge emp.
     *
     * @return bool Returns the jf charge emp.
     */
    public function getJfChargeEmp() {
        return $this->jfChargeEmp;
    }

    /**
     * Set the jf charge emp.
     *
     * @param bool $jfChargeEmp The jf charge emp.
     */
    public function setJfChargeEmp($jfChargeEmp) {
        $this->jfChargeEmp = $jfChargeEmp;
        return $this;
    }
}
