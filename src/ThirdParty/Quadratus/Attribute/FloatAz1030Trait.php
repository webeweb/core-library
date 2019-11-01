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
 * Az1030 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1030Trait {

    /**
     * Az1030.
     *
     * @var float
     */
    private $az1030;

    /**
     * Get the az1030.
     *
     * @return float Returns the az1030.
     */
    public function getAz1030() {
        return $this->az1030;
    }

    /**
     * Set the az1030.
     *
     * @param float $az1030 The az1030.
     */
    public function setAz1030($az1030) {
        $this->az1030 = $az1030;
        return $this;
    }
}
