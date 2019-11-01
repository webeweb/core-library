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
 * Taux tva vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTvaVenteTrait {

    /**
     * Taux tva vente.
     *
     * @var float
     */
    private $tauxTvaVente;

    /**
     * Get the taux tva vente.
     *
     * @return float Returns the taux tva vente.
     */
    public function getTauxTvaVente() {
        return $this->tauxTvaVente;
    }

    /**
     * Set the taux tva vente.
     *
     * @param float $tauxTvaVente The taux tva vente.
     */
    public function setTauxTvaVente($tauxTvaVente) {
        $this->tauxTvaVente = $tauxTvaVente;
        return $this;
    }
}
