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
 * Porta frais sante certif trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPortaFraisSanteCertifTravTrait {

    /**
     * Porta frais sante certif trav.
     *
     * @var bool
     */
    private $portaFraisSanteCertifTrav;

    /**
     * Get the porta frais sante certif trav.
     *
     * @return bool Returns the porta frais sante certif trav.
     */
    public function getPortaFraisSanteCertifTrav() {
        return $this->portaFraisSanteCertifTrav;
    }

    /**
     * Set the porta frais sante certif trav.
     *
     * @param bool $portaFraisSanteCertifTrav The porta frais sante certif trav.
     */
    public function setPortaFraisSanteCertifTrav($portaFraisSanteCertifTrav) {
        $this->portaFraisSanteCertifTrav = $portaFraisSanteCertifTrav;
        return $this;
    }
}
