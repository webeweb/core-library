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
 * Cum tot si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTotSiTrait {

    /**
     * Cum tot si.
     *
     * @var float
     */
    private $cumTotSi;

    /**
     * Get the cum tot si.
     *
     * @return float Returns the cum tot si.
     */
    public function getCumTotSi() {
        return $this->cumTotSi;
    }

    /**
     * Set the cum tot si.
     *
     * @param float $cumTotSi The cum tot si.
     */
    public function setCumTotSi($cumTotSi) {
        $this->cumTotSi = $cumTotSi;
        return $this;
    }
}
