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
 * Cum prov cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumProvCpTrait {

    /**
     * Cum prov cp.
     *
     * @var float
     */
    private $cumProvCp;

    /**
     * Get the cum prov cp.
     *
     * @return float Returns the cum prov cp.
     */
    public function getCumProvCp() {
        return $this->cumProvCp;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float $cumProvCp The cum prov cp.
     */
    public function setCumProvCp($cumProvCp) {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }
}
