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
 * Az4270 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4270Trait {

    /**
     * Az4270.
     *
     * @var float
     */
    private $az4270;

    /**
     * Get the az4270.
     *
     * @return float Returns the az4270.
     */
    public function getAz4270() {
        return $this->az4270;
    }

    /**
     * Set the az4270.
     *
     * @param float $az4270 The az4270.
     */
    public function setAz4270($az4270) {
        $this->az4270 = $az4270;
        return $this;
    }
}
