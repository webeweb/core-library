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
 * Az4232 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4232Trait {

    /**
     * Az4232.
     *
     * @var float
     */
    private $az4232;

    /**
     * Get the az4232.
     *
     * @return float Returns the az4232.
     */
    public function getAz4232() {
        return $this->az4232;
    }

    /**
     * Set the az4232.
     *
     * @param float $az4232 The az4232.
     */
    public function setAz4232($az4232) {
        $this->az4232 = $az4232;
        return $this;
    }
}
