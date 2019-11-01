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
 * Az1040 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1040Trait {

    /**
     * Az1040.
     *
     * @var float
     */
    private $az1040;

    /**
     * Get the az1040.
     *
     * @return float Returns the az1040.
     */
    public function getAz1040() {
        return $this->az1040;
    }

    /**
     * Set the az1040.
     *
     * @param float $az1040 The az1040.
     */
    public function setAz1040($az1040) {
        $this->az1040 = $az1040;
        return $this;
    }
}
