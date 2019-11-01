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
 * Az4212 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4212Trait {

    /**
     * Az4212.
     *
     * @var float
     */
    private $az4212;

    /**
     * Get the az4212.
     *
     * @return float Returns the az4212.
     */
    public function getAz4212() {
        return $this->az4212;
    }

    /**
     * Set the az4212.
     *
     * @param float $az4212 The az4212.
     */
    public function setAz4212($az4212) {
        $this->az4212 = $az4212;
        return $this;
    }
}
