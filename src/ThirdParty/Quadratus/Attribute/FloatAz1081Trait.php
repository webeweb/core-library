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
 * Az1081 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1081Trait {

    /**
     * Az1081.
     *
     * @var float
     */
    private $az1081;

    /**
     * Get the az1081.
     *
     * @return float Returns the az1081.
     */
    public function getAz1081() {
        return $this->az1081;
    }

    /**
     * Set the az1081.
     *
     * @param float $az1081 The az1081.
     */
    public function setAz1081($az1081) {
        $this->az1081 = $az1081;
        return $this;
    }
}
