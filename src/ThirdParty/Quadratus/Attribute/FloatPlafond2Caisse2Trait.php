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
 * Plafond2 caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond2Caisse2Trait {

    /**
     * Plafond2 caisse2.
     *
     * @var float
     */
    private $plafond2Caisse2;

    /**
     * Get the plafond2 caisse2.
     *
     * @return float Returns the plafond2 caisse2.
     */
    public function getPlafond2Caisse2() {
        return $this->plafond2Caisse2;
    }

    /**
     * Set the plafond2 caisse2.
     *
     * @param float $plafond2Caisse2 The plafond2 caisse2.
     */
    public function setPlafond2Caisse2($plafond2Caisse2) {
        $this->plafond2Caisse2 = $plafond2Caisse2;
        return $this;
    }
}
