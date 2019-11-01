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
 * Az4284 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4284Trait {

    /**
     * Az4284.
     *
     * @var float
     */
    private $az4284;

    /**
     * Get the az4284.
     *
     * @return float Returns the az4284.
     */
    public function getAz4284() {
        return $this->az4284;
    }

    /**
     * Set the az4284.
     *
     * @param float $az4284 The az4284.
     */
    public function setAz4284($az4284) {
        $this->az4284 = $az4284;
        return $this;
    }
}
