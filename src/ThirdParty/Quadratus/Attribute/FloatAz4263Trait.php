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
 * Az4263 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4263Trait {

    /**
     * Az4263.
     *
     * @var float
     */
    private $az4263;

    /**
     * Get the az4263.
     *
     * @return float Returns the az4263.
     */
    public function getAz4263() {
        return $this->az4263;
    }

    /**
     * Set the az4263.
     *
     * @param float $az4263 The az4263.
     */
    public function setAz4263($az4263) {
        $this->az4263 = $az4263;
        return $this;
    }
}
