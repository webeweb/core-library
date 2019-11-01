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
 * Tranche a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheATrait {

    /**
     * Tranche a.
     *
     * @var float
     */
    private $trancheA;

    /**
     * Get the tranche a.
     *
     * @return float Returns the tranche a.
     */
    public function getTrancheA() {
        return $this->trancheA;
    }

    /**
     * Set the tranche a.
     *
     * @param float $trancheA The tranche a.
     */
    public function setTrancheA($trancheA) {
        $this->trancheA = $trancheA;
        return $this;
    }
}
