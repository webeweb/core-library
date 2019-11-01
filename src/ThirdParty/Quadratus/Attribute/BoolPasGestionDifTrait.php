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
 * Pas gestion dif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasGestionDifTrait {

    /**
     * Pas gestion dif.
     *
     * @var bool
     */
    private $pasGestionDif;

    /**
     * Get the pas gestion dif.
     *
     * @return bool Returns the pas gestion dif.
     */
    public function getPasGestionDif() {
        return $this->pasGestionDif;
    }

    /**
     * Set the pas gestion dif.
     *
     * @param bool $pasGestionDif The pas gestion dif.
     */
    public function setPasGestionDif($pasGestionDif) {
        $this->pasGestionDif = $pasGestionDif;
        return $this;
    }
}
