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
 * Az1010 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1010Trait {

    /**
     * Az1010.
     *
     * @var float
     */
    private $az1010;

    /**
     * Get the az1010.
     *
     * @return float Returns the az1010.
     */
    public function getAz1010() {
        return $this->az1010;
    }

    /**
     * Set the az1010.
     *
     * @param float $az1010 The az1010.
     */
    public function setAz1010($az1010) {
        $this->az1010 = $az1010;
        return $this;
    }
}
