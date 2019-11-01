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
 * Az4277 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4277Trait {

    /**
     * Az4277.
     *
     * @var float
     */
    private $az4277;

    /**
     * Get the az4277.
     *
     * @return float Returns the az4277.
     */
    public function getAz4277() {
        return $this->az4277;
    }

    /**
     * Set the az4277.
     *
     * @param float $az4277 The az4277.
     */
    public function setAz4277($az4277) {
        $this->az4277 = $az4277;
        return $this;
    }
}
