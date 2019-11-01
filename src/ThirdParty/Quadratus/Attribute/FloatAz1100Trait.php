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
 * Az1100 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1100Trait {

    /**
     * Az1100.
     *
     * @var float
     */
    private $az1100;

    /**
     * Get the az1100.
     *
     * @return float Returns the az1100.
     */
    public function getAz1100() {
        return $this->az1100;
    }

    /**
     * Set the az1100.
     *
     * @param float $az1100 The az1100.
     */
    public function setAz1100($az1100) {
        $this->az1100 = $az1100;
        return $this;
    }
}
