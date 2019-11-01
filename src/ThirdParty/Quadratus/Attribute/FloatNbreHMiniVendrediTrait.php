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
 * Nbre h mini vendredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniVendrediTrait {

    /**
     * Nbre h mini vendredi.
     *
     * @var float
     */
    private $nbreHMiniVendredi;

    /**
     * Get the nbre h mini vendredi.
     *
     * @return float Returns the nbre h mini vendredi.
     */
    public function getNbreHMiniVendredi() {
        return $this->nbreHMiniVendredi;
    }

    /**
     * Set the nbre h mini vendredi.
     *
     * @param float $nbreHMiniVendredi The nbre h mini vendredi.
     */
    public function setNbreHMiniVendredi($nbreHMiniVendredi) {
        $this->nbreHMiniVendredi = $nbreHMiniVendredi;
        return $this;
    }
}
