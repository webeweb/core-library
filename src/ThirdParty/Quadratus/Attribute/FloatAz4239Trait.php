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
 * Az4239 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4239Trait {

    /**
     * Az4239.
     *
     * @var float
     */
    private $az4239;

    /**
     * Get the az4239.
     *
     * @return float Returns the az4239.
     */
    public function getAz4239() {
        return $this->az4239;
    }

    /**
     * Set the az4239.
     *
     * @param float $az4239 The az4239.
     */
    public function setAz4239($az4239) {
        $this->az4239 = $az4239;
        return $this;
    }
}
