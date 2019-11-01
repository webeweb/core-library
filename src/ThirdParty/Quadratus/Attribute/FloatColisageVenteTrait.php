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
 * Colisage vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatColisageVenteTrait {

    /**
     * Colisage vente.
     *
     * @var float
     */
    private $colisageVente;

    /**
     * Get the colisage vente.
     *
     * @return float Returns the colisage vente.
     */
    public function getColisageVente() {
        return $this->colisageVente;
    }

    /**
     * Set the colisage vente.
     *
     * @param float $colisageVente The colisage vente.
     */
    public function setColisageVente($colisageVente) {
        $this->colisageVente = $colisageVente;
        return $this;
    }
}
