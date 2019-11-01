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
 * Az4255 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4255Trait {

    /**
     * Az4255.
     *
     * @var float
     */
    private $az4255;

    /**
     * Get the az4255.
     *
     * @return float Returns the az4255.
     */
    public function getAz4255() {
        return $this->az4255;
    }

    /**
     * Set the az4255.
     *
     * @param float $az4255 The az4255.
     */
    public function setAz4255($az4255) {
        $this->az4255 = $az4255;
        return $this;
    }
}
