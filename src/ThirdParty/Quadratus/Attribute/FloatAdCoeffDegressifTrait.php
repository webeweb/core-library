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
 * Ad coeff degressif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdCoeffDegressifTrait {

    /**
     * Ad coeff degressif.
     *
     * @var float
     */
    private $adCoeffDegressif;

    /**
     * Get the ad coeff degressif.
     *
     * @return float Returns the ad coeff degressif.
     */
    public function getAdCoeffDegressif() {
        return $this->adCoeffDegressif;
    }

    /**
     * Set the ad coeff degressif.
     *
     * @param float $adCoeffDegressif The ad coeff degressif.
     */
    public function setAdCoeffDegressif($adCoeffDegressif) {
        $this->adCoeffDegressif = $adCoeffDegressif;
        return $this;
    }
}
