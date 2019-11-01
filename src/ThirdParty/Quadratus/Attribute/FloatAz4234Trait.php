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
 * Az4234 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4234Trait {

    /**
     * Az4234.
     *
     * @var float
     */
    private $az4234;

    /**
     * Get the az4234.
     *
     * @return float Returns the az4234.
     */
    public function getAz4234() {
        return $this->az4234;
    }

    /**
     * Set the az4234.
     *
     * @param float $az4234 The az4234.
     */
    public function setAz4234($az4234) {
        $this->az4234 = $az4234;
        return $this;
    }
}
