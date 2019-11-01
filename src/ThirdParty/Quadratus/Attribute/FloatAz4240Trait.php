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
 * Az4240 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4240Trait {

    /**
     * Az4240.
     *
     * @var float
     */
    private $az4240;

    /**
     * Get the az4240.
     *
     * @return float Returns the az4240.
     */
    public function getAz4240() {
        return $this->az4240;
    }

    /**
     * Set the az4240.
     *
     * @param float $az4240 The az4240.
     */
    public function setAz4240($az4240) {
        $this->az4240 = $az4240;
        return $this;
    }
}
