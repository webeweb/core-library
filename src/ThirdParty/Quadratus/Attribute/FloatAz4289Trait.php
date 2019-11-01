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
 * Az4289 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4289Trait {

    /**
     * Az4289.
     *
     * @var float
     */
    private $az4289;

    /**
     * Get the az4289.
     *
     * @return float Returns the az4289.
     */
    public function getAz4289() {
        return $this->az4289;
    }

    /**
     * Set the az4289.
     *
     * @param float $az4289 The az4289.
     */
    public function setAz4289($az4289) {
        $this->az4289 = $az4289;
        return $this;
    }
}
