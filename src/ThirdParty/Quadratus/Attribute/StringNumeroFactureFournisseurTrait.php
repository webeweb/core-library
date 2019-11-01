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
 * Numero facture fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroFactureFournisseurTrait {

    /**
     * Numero facture fournisseur.
     *
     * @var string
     */
    private $numeroFactureFournisseur;

    /**
     * Get the numero facture fournisseur.
     *
     * @return string Returns the numero facture fournisseur.
     */
    public function getNumeroFactureFournisseur() {
        return $this->numeroFactureFournisseur;
    }

    /**
     * Set the numero facture fournisseur.
     *
     * @param string $numeroFactureFournisseur The numero facture fournisseur.
     */
    public function setNumeroFactureFournisseur($numeroFactureFournisseur) {
        $this->numeroFactureFournisseur = $numeroFactureFournisseur;
        return $this;
    }
}
