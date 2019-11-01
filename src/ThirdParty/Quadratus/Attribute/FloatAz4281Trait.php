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
 * Az4281 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4281Trait {

    /**
     * Az4281.
     *
     * @var float
     */
    private $az4281;

    /**
     * Get the az4281.
     *
     * @return float Returns the az4281.
     */
    public function getAz4281() {
        return $this->az4281;
    }

    /**
     * Set the az4281.
     *
     * @param float $az4281 The az4281.
     */
    public function setAz4281($az4281) {
        $this->az4281 = $az4281;
        return $this;
    }
}
