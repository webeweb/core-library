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
 * Gestion h nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionHNuitTrait {

    /**
     * Gestion h nuit.
     *
     * @var bool
     */
    private $gestionHNuit;

    /**
     * Get the gestion h nuit.
     *
     * @return bool Returns the gestion h nuit.
     */
    public function getGestionHNuit() {
        return $this->gestionHNuit;
    }

    /**
     * Set the gestion h nuit.
     *
     * @param bool $gestionHNuit The gestion h nuit.
     */
    public function setGestionHNuit($gestionHNuit) {
        $this->gestionHNuit = $gestionHNuit;
        return $this;
    }
}
