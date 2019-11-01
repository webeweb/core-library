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
 * Active variables emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveVariablesEmpTrait {

    /**
     * Active variables emp.
     *
     * @var bool
     */
    private $activeVariablesEmp;

    /**
     * Get the active variables emp.
     *
     * @return bool Returns the active variables emp.
     */
    public function getActiveVariablesEmp() {
        return $this->activeVariablesEmp;
    }

    /**
     * Set the active variables emp.
     *
     * @param bool $activeVariablesEmp The active variables emp.
     */
    public function setActiveVariablesEmp($activeVariablesEmp) {
        $this->activeVariablesEmp = $activeVariablesEmp;
        return $this;
    }
}
