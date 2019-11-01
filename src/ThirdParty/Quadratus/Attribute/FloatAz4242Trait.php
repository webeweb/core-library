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
 * Az4242 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4242Trait {

    /**
     * Az4242.
     *
     * @var float
     */
    private $az4242;

    /**
     * Get the az4242.
     *
     * @return float Returns the az4242.
     */
    public function getAz4242() {
        return $this->az4242;
    }

    /**
     * Set the az4242.
     *
     * @param float $az4242 The az4242.
     */
    public function setAz4242($az4242) {
        $this->az4242 = $az4242;
        return $this;
    }
}
