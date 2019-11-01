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
 * At taux bul4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTauxBul4Trait {

    /**
     * At taux bul4.
     *
     * @var float
     */
    private $atTauxBul4;

    /**
     * Get the at taux bul4.
     *
     * @return float Returns the at taux bul4.
     */
    public function getAtTauxBul4() {
        return $this->atTauxBul4;
    }

    /**
     * Set the at taux bul4.
     *
     * @param float $atTauxBul4 The at taux bul4.
     */
    public function setAtTauxBul4($atTauxBul4) {
        $this->atTauxBul4 = $atTauxBul4;
        return $this;
    }
}
