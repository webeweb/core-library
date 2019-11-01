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
 * Type crcca emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCrccaEmpTrait {

    /**
     * Type crcca emp.
     *
     * @var string
     */
    private $typeCrccaEmp;

    /**
     * Get the type crcca emp.
     *
     * @return string Returns the type crcca emp.
     */
    public function getTypeCrccaEmp() {
        return $this->typeCrccaEmp;
    }

    /**
     * Set the type crcca emp.
     *
     * @param string $typeCrccaEmp The type crcca emp.
     */
    public function setTypeCrccaEmp($typeCrccaEmp) {
        $this->typeCrccaEmp = $typeCrccaEmp;
        return $this;
    }
}
