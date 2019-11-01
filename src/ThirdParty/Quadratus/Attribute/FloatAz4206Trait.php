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
 * Az4206 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4206Trait {

    /**
     * Az4206.
     *
     * @var float
     */
    private $az4206;

    /**
     * Get the az4206.
     *
     * @return float Returns the az4206.
     */
    public function getAz4206() {
        return $this->az4206;
    }

    /**
     * Set the az4206.
     *
     * @param float $az4206 The az4206.
     */
    public function setAz4206($az4206) {
        $this->az4206 = $az4206;
        return $this;
    }
}
