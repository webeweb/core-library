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
 * Az4241 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4241Trait {

    /**
     * Az4241.
     *
     * @var float
     */
    private $az4241;

    /**
     * Get the az4241.
     *
     * @return float Returns the az4241.
     */
    public function getAz4241() {
        return $this->az4241;
    }

    /**
     * Set the az4241.
     *
     * @param float $az4241 The az4241.
     */
    public function setAz4241($az4241) {
        $this->az4241 = $az4241;
        return $this;
    }
}
