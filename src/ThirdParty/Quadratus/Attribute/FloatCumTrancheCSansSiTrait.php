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
 * Cum tranche c sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheCSansSiTrait {

    /**
     * Cum tranche c sans si.
     *
     * @var float
     */
    private $cumTrancheCSansSi;

    /**
     * Get the cum tranche c sans si.
     *
     * @return float Returns the cum tranche c sans si.
     */
    public function getCumTrancheCSansSi() {
        return $this->cumTrancheCSansSi;
    }

    /**
     * Set the cum tranche c sans si.
     *
     * @param float $cumTrancheCSansSi The cum tranche c sans si.
     */
    public function setCumTrancheCSansSi($cumTrancheCSansSi) {
        $this->cumTrancheCSansSi = $cumTrancheCSansSi;
        return $this;
    }
}
