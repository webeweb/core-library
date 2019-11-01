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
 * Az4256 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4256Trait {

    /**
     * Az4256.
     *
     * @var float
     */
    private $az4256;

    /**
     * Get the az4256.
     *
     * @return float Returns the az4256.
     */
    public function getAz4256() {
        return $this->az4256;
    }

    /**
     * Set the az4256.
     *
     * @param float $az4256 The az4256.
     */
    public function setAz4256($az4256) {
        $this->az4256 = $az4256;
        return $this;
    }
}
