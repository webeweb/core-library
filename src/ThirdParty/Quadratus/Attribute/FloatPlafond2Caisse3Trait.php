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
 * Plafond2 caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond2Caisse3Trait {

    /**
     * Plafond2 caisse3.
     *
     * @var float
     */
    private $plafond2Caisse3;

    /**
     * Get the plafond2 caisse3.
     *
     * @return float Returns the plafond2 caisse3.
     */
    public function getPlafond2Caisse3() {
        return $this->plafond2Caisse3;
    }

    /**
     * Set the plafond2 caisse3.
     *
     * @param float $plafond2Caisse3 The plafond2 caisse3.
     */
    public function setPlafond2Caisse3($plafond2Caisse3) {
        $this->plafond2Caisse3 = $plafond2Caisse3;
        return $this;
    }
}
