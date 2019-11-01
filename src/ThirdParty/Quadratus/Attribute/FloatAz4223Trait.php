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
 * Az4223 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4223Trait {

    /**
     * Az4223.
     *
     * @var float
     */
    private $az4223;

    /**
     * Get the az4223.
     *
     * @return float Returns the az4223.
     */
    public function getAz4223() {
        return $this->az4223;
    }

    /**
     * Set the az4223.
     *
     * @param float $az4223 The az4223.
     */
    public function setAz4223($az4223) {
        $this->az4223 = $az4223;
        return $this;
    }
}
