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
 * Az4213 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4213Trait {

    /**
     * Az4213.
     *
     * @var float
     */
    private $az4213;

    /**
     * Get the az4213.
     *
     * @return float Returns the az4213.
     */
    public function getAz4213() {
        return $this->az4213;
    }

    /**
     * Set the az4213.
     *
     * @param float $az4213 The az4213.
     */
    public function setAz4213($az4213) {
        $this->az4213 = $az4213;
        return $this;
    }
}
