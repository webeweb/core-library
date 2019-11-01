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
 * Az4243 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4243Trait {

    /**
     * Az4243.
     *
     * @var float
     */
    private $az4243;

    /**
     * Get the az4243.
     *
     * @return float Returns the az4243.
     */
    public function getAz4243() {
        return $this->az4243;
    }

    /**
     * Set the az4243.
     *
     * @param float $az4243 The az4243.
     */
    public function setAz4243($az4243) {
        $this->az4243 = $az4243;
        return $this;
    }
}
