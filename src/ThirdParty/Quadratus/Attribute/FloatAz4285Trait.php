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
 * Az4285 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4285Trait {

    /**
     * Az4285.
     *
     * @var float
     */
    private $az4285;

    /**
     * Get the az4285.
     *
     * @return float Returns the az4285.
     */
    public function getAz4285() {
        return $this->az4285;
    }

    /**
     * Set the az4285.
     *
     * @param float $az4285 The az4285.
     */
    public function setAz4285($az4285) {
        $this->az4285 = $az4285;
        return $this;
    }
}
