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
 * Annulation fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationFournisseurTrait {

    /**
     * Annulation fournisseur.
     *
     * @var bool
     */
    private $annulationFournisseur;

    /**
     * Get the annulation fournisseur.
     *
     * @return bool Returns the annulation fournisseur.
     */
    public function getAnnulationFournisseur() {
        return $this->annulationFournisseur;
    }

    /**
     * Set the annulation fournisseur.
     *
     * @param bool $annulationFournisseur The annulation fournisseur.
     */
    public function setAnnulationFournisseur($annulationFournisseur) {
        $this->annulationFournisseur = $annulationFournisseur;
        return $this;
    }
}
