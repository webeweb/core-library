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
 * Az4244 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4244Trait {

    /**
     * Az4244.
     *
     * @var float
     */
    private $az4244;

    /**
     * Get the az4244.
     *
     * @return float Returns the az4244.
     */
    public function getAz4244() {
        return $this->az4244;
    }

    /**
     * Set the az4244.
     *
     * @param float $az4244 The az4244.
     */
    public function setAz4244($az4244) {
        $this->az4244 = $az4244;
        return $this;
    }
}
