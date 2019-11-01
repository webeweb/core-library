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
 * Qte eco commande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteEcoCommandeTrait {

    /**
     * Qte eco commande.
     *
     * @var float
     */
    private $qteEcoCommande;

    /**
     * Get the qte eco commande.
     *
     * @return float Returns the qte eco commande.
     */
    public function getQteEcoCommande() {
        return $this->qteEcoCommande;
    }

    /**
     * Set the qte eco commande.
     *
     * @param float $qteEcoCommande The qte eco commande.
     */
    public function setQteEcoCommande($qteEcoCommande) {
        $this->qteEcoCommande = $qteEcoCommande;
        return $this;
    }
}
