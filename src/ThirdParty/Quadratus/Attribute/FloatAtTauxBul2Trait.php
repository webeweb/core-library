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
 * At taux bul2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTauxBul2Trait {

    /**
     * At taux bul2.
     *
     * @var float
     */
    private $atTauxBul2;

    /**
     * Get the at taux bul2.
     *
     * @return float Returns the at taux bul2.
     */
    public function getAtTauxBul2() {
        return $this->atTauxBul2;
    }

    /**
     * Set the at taux bul2.
     *
     * @param float $atTauxBul2 The at taux bul2.
     */
    public function setAtTauxBul2($atTauxBul2) {
        $this->atTauxBul2 = $atTauxBul2;
        return $this;
    }
}
