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
 * Numero emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroEmpTrait {

    /**
     * Numero emp.
     *
     * @var string
     */
    private $numeroEmp;

    /**
     * Get the numero emp.
     *
     * @return string Returns the numero emp.
     */
    public function getNumeroEmp() {
        return $this->numeroEmp;
    }

    /**
     * Set the numero emp.
     *
     * @param string $numeroEmp The numero emp.
     */
    public function setNumeroEmp($numeroEmp) {
        $this->numeroEmp = $numeroEmp;
        return $this;
    }
}
