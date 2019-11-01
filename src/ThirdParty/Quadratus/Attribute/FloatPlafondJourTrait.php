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
 * Plafond jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondJourTrait {

    /**
     * Plafond jour.
     *
     * @var float
     */
    private $plafondJour;

    /**
     * Get the plafond jour.
     *
     * @return float Returns the plafond jour.
     */
    public function getPlafondJour() {
        return $this->plafondJour;
    }

    /**
     * Set the plafond jour.
     *
     * @param float $plafondJour The plafond jour.
     */
    public function setPlafondJour($plafondJour) {
        $this->plafondJour = $plafondJour;
        return $this;
    }
}
