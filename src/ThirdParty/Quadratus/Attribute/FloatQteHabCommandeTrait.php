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
 * Qte hab commande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteHabCommandeTrait {

    /**
     * Qte hab commande.
     *
     * @var float
     */
    private $qteHabCommande;

    /**
     * Get the qte hab commande.
     *
     * @return float Returns the qte hab commande.
     */
    public function getQteHabCommande() {
        return $this->qteHabCommande;
    }

    /**
     * Set the qte hab commande.
     *
     * @param float $qteHabCommande The qte hab commande.
     */
    public function setQteHabCommande($qteHabCommande) {
        $this->qteHabCommande = $qteHabCommande;
        return $this;
    }
}
