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
 * Plafond1 caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond1Caisse3Trait {

    /**
     * Plafond1 caisse3.
     *
     * @var float
     */
    private $plafond1Caisse3;

    /**
     * Get the plafond1 caisse3.
     *
     * @return float Returns the plafond1 caisse3.
     */
    public function getPlafond1Caisse3() {
        return $this->plafond1Caisse3;
    }

    /**
     * Set the plafond1 caisse3.
     *
     * @param float $plafond1Caisse3 The plafond1 caisse3.
     */
    public function setPlafond1Caisse3($plafond1Caisse3) {
        $this->plafond1Caisse3 = $plafond1Caisse3;
        return $this;
    }
}
