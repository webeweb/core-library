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
 * Az4276 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4276Trait {

    /**
     * Az4276.
     *
     * @var float
     */
    private $az4276;

    /**
     * Get the az4276.
     *
     * @return float Returns the az4276.
     */
    public function getAz4276() {
        return $this->az4276;
    }

    /**
     * Set the az4276.
     *
     * @param float $az4276 The az4276.
     */
    public function setAz4276($az4276) {
        $this->az4276 = $az4276;
        return $this;
    }
}
