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
 * Code abs cp sans solde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAbsCpSansSoldeTrait {

    /**
     * Code abs cp sans solde.
     *
     * @var string
     */
    private $codeAbsCpSansSolde;

    /**
     * Get the code abs cp sans solde.
     *
     * @return string Returns the code abs cp sans solde.
     */
    public function getCodeAbsCpSansSolde() {
        return $this->codeAbsCpSansSolde;
    }

    /**
     * Set the code abs cp sans solde.
     *
     * @param string $codeAbsCpSansSolde The code abs cp sans solde.
     */
    public function setCodeAbsCpSansSolde($codeAbsCpSansSolde) {
        $this->codeAbsCpSansSolde = $codeAbsCpSansSolde;
        return $this;
    }
}
