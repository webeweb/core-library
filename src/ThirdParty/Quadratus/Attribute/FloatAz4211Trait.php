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
 * Az4211 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4211Trait {

    /**
     * Az4211.
     *
     * @var float
     */
    private $az4211;

    /**
     * Get the az4211.
     *
     * @return float Returns the az4211.
     */
    public function getAz4211() {
        return $this->az4211;
    }

    /**
     * Set the az4211.
     *
     * @param float $az4211 The az4211.
     */
    public function setAz4211($az4211) {
        $this->az4211 = $az4211;
        return $this;
    }
}
