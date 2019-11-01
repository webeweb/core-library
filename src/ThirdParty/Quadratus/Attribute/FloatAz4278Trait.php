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
 * Az4278 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4278Trait {

    /**
     * Az4278.
     *
     * @var float
     */
    private $az4278;

    /**
     * Get the az4278.
     *
     * @return float Returns the az4278.
     */
    public function getAz4278() {
        return $this->az4278;
    }

    /**
     * Set the az4278.
     *
     * @param float $az4278 The az4278.
     */
    public function setAz4278($az4278) {
        $this->az4278 = $az4278;
        return $this;
    }
}
