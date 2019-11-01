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
 * Az4220 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4220Trait {

    /**
     * Az4220.
     *
     * @var float
     */
    private $az4220;

    /**
     * Get the az4220.
     *
     * @return float Returns the az4220.
     */
    public function getAz4220() {
        return $this->az4220;
    }

    /**
     * Set the az4220.
     *
     * @param float $az4220 The az4220.
     */
    public function setAz4220($az4220) {
        $this->az4220 = $az4220;
        return $this;
    }
}
