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
 * Qte stock attente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteStockAttenteTrait {

    /**
     * Qte stock attente.
     *
     * @var float
     */
    private $qteStockAttente;

    /**
     * Get the qte stock attente.
     *
     * @return float Returns the qte stock attente.
     */
    public function getQteStockAttente() {
        return $this->qteStockAttente;
    }

    /**
     * Set the qte stock attente.
     *
     * @param float $qteStockAttente The qte stock attente.
     */
    public function setQteStockAttente($qteStockAttente) {
        $this->qteStockAttente = $qteStockAttente;
        return $this;
    }
}
