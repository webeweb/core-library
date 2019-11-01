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
 * At taux bul5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAtTauxBul5Trait {

    /**
     * At taux bul5.
     *
     * @var float
     */
    private $atTauxBul5;

    /**
     * Get the at taux bul5.
     *
     * @return float Returns the at taux bul5.
     */
    public function getAtTauxBul5() {
        return $this->atTauxBul5;
    }

    /**
     * Set the at taux bul5.
     *
     * @param float $atTauxBul5 The at taux bul5.
     */
    public function setAtTauxBul5($atTauxBul5) {
        $this->atTauxBul5 = $atTauxBul5;
        return $this;
    }
}
