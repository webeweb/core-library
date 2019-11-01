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
 * Gestion paiements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPaiementsTrait {

    /**
     * Gestion paiements.
     *
     * @var bool
     */
    private $gestionPaiements;

    /**
     * Get the gestion paiements.
     *
     * @return bool Returns the gestion paiements.
     */
    public function getGestionPaiements() {
        return $this->gestionPaiements;
    }

    /**
     * Set the gestion paiements.
     *
     * @param bool $gestionPaiements The gestion paiements.
     */
    public function setGestionPaiements($gestionPaiements) {
        $this->gestionPaiements = $gestionPaiements;
        return $this;
    }
}
