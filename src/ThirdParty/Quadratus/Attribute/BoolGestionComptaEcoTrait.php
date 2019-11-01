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
 * Gestion compta eco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionComptaEcoTrait {

    /**
     * Gestion compta eco.
     *
     * @var bool
     */
    private $gestionComptaEco;

    /**
     * Get the gestion compta eco.
     *
     * @return bool Returns the gestion compta eco.
     */
    public function getGestionComptaEco() {
        return $this->gestionComptaEco;
    }

    /**
     * Set the gestion compta eco.
     *
     * @param bool $gestionComptaEco The gestion compta eco.
     */
    public function setGestionComptaEco($gestionComptaEco) {
        $this->gestionComptaEco = $gestionComptaEco;
        return $this;
    }
}
