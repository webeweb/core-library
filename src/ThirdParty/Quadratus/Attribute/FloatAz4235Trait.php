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
 * Az4235 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4235Trait {

    /**
     * Az4235.
     *
     * @var float
     */
    private $az4235;

    /**
     * Get the az4235.
     *
     * @return float Returns the az4235.
     */
    public function getAz4235() {
        return $this->az4235;
    }

    /**
     * Set the az4235.
     *
     * @param float $az4235 The az4235.
     */
    public function setAz4235($az4235) {
        $this->az4235 = $az4235;
        return $this;
    }
}
