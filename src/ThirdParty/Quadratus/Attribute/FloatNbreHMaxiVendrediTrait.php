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
 * Nbre h maxi vendredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxiVendrediTrait {

    /**
     * Nbre h maxi vendredi.
     *
     * @var float
     */
    private $nbreHMaxiVendredi;

    /**
     * Get the nbre h maxi vendredi.
     *
     * @return float Returns the nbre h maxi vendredi.
     */
    public function getNbreHMaxiVendredi() {
        return $this->nbreHMaxiVendredi;
    }

    /**
     * Set the nbre h maxi vendredi.
     *
     * @param float $nbreHMaxiVendredi The nbre h maxi vendredi.
     */
    public function setNbreHMaxiVendredi($nbreHMaxiVendredi) {
        $this->nbreHMaxiVendredi = $nbreHMaxiVendredi;
        return $this;
    }
}
