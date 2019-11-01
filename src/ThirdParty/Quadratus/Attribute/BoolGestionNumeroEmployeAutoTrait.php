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
 * Gestion numero employe auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionNumeroEmployeAutoTrait {

    /**
     * Gestion numero employe auto.
     *
     * @var bool
     */
    private $gestionNumeroEmployeAuto;

    /**
     * Get the gestion numero employe auto.
     *
     * @return bool Returns the gestion numero employe auto.
     */
    public function getGestionNumeroEmployeAuto() {
        return $this->gestionNumeroEmployeAuto;
    }

    /**
     * Set the gestion numero employe auto.
     *
     * @param bool $gestionNumeroEmployeAuto The gestion numero employe auto.
     */
    public function setGestionNumeroEmployeAuto($gestionNumeroEmployeAuto) {
        $this->gestionNumeroEmployeAuto = $gestionNumeroEmployeAuto;
        return $this;
    }
}
