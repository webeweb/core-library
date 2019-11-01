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
 * Az4207 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4207Trait {

    /**
     * Az4207.
     *
     * @var float
     */
    private $az4207;

    /**
     * Get the az4207.
     *
     * @return float Returns the az4207.
     */
    public function getAz4207() {
        return $this->az4207;
    }

    /**
     * Set the az4207.
     *
     * @param float $az4207 The az4207.
     */
    public function setAz4207($az4207) {
        $this->az4207 = $az4207;
        return $this;
    }
}
