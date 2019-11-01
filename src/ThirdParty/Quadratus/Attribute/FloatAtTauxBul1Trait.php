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
 * At taux bul1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTauxBul1Trait {

    /**
     * At taux bul1.
     *
     * @var float
     */
    private $atTauxBul1;

    /**
     * Get the at taux bul1.
     *
     * @return float Returns the at taux bul1.
     */
    public function getAtTauxBul1() {
        return $this->atTauxBul1;
    }

    /**
     * Set the at taux bul1.
     *
     * @param float $atTauxBul1 The at taux bul1.
     */
    public function setAtTauxBul1($atTauxBul1) {
        $this->atTauxBul1 = $atTauxBul1;
        return $this;
    }
}
