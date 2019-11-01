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
 * Az4246 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4246Trait {

    /**
     * Az4246.
     *
     * @var float
     */
    private $az4246;

    /**
     * Get the az4246.
     *
     * @return float Returns the az4246.
     */
    public function getAz4246() {
        return $this->az4246;
    }

    /**
     * Set the az4246.
     *
     * @param float $az4246 The az4246.
     */
    public function setAz4246($az4246) {
        $this->az4246 = $az4246;
        return $this;
    }
}
