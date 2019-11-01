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
 * Az4222 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4222Trait {

    /**
     * Az4222.
     *
     * @var float
     */
    private $az4222;

    /**
     * Get the az4222.
     *
     * @return float Returns the az4222.
     */
    public function getAz4222() {
        return $this->az4222;
    }

    /**
     * Set the az4222.
     *
     * @param float $az4222 The az4222.
     */
    public function setAz4222($az4222) {
        $this->az4222 = $az4222;
        return $this;
    }
}
