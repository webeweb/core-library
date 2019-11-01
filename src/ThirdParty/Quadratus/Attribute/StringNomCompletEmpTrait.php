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
 * Nom complet emp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomCompletEmpTrait {

    /**
     * Nom complet emp.
     *
     * @var string
     */
    private $nomCompletEmp;

    /**
     * Get the nom complet emp.
     *
     * @return string Returns the nom complet emp.
     */
    public function getNomCompletEmp() {
        return $this->nomCompletEmp;
    }

    /**
     * Set the nom complet emp.
     *
     * @param string $nomCompletEmp The nom complet emp.
     */
    public function setNomCompletEmp($nomCompletEmp) {
        $this->nomCompletEmp = $nomCompletEmp;
        return $this;
    }
}
