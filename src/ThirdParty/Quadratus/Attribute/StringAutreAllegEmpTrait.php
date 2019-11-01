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
 * Autre alleg emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutreAllegEmpTrait {

    /**
     * Autre alleg emp.
     *
     * @var string
     */
    private $autreAllegEmp;

    /**
     * Get the autre alleg emp.
     *
     * @return string Returns the autre alleg emp.
     */
    public function getAutreAllegEmp() {
        return $this->autreAllegEmp;
    }

    /**
     * Set the autre alleg emp.
     *
     * @param string $autreAllegEmp The autre alleg emp.
     */
    public function setAutreAllegEmp($autreAllegEmp) {
        $this->autreAllegEmp = $autreAllegEmp;
        return $this;
    }
}
