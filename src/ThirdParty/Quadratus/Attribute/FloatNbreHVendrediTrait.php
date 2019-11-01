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
 * Nbre h vendredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHVendrediTrait {

    /**
     * Nbre h vendredi.
     *
     * @var float
     */
    private $nbreHVendredi;

    /**
     * Get the nbre h vendredi.
     *
     * @return float Returns the nbre h vendredi.
     */
    public function getNbreHVendredi() {
        return $this->nbreHVendredi;
    }

    /**
     * Set the nbre h vendredi.
     *
     * @param float $nbreHVendredi The nbre h vendredi.
     */
    public function setNbreHVendredi($nbreHVendredi) {
        $this->nbreHVendredi = $nbreHVendredi;
        return $this;
    }
}
