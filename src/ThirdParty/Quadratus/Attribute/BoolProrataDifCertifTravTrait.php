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
 * Prorata dif certif trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProrataDifCertifTravTrait {

    /**
     * Prorata dif certif trav.
     *
     * @var bool
     */
    private $prorataDifCertifTrav;

    /**
     * Get the prorata dif certif trav.
     *
     * @return bool Returns the prorata dif certif trav.
     */
    public function getProrataDifCertifTrav() {
        return $this->prorataDifCertifTrav;
    }

    /**
     * Set the prorata dif certif trav.
     *
     * @param bool $prorataDifCertifTrav The prorata dif certif trav.
     */
    public function setProrataDifCertifTrav($prorataDifCertifTrav) {
        $this->prorataDifCertifTrav = $prorataDifCertifTrav;
        return $this;
    }
}
