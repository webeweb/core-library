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
 * Gestion h sup mensuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionHSupMensuelleTrait {

    /**
     * Gestion h sup mensuelle.
     *
     * @var bool
     */
    private $gestionHSupMensuelle;

    /**
     * Get the gestion h sup mensuelle.
     *
     * @return bool Returns the gestion h sup mensuelle.
     */
    public function getGestionHSupMensuelle() {
        return $this->gestionHSupMensuelle;
    }

    /**
     * Set the gestion h sup mensuelle.
     *
     * @param bool $gestionHSupMensuelle The gestion h sup mensuelle.
     */
    public function setGestionHSupMensuelle($gestionHSupMensuelle) {
        $this->gestionHSupMensuelle = $gestionHSupMensuelle;
        return $this;
    }
}
