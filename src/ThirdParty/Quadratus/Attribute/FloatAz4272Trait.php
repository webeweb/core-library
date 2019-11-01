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
 * Az4272 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4272Trait {

    /**
     * Az4272.
     *
     * @var float
     */
    private $az4272;

    /**
     * Get the az4272.
     *
     * @return float Returns the az4272.
     */
    public function getAz4272() {
        return $this->az4272;
    }

    /**
     * Set the az4272.
     *
     * @param float $az4272 The az4272.
     */
    public function setAz4272($az4272) {
        $this->az4272 = $az4272;
        return $this;
    }
}
