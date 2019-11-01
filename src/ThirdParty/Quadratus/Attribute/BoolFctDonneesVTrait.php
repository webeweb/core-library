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
 * Fct donnees v trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctDonneesVTrait {

    /**
     * Fct donnees v.
     *
     * @var bool
     */
    private $fctDonneesV;

    /**
     * Get the fct donnees v.
     *
     * @return bool Returns the fct donnees v.
     */
    public function getFctDonneesV() {
        return $this->fctDonneesV;
    }

    /**
     * Set the fct donnees v.
     *
     * @param bool $fctDonneesV The fct donnees v.
     */
    public function setFctDonneesV($fctDonneesV) {
        $this->fctDonneesV = $fctDonneesV;
        return $this;
    }
}
