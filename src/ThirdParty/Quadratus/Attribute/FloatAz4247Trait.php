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
 * Az4247 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4247Trait {

    /**
     * Az4247.
     *
     * @var float
     */
    private $az4247;

    /**
     * Get the az4247.
     *
     * @return float Returns the az4247.
     */
    public function getAz4247() {
        return $this->az4247;
    }

    /**
     * Set the az4247.
     *
     * @param float $az4247 The az4247.
     */
    public function setAz4247($az4247) {
        $this->az4247 = $az4247;
        return $this;
    }
}
