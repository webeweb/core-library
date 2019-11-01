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
 * Az1120 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1120Trait {

    /**
     * Az1120.
     *
     * @var float
     */
    private $az1120;

    /**
     * Get the az1120.
     *
     * @return float Returns the az1120.
     */
    public function getAz1120() {
        return $this->az1120;
    }

    /**
     * Set the az1120.
     *
     * @param float $az1120 The az1120.
     */
    public function setAz1120($az1120) {
        $this->az1120 = $az1120;
        return $this;
    }
}
