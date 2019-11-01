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
 * Az4271 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4271Trait {

    /**
     * Az4271.
     *
     * @var float
     */
    private $az4271;

    /**
     * Get the az4271.
     *
     * @return float Returns the az4271.
     */
    public function getAz4271() {
        return $this->az4271;
    }

    /**
     * Set the az4271.
     *
     * @param float $az4271 The az4271.
     */
    public function setAz4271($az4271) {
        $this->az4271 = $az4271;
        return $this;
    }
}
