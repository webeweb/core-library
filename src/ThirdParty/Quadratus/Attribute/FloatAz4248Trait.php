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
 * Az4248 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4248Trait {

    /**
     * Az4248.
     *
     * @var float
     */
    private $az4248;

    /**
     * Get the az4248.
     *
     * @return float Returns the az4248.
     */
    public function getAz4248() {
        return $this->az4248;
    }

    /**
     * Set the az4248.
     *
     * @param float $az4248 The az4248.
     */
    public function setAz4248($az4248) {
        $this->az4248 = $az4248;
        return $this;
    }
}
