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
 * Az4201 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4201Trait {

    /**
     * Az4201.
     *
     * @var float
     */
    private $az4201;

    /**
     * Get the az4201.
     *
     * @return float Returns the az4201.
     */
    public function getAz4201() {
        return $this->az4201;
    }

    /**
     * Set the az4201.
     *
     * @param float $az4201 The az4201.
     */
    public function setAz4201($az4201) {
        $this->az4201 = $az4201;
        return $this;
    }
}
