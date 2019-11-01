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
 * Az4258 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4258Trait {

    /**
     * Az4258.
     *
     * @var float
     */
    private $az4258;

    /**
     * Get the az4258.
     *
     * @return float Returns the az4258.
     */
    public function getAz4258() {
        return $this->az4258;
    }

    /**
     * Set the az4258.
     *
     * @param float $az4258 The az4258.
     */
    public function setAz4258($az4258) {
        $this->az4258 = $az4258;
        return $this;
    }
}
