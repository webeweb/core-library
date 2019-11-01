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
 * Colisage px vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatColisagePxVenteTrait {

    /**
     * Colisage px vente.
     *
     * @var float
     */
    private $colisagePxVente;

    /**
     * Get the colisage px vente.
     *
     * @return float Returns the colisage px vente.
     */
    public function getColisagePxVente() {
        return $this->colisagePxVente;
    }

    /**
     * Set the colisage px vente.
     *
     * @param float $colisagePxVente The colisage px vente.
     */
    public function setColisagePxVente($colisagePxVente) {
        $this->colisagePxVente = $colisagePxVente;
        return $this;
    }
}
