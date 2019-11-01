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
 * Af coeff degressif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAfCoeffDegressifTrait {

    /**
     * Af coeff degressif.
     *
     * @var float
     */
    private $afCoeffDegressif;

    /**
     * Get the af coeff degressif.
     *
     * @return float Returns the af coeff degressif.
     */
    public function getAfCoeffDegressif() {
        return $this->afCoeffDegressif;
    }

    /**
     * Set the af coeff degressif.
     *
     * @param float $afCoeffDegressif The af coeff degressif.
     */
    public function setAfCoeffDegressif($afCoeffDegressif) {
        $this->afCoeffDegressif = $afCoeffDegressif;
        return $this;
    }
}
