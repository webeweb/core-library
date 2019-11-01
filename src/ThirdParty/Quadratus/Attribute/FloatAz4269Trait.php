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
 * Az4269 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4269Trait {

    /**
     * Az4269.
     *
     * @var float
     */
    private $az4269;

    /**
     * Get the az4269.
     *
     * @return float Returns the az4269.
     */
    public function getAz4269() {
        return $this->az4269;
    }

    /**
     * Set the az4269.
     *
     * @param float $az4269 The az4269.
     */
    public function setAz4269($az4269) {
        $this->az4269 = $az4269;
        return $this;
    }
}
