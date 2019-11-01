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
 * Az4231 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4231Trait {

    /**
     * Az4231.
     *
     * @var float
     */
    private $az4231;

    /**
     * Get the az4231.
     *
     * @return float Returns the az4231.
     */
    public function getAz4231() {
        return $this->az4231;
    }

    /**
     * Set the az4231.
     *
     * @param float $az4231 The az4231.
     */
    public function setAz4231($az4231) {
        $this->az4231 = $az4231;
        return $this;
    }
}
