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
 * Az4249 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4249Trait {

    /**
     * Az4249.
     *
     * @var float
     */
    private $az4249;

    /**
     * Get the az4249.
     *
     * @return float Returns the az4249.
     */
    public function getAz4249() {
        return $this->az4249;
    }

    /**
     * Set the az4249.
     *
     * @param float $az4249 The az4249.
     */
    public function setAz4249($az4249) {
        $this->az4249 = $az4249;
        return $this;
    }
}
