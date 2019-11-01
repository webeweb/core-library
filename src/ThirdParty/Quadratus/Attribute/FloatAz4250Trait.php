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
 * Az4250 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4250Trait {

    /**
     * Az4250.
     *
     * @var float
     */
    private $az4250;

    /**
     * Get the az4250.
     *
     * @return float Returns the az4250.
     */
    public function getAz4250() {
        return $this->az4250;
    }

    /**
     * Set the az4250.
     *
     * @param float $az4250 The az4250.
     */
    public function setAz4250($az4250) {
        $this->az4250 = $az4250;
        return $this;
    }
}
