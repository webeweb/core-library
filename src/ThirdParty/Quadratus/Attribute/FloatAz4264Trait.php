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
 * Az4264 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4264Trait {

    /**
     * Az4264.
     *
     * @var float
     */
    private $az4264;

    /**
     * Get the az4264.
     *
     * @return float Returns the az4264.
     */
    public function getAz4264() {
        return $this->az4264;
    }

    /**
     * Set the az4264.
     *
     * @param float $az4264 The az4264.
     */
    public function setAz4264($az4264) {
        $this->az4264 = $az4264;
        return $this;
    }
}
