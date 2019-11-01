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
 * Gestion h sup mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionHSupMensTrait {

    /**
     * Gestion h sup mens.
     *
     * @var bool
     */
    private $gestionHSupMens;

    /**
     * Get the gestion h sup mens.
     *
     * @return bool Returns the gestion h sup mens.
     */
    public function getGestionHSupMens() {
        return $this->gestionHSupMens;
    }

    /**
     * Set the gestion h sup mens.
     *
     * @param bool $gestionHSupMens The gestion h sup mens.
     */
    public function setGestionHSupMens($gestionHSupMens) {
        $this->gestionHSupMens = $gestionHSupMens;
        return $this;
    }
}
