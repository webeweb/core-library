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
 * Cum tranche2 sans si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTranche2SansSiTrait {

    /**
     * Cum tranche2 sans si.
     *
     * @var float
     */
    private $cumTranche2SansSi;

    /**
     * Get the cum tranche2 sans si.
     *
     * @return float Returns the cum tranche2 sans si.
     */
    public function getCumTranche2SansSi() {
        return $this->cumTranche2SansSi;
    }

    /**
     * Set the cum tranche2 sans si.
     *
     * @param float $cumTranche2SansSi The cum tranche2 sans si.
     */
    public function setCumTranche2SansSi($cumTranche2SansSi) {
        $this->cumTranche2SansSi = $cumTranche2SansSi;
        return $this;
    }
}
