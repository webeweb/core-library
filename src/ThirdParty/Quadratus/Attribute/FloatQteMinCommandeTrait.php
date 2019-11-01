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
 * Qte min commande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteMinCommandeTrait {

    /**
     * Qte min commande.
     *
     * @var float
     */
    private $qteMinCommande;

    /**
     * Get the qte min commande.
     *
     * @return float Returns the qte min commande.
     */
    public function getQteMinCommande() {
        return $this->qteMinCommande;
    }

    /**
     * Set the qte min commande.
     *
     * @param float $qteMinCommande The qte min commande.
     */
    public function setQteMinCommande($qteMinCommande) {
        $this->qteMinCommande = $qteMinCommande;
        return $this;
    }
}
