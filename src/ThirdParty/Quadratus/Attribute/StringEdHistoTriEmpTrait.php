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
 * Ed histo tri emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdHistoTriEmpTrait {

    /**
     * Ed histo tri emp.
     *
     * @var string
     */
    private $edHistoTriEmp;

    /**
     * Get the ed histo tri emp.
     *
     * @return string Returns the ed histo tri emp.
     */
    public function getEdHistoTriEmp() {
        return $this->edHistoTriEmp;
    }

    /**
     * Set the ed histo tri emp.
     *
     * @param string $edHistoTriEmp The ed histo tri emp.
     */
    public function setEdHistoTriEmp($edHistoTriEmp) {
        $this->edHistoTriEmp = $edHistoTriEmp;
        return $this;
    }
}
