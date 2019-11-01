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
 * Tranche a sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheASansSiTrait {

    /**
     * Tranche a sans si.
     *
     * @var float
     */
    private $trancheASansSi;

    /**
     * Get the tranche a sans si.
     *
     * @return float Returns the tranche a sans si.
     */
    public function getTrancheASansSi() {
        return $this->trancheASansSi;
    }

    /**
     * Set the tranche a sans si.
     *
     * @param float $trancheASansSi The tranche a sans si.
     */
    public function setTrancheASansSi($trancheASansSi) {
        $this->trancheASansSi = $trancheASansSi;
        return $this;
    }
}
