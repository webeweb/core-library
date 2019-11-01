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
 * Fct modif donnees v trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifDonneesVTrait {

    /**
     * Fct modif donnees v.
     *
     * @var bool
     */
    private $fctModifDonneesV;

    /**
     * Get the fct modif donnees v.
     *
     * @return bool Returns the fct modif donnees v.
     */
    public function getFctModifDonneesV() {
        return $this->fctModifDonneesV;
    }

    /**
     * Set the fct modif donnees v.
     *
     * @param bool $fctModifDonneesV The fct modif donnees v.
     */
    public function setFctModifDonneesV($fctModifDonneesV) {
        $this->fctModifDonneesV = $fctModifDonneesV;
        return $this;
    }
}
