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
 * Az4204 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4204Trait {

    /**
     * Az4204.
     *
     * @var float
     */
    private $az4204;

    /**
     * Get the az4204.
     *
     * @return float Returns the az4204.
     */
    public function getAz4204() {
        return $this->az4204;
    }

    /**
     * Set the az4204.
     *
     * @param float $az4204 The az4204.
     */
    public function setAz4204($az4204) {
        $this->az4204 = $az4204;
        return $this;
    }
}
