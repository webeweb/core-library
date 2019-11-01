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
 * Az4209 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4209Trait {

    /**
     * Az4209.
     *
     * @var float
     */
    private $az4209;

    /**
     * Get the az4209.
     *
     * @return float Returns the az4209.
     */
    public function getAz4209() {
        return $this->az4209;
    }

    /**
     * Set the az4209.
     *
     * @param float $az4209 The az4209.
     */
    public function setAz4209($az4209) {
        $this->az4209 = $az4209;
        return $this;
    }
}
