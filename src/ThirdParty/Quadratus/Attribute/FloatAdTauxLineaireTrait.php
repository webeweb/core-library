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
 * Ad taux lineaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdTauxLineaireTrait {

    /**
     * Ad taux lineaire.
     *
     * @var float
     */
    private $adTauxLineaire;

    /**
     * Get the ad taux lineaire.
     *
     * @return float Returns the ad taux lineaire.
     */
    public function getAdTauxLineaire() {
        return $this->adTauxLineaire;
    }

    /**
     * Set the ad taux lineaire.
     *
     * @param float $adTauxLineaire The ad taux lineaire.
     */
    public function setAdTauxLineaire($adTauxLineaire) {
        $this->adTauxLineaire = $adTauxLineaire;
        return $this;
    }
}
