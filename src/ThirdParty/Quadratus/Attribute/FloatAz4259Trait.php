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
 * Az4259 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4259Trait {

    /**
     * Az4259.
     *
     * @var float
     */
    private $az4259;

    /**
     * Get the az4259.
     *
     * @return float Returns the az4259.
     */
    public function getAz4259() {
        return $this->az4259;
    }

    /**
     * Set the az4259.
     *
     * @param float $az4259 The az4259.
     */
    public function setAz4259($az4259) {
        $this->az4259 = $az4259;
        return $this;
    }
}
