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
 * Az4288 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4288Trait {

    /**
     * Az4288.
     *
     * @var float
     */
    private $az4288;

    /**
     * Get the az4288.
     *
     * @return float Returns the az4288.
     */
    public function getAz4288() {
        return $this->az4288;
    }

    /**
     * Set the az4288.
     *
     * @param float $az4288 The az4288.
     */
    public function setAz4288($az4288) {
        $this->az4288 = $az4288;
        return $this;
    }
}
