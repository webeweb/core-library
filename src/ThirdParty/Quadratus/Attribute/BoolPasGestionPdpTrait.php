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
 * Pas gestion pdp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasGestionPdpTrait {

    /**
     * Pas gestion pdp.
     *
     * @var bool
     */
    private $pasGestionPdp;

    /**
     * Get the pas gestion pdp.
     *
     * @return bool Returns the pas gestion pdp.
     */
    public function getPasGestionPdp() {
        return $this->pasGestionPdp;
    }

    /**
     * Set the pas gestion pdp.
     *
     * @param bool $pasGestionPdp The pas gestion pdp.
     */
    public function setPasGestionPdp($pasGestionPdp) {
        $this->pasGestionPdp = $pasGestionPdp;
        return $this;
    }
}
