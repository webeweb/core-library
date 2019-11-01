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
 * Az4208 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4208Trait {

    /**
     * Az4208.
     *
     * @var float
     */
    private $az4208;

    /**
     * Get the az4208.
     *
     * @return float Returns the az4208.
     */
    public function getAz4208() {
        return $this->az4208;
    }

    /**
     * Set the az4208.
     *
     * @param float $az4208 The az4208.
     */
    public function setAz4208($az4208) {
        $this->az4208 = $az4208;
        return $this;
    }
}
