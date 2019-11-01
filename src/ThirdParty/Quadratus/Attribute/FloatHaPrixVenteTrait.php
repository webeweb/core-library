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
 * Ha prix vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaPrixVenteTrait {

    /**
     * Ha prix vente.
     *
     * @var float
     */
    private $haPrixVente;

    /**
     * Get the ha prix vente.
     *
     * @return float Returns the ha prix vente.
     */
    public function getHaPrixVente() {
        return $this->haPrixVente;
    }

    /**
     * Set the ha prix vente.
     *
     * @param float $haPrixVente The ha prix vente.
     */
    public function setHaPrixVente($haPrixVente) {
        $this->haPrixVente = $haPrixVente;
        return $this;
    }
}
