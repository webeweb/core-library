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
 * Plafond2 caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond2Caisse1Trait {

    /**
     * Plafond2 caisse1.
     *
     * @var float
     */
    private $plafond2Caisse1;

    /**
     * Get the plafond2 caisse1.
     *
     * @return float Returns the plafond2 caisse1.
     */
    public function getPlafond2Caisse1() {
        return $this->plafond2Caisse1;
    }

    /**
     * Set the plafond2 caisse1.
     *
     * @param float $plafond2Caisse1 The plafond2 caisse1.
     */
    public function setPlafond2Caisse1($plafond2Caisse1) {
        $this->plafond2Caisse1 = $plafond2Caisse1;
        return $this;
    }
}
