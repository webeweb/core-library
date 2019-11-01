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
 * Transfert tds emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertTdsEmpTrait {

    /**
     * Transfert tds emp.
     *
     * @var bool
     */
    private $transfertTdsEmp;

    /**
     * Get the transfert tds emp.
     *
     * @return bool Returns the transfert tds emp.
     */
    public function getTransfertTdsEmp() {
        return $this->transfertTdsEmp;
    }

    /**
     * Set the transfert tds emp.
     *
     * @param bool $transfertTdsEmp The transfert tds emp.
     */
    public function setTransfertTdsEmp($transfertTdsEmp) {
        $this->transfertTdsEmp = $transfertTdsEmp;
        return $this;
    }
}
