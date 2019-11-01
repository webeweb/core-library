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
 * Pas gestion pdp1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasGestionPdp1Trait {

    /**
     * Pas gestion pdp1.
     *
     * @var bool
     */
    private $pasGestionPdp1;

    /**
     * Get the pas gestion pdp1.
     *
     * @return bool Returns the pas gestion pdp1.
     */
    public function getPasGestionPdp1() {
        return $this->pasGestionPdp1;
    }

    /**
     * Set the pas gestion pdp1.
     *
     * @param bool $pasGestionPdp1 The pas gestion pdp1.
     */
    public function setPasGestionPdp1($pasGestionPdp1) {
        $this->pasGestionPdp1 = $pasGestionPdp1;
        return $this;
    }
}
