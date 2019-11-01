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
 * Cum tranche d1 sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTrancheD1SansSiTrait {

    /**
     * Cum tranche d1 sans si.
     *
     * @var float
     */
    private $cumTrancheD1SansSi;

    /**
     * Get the cum tranche d1 sans si.
     *
     * @return float Returns the cum tranche d1 sans si.
     */
    public function getCumTrancheD1SansSi() {
        return $this->cumTrancheD1SansSi;
    }

    /**
     * Set the cum tranche d1 sans si.
     *
     * @param float $cumTrancheD1SansSi The cum tranche d1 sans si.
     */
    public function setCumTrancheD1SansSi($cumTrancheD1SansSi) {
        $this->cumTrancheD1SansSi = $cumTrancheD1SansSi;
        return $this;
    }
}
