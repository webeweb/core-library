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
 * Az4230 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4230Trait {

    /**
     * Az4230.
     *
     * @var float
     */
    private $az4230;

    /**
     * Get the az4230.
     *
     * @return float Returns the az4230.
     */
    public function getAz4230() {
        return $this->az4230;
    }

    /**
     * Set the az4230.
     *
     * @param float $az4230 The az4230.
     */
    public function setAz4230($az4230) {
        $this->az4230 = $az4230;
        return $this;
    }
}
