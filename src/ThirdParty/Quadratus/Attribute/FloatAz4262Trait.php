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
 * Az4262 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4262Trait {

    /**
     * Az4262.
     *
     * @var float
     */
    private $az4262;

    /**
     * Get the az4262.
     *
     * @return float Returns the az4262.
     */
    public function getAz4262() {
        return $this->az4262;
    }

    /**
     * Set the az4262.
     *
     * @param float $az4262 The az4262.
     */
    public function setAz4262($az4262) {
        $this->az4262 = $az4262;
        return $this;
    }
}
