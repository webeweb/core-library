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
 * Tranche asi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheAsiTrait {

    /**
     * Tranche asi.
     *
     * @var float
     */
    private $trancheAsi;

    /**
     * Get the tranche asi.
     *
     * @return float Returns the tranche asi.
     */
    public function getTrancheAsi() {
        return $this->trancheAsi;
    }

    /**
     * Set the tranche asi.
     *
     * @param float $trancheAsi The tranche asi.
     */
    public function setTrancheAsi($trancheAsi) {
        $this->trancheAsi = $trancheAsi;
        return $this;
    }
}
