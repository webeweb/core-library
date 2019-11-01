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
 * Duree pointee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureePointeeTrait {

    /**
     * Duree pointee.
     *
     * @var float
     */
    private $dureePointee;

    /**
     * Get the duree pointee.
     *
     * @return float Returns the duree pointee.
     */
    public function getDureePointee() {
        return $this->dureePointee;
    }

    /**
     * Set the duree pointee.
     *
     * @param float $dureePointee The duree pointee.
     */
    public function setDureePointee($dureePointee) {
        $this->dureePointee = $dureePointee;
        return $this;
    }
}
