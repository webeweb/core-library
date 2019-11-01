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
 * Az1050 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1050Trait {

    /**
     * Az1050.
     *
     * @var float
     */
    private $az1050;

    /**
     * Get the az1050.
     *
     * @return float Returns the az1050.
     */
    public function getAz1050() {
        return $this->az1050;
    }

    /**
     * Set the az1050.
     *
     * @param float $az1050 The az1050.
     */
    public function setAz1050($az1050) {
        $this->az1050 = $az1050;
        return $this;
    }
}
