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
 * Az4283 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4283Trait {

    /**
     * Az4283.
     *
     * @var float
     */
    private $az4283;

    /**
     * Get the az4283.
     *
     * @return float Returns the az4283.
     */
    public function getAz4283() {
        return $this->az4283;
    }

    /**
     * Set the az4283.
     *
     * @param float $az4283 The az4283.
     */
    public function setAz4283($az4283) {
        $this->az4283 = $az4283;
        return $this;
    }
}
