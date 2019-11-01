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
 * Az4224 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4224Trait {

    /**
     * Az4224.
     *
     * @var float
     */
    private $az4224;

    /**
     * Get the az4224.
     *
     * @return float Returns the az4224.
     */
    public function getAz4224() {
        return $this->az4224;
    }

    /**
     * Set the az4224.
     *
     * @param float $az4224 The az4224.
     */
    public function setAz4224($az4224) {
        $this->az4224 = $az4224;
        return $this;
    }
}
