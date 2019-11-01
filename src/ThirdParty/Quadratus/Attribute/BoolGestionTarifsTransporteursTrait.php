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
 * Gestion tarifs transporteurs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionTarifsTransporteursTrait {

    /**
     * Gestion tarifs transporteurs.
     *
     * @var bool
     */
    private $gestionTarifsTransporteurs;

    /**
     * Get the gestion tarifs transporteurs.
     *
     * @return bool Returns the gestion tarifs transporteurs.
     */
    public function getGestionTarifsTransporteurs() {
        return $this->gestionTarifsTransporteurs;
    }

    /**
     * Set the gestion tarifs transporteurs.
     *
     * @param bool $gestionTarifsTransporteurs The gestion tarifs transporteurs.
     */
    public function setGestionTarifsTransporteurs($gestionTarifsTransporteurs) {
        $this->gestionTarifsTransporteurs = $gestionTarifsTransporteurs;
        return $this;
    }
}
