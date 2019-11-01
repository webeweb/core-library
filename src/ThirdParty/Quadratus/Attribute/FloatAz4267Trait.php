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
 * Az4267 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4267Trait {

    /**
     * Az4267.
     *
     * @var float
     */
    private $az4267;

    /**
     * Get the az4267.
     *
     * @return float Returns the az4267.
     */
    public function getAz4267() {
        return $this->az4267;
    }

    /**
     * Set the az4267.
     *
     * @param float $az4267 The az4267.
     */
    public function setAz4267($az4267) {
        $this->az4267 = $az4267;
        return $this;
    }
}
