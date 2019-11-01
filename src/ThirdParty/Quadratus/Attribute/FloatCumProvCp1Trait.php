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
 * Cum prov cp1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumProvCp1Trait {

    /**
     * Cum prov cp1.
     *
     * @var float
     */
    private $cumProvCp1;

    /**
     * Get the cum prov cp1.
     *
     * @return float Returns the cum prov cp1.
     */
    public function getCumProvCp1() {
        return $this->cumProvCp1;
    }

    /**
     * Set the cum prov cp1.
     *
     * @param float $cumProvCp1 The cum prov cp1.
     */
    public function setCumProvCp1($cumProvCp1) {
        $this->cumProvCp1 = $cumProvCp1;
        return $this;
    }
}
