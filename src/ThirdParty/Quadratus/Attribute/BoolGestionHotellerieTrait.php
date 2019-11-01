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
 * Gestion hotellerie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionHotellerieTrait {

    /**
     * Gestion hotellerie.
     *
     * @var bool
     */
    private $gestionHotellerie;

    /**
     * Get the gestion hotellerie.
     *
     * @return bool Returns the gestion hotellerie.
     */
    public function getGestionHotellerie() {
        return $this->gestionHotellerie;
    }

    /**
     * Set the gestion hotellerie.
     *
     * @param bool $gestionHotellerie The gestion hotellerie.
     */
    public function setGestionHotellerie($gestionHotellerie) {
        $this->gestionHotellerie = $gestionHotellerie;
        return $this;
    }
}
