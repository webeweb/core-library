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
 * Az4280 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4280Trait {

    /**
     * Az4280.
     *
     * @var float
     */
    private $az4280;

    /**
     * Get the az4280.
     *
     * @return float Returns the az4280.
     */
    public function getAz4280() {
        return $this->az4280;
    }

    /**
     * Set the az4280.
     *
     * @param float $az4280 The az4280.
     */
    public function setAz4280($az4280) {
        $this->az4280 = $az4280;
        return $this;
    }
}
