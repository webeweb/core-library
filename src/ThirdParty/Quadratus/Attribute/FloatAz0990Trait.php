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
 * Az0990 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz0990Trait {

    /**
     * Az0990.
     *
     * @var float
     */
    private $az0990;

    /**
     * Get the az0990.
     *
     * @return float Returns the az0990.
     */
    public function getAz0990() {
        return $this->az0990;
    }

    /**
     * Set the az0990.
     *
     * @param float $az0990 The az0990.
     */
    public function setAz0990($az0990) {
        $this->az0990 = $az0990;
        return $this;
    }
}
