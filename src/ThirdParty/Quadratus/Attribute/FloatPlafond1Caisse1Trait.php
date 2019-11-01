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
 * Plafond1 caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond1Caisse1Trait {

    /**
     * Plafond1 caisse1.
     *
     * @var float
     */
    private $plafond1Caisse1;

    /**
     * Get the plafond1 caisse1.
     *
     * @return float Returns the plafond1 caisse1.
     */
    public function getPlafond1Caisse1() {
        return $this->plafond1Caisse1;
    }

    /**
     * Set the plafond1 caisse1.
     *
     * @param float $plafond1Caisse1 The plafond1 caisse1.
     */
    public function setPlafond1Caisse1($plafond1Caisse1) {
        $this->plafond1Caisse1 = $plafond1Caisse1;
        return $this;
    }
}
