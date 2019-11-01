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
 * Az4236 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4236Trait {

    /**
     * Az4236.
     *
     * @var float
     */
    private $az4236;

    /**
     * Get the az4236.
     *
     * @return float Returns the az4236.
     */
    public function getAz4236() {
        return $this->az4236;
    }

    /**
     * Set the az4236.
     *
     * @param float $az4236 The az4236.
     */
    public function setAz4236($az4236) {
        $this->az4236 = $az4236;
        return $this;
    }
}
