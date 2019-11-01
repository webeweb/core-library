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
 * Az4233 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4233Trait {

    /**
     * Az4233.
     *
     * @var float
     */
    private $az4233;

    /**
     * Get the az4233.
     *
     * @return float Returns the az4233.
     */
    public function getAz4233() {
        return $this->az4233;
    }

    /**
     * Set the az4233.
     *
     * @param float $az4233 The az4233.
     */
    public function setAz4233($az4233) {
        $this->az4233 = $az4233;
        return $this;
    }
}
