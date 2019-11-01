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
 * Az4279 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4279Trait {

    /**
     * Az4279.
     *
     * @var float
     */
    private $az4279;

    /**
     * Get the az4279.
     *
     * @return float Returns the az4279.
     */
    public function getAz4279() {
        return $this->az4279;
    }

    /**
     * Set the az4279.
     *
     * @param float $az4279 The az4279.
     */
    public function setAz4279($az4279) {
        $this->az4279 = $az4279;
        return $this;
    }
}
