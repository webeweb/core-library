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
 * At taux bul3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTauxBul3Trait {

    /**
     * At taux bul3.
     *
     * @var float
     */
    private $atTauxBul3;

    /**
     * Get the at taux bul3.
     *
     * @return float Returns the at taux bul3.
     */
    public function getAtTauxBul3() {
        return $this->atTauxBul3;
    }

    /**
     * Set the at taux bul3.
     *
     * @param float $atTauxBul3 The at taux bul3.
     */
    public function setAtTauxBul3($atTauxBul3) {
        $this->atTauxBul3 = $atTauxBul3;
        return $this;
    }
}
