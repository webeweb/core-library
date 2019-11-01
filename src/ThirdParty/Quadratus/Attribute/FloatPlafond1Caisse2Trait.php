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
 * Plafond1 caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond1Caisse2Trait {

    /**
     * Plafond1 caisse2.
     *
     * @var float
     */
    private $plafond1Caisse2;

    /**
     * Get the plafond1 caisse2.
     *
     * @return float Returns the plafond1 caisse2.
     */
    public function getPlafond1Caisse2() {
        return $this->plafond1Caisse2;
    }

    /**
     * Set the plafond1 caisse2.
     *
     * @param float $plafond1Caisse2 The plafond1 caisse2.
     */
    public function setPlafond1Caisse2($plafond1Caisse2) {
        $this->plafond1Caisse2 = $plafond1Caisse2;
        return $this;
    }
}
