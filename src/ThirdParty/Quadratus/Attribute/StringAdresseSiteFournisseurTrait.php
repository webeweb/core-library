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
 * Adresse site fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseSiteFournisseurTrait {

    /**
     * Adresse site fournisseur.
     *
     * @var string
     */
    private $adresseSiteFournisseur;

    /**
     * Get the adresse site fournisseur.
     *
     * @return string Returns the adresse site fournisseur.
     */
    public function getAdresseSiteFournisseur() {
        return $this->adresseSiteFournisseur;
    }

    /**
     * Set the adresse site fournisseur.
     *
     * @param string $adresseSiteFournisseur The adresse site fournisseur.
     */
    public function setAdresseSiteFournisseur($adresseSiteFournisseur) {
        $this->adresseSiteFournisseur = $adresseSiteFournisseur;
        return $this;
    }
}
