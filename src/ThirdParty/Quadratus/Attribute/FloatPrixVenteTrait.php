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
 * Prix vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixVenteTrait {

    /**
     * Prix vente.
     *
     * @var float
     */
    private $prixVente;

    /**
     * Get the prix vente.
     *
     * @return float Returns the prix vente.
     */
    public function getPrixVente() {
        return $this->prixVente;
    }

    /**
     * Set the prix vente.
     *
     * @param float $prixVente The prix vente.
     */
    public function setPrixVente($prixVente) {
        $this->prixVente = $prixVente;
        return $this;
    }
}
