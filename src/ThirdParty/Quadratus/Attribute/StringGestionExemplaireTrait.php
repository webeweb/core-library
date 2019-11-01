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
 * Gestion exemplaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionExemplaireTrait {

    /**
     * Gestion exemplaire.
     *
     * @var string
     */
    private $gestionExemplaire;

    /**
     * Get the gestion exemplaire.
     *
     * @return string Returns the gestion exemplaire.
     */
    public function getGestionExemplaire() {
        return $this->gestionExemplaire;
    }

    /**
     * Set the gestion exemplaire.
     *
     * @param string $gestionExemplaire The gestion exemplaire.
     */
    public function setGestionExemplaire($gestionExemplaire) {
        $this->gestionExemplaire = $gestionExemplaire;
        return $this;
    }
}
