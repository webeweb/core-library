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
 * Tx escompte vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxEscompteVenteTrait {

    /**
     * Tx escompte vente.
     *
     * @var float
     */
    private $txEscompteVente;

    /**
     * Get the tx escompte vente.
     *
     * @return float Returns the tx escompte vente.
     */
    public function getTxEscompteVente() {
        return $this->txEscompteVente;
    }

    /**
     * Set the tx escompte vente.
     *
     * @param float $txEscompteVente The tx escompte vente.
     */
    public function setTxEscompteVente($txEscompteVente) {
        $this->txEscompteVente = $txEscompteVente;
        return $this;
    }
}
