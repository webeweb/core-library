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
 * Az4200 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4200Trait {

    /**
     * Az4200.
     *
     * @var float
     */
    private $az4200;

    /**
     * Get the az4200.
     *
     * @return float Returns the az4200.
     */
    public function getAz4200() {
        return $this->az4200;
    }

    /**
     * Set the az4200.
     *
     * @param float $az4200 The az4200.
     */
    public function setAz4200($az4200) {
        $this->az4200 = $az4200;
        return $this;
    }
}
