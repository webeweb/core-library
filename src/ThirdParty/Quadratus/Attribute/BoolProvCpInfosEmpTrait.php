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
 * Prov cp infos emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProvCpInfosEmpTrait {

    /**
     * Prov cp infos emp.
     *
     * @var bool
     */
    private $provCpInfosEmp;

    /**
     * Get the prov cp infos emp.
     *
     * @return bool Returns the prov cp infos emp.
     */
    public function getProvCpInfosEmp() {
        return $this->provCpInfosEmp;
    }

    /**
     * Set the prov cp infos emp.
     *
     * @param bool $provCpInfosEmp The prov cp infos emp.
     */
    public function setProvCpInfosEmp($provCpInfosEmp) {
        $this->provCpInfosEmp = $provCpInfosEmp;
        return $this;
    }
}
