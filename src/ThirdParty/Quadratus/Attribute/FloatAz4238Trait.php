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
 * Az4238 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4238Trait {

    /**
     * Az4238.
     *
     * @var float
     */
    private $az4238;

    /**
     * Get the az4238.
     *
     * @return float Returns the az4238.
     */
    public function getAz4238() {
        return $this->az4238;
    }

    /**
     * Set the az4238.
     *
     * @param float $az4238 The az4238.
     */
    public function setAz4238($az4238) {
        $this->az4238 = $az4238;
        return $this;
    }
}
