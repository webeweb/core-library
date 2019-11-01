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
 * Alleg particulier emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAllegParticulierEmpTrait {

    /**
     * Alleg particulier emp.
     *
     * @var string
     */
    private $allegParticulierEmp;

    /**
     * Get the alleg particulier emp.
     *
     * @return string Returns the alleg particulier emp.
     */
    public function getAllegParticulierEmp() {
        return $this->allegParticulierEmp;
    }

    /**
     * Set the alleg particulier emp.
     *
     * @param string $allegParticulierEmp The alleg particulier emp.
     */
    public function setAllegParticulierEmp($allegParticulierEmp) {
        $this->allegParticulierEmp = $allegParticulierEmp;
        return $this;
    }
}
