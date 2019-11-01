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
 * Az4210 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4210Trait {

    /**
     * Az4210.
     *
     * @var float
     */
    private $az4210;

    /**
     * Get the az4210.
     *
     * @return float Returns the az4210.
     */
    public function getAz4210() {
        return $this->az4210;
    }

    /**
     * Set the az4210.
     *
     * @param float $az4210 The az4210.
     */
    public function setAz4210($az4210) {
        $this->az4210 = $az4210;
        return $this;
    }
}
