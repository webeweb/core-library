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
 * Gestion intemperie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionIntemperieTrait {

    /**
     * Gestion intemperie.
     *
     * @var bool
     */
    private $gestionIntemperie;

    /**
     * Get the gestion intemperie.
     *
     * @return bool Returns the gestion intemperie.
     */
    public function getGestionIntemperie() {
        return $this->gestionIntemperie;
    }

    /**
     * Set the gestion intemperie.
     *
     * @param bool $gestionIntemperie The gestion intemperie.
     */
    public function setGestionIntemperie($gestionIntemperie) {
        $this->gestionIntemperie = $gestionIntemperie;
        return $this;
    }
}
