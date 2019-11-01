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
 * Cum tranche a sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheASansSiTrait {

    /**
     * Cum tranche a sans si.
     *
     * @var float
     */
    private $cumTrancheASansSi;

    /**
     * Get the cum tranche a sans si.
     *
     * @return float Returns the cum tranche a sans si.
     */
    public function getCumTrancheASansSi() {
        return $this->cumTrancheASansSi;
    }

    /**
     * Set the cum tranche a sans si.
     *
     * @param float $cumTrancheASansSi The cum tranche a sans si.
     */
    public function setCumTrancheASansSi($cumTrancheASansSi) {
        $this->cumTrancheASansSi = $cumTrancheASansSi;
        return $this;
    }
}
