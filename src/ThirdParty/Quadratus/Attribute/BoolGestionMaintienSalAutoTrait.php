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
 * Gestion maintien sal auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionMaintienSalAutoTrait {

    /**
     * Gestion maintien sal auto.
     *
     * @var bool
     */
    private $gestionMaintienSalAuto;

    /**
     * Get the gestion maintien sal auto.
     *
     * @return bool Returns the gestion maintien sal auto.
     */
    public function getGestionMaintienSalAuto() {
        return $this->gestionMaintienSalAuto;
    }

    /**
     * Set the gestion maintien sal auto.
     *
     * @param bool $gestionMaintienSalAuto The gestion maintien sal auto.
     */
    public function setGestionMaintienSalAuto($gestionMaintienSalAuto) {
        $this->gestionMaintienSalAuto = $gestionMaintienSalAuto;
        return $this;
    }
}
