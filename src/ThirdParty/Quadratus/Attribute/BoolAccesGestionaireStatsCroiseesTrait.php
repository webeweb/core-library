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
 * Acces gestionaire stats croisees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesGestionaireStatsCroiseesTrait {

    /**
     * Acces gestionaire stats croisees.
     *
     * @var bool
     */
    private $accesGestionaireStatsCroisees;

    /**
     * Get the acces gestionaire stats croisees.
     *
     * @return bool Returns the acces gestionaire stats croisees.
     */
    public function getAccesGestionaireStatsCroisees() {
        return $this->accesGestionaireStatsCroisees;
    }

    /**
     * Set the acces gestionaire stats croisees.
     *
     * @param bool $accesGestionaireStatsCroisees The acces gestionaire stats croisees.
     */
    public function setAccesGestionaireStatsCroisees($accesGestionaireStatsCroisees) {
        $this->accesGestionaireStatsCroisees = $accesGestionaireStatsCroisees;
        return $this;
    }
}
