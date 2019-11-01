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
 * Az4252 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4252Trait {

    /**
     * Az4252.
     *
     * @var float
     */
    private $az4252;

    /**
     * Get the az4252.
     *
     * @return float Returns the az4252.
     */
    public function getAz4252() {
        return $this->az4252;
    }

    /**
     * Set the az4252.
     *
     * @param float $az4252 The az4252.
     */
    public function setAz4252($az4252) {
        $this->az4252 = $az4252;
        return $this;
    }
}
