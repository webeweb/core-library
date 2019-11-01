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
 * Af taux lineaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAfTauxLineaireTrait {

    /**
     * Af taux lineaire.
     *
     * @var float
     */
    private $afTauxLineaire;

    /**
     * Get the af taux lineaire.
     *
     * @return float Returns the af taux lineaire.
     */
    public function getAfTauxLineaire() {
        return $this->afTauxLineaire;
    }

    /**
     * Set the af taux lineaire.
     *
     * @param float $afTauxLineaire The af taux lineaire.
     */
    public function setAfTauxLineaire($afTauxLineaire) {
        $this->afTauxLineaire = $afTauxLineaire;
        return $this;
    }
}
