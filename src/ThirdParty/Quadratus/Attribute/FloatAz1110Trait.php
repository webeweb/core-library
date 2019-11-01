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
 * Az1110 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz1110Trait {

    /**
     * Az1110.
     *
     * @var float
     */
    private $az1110;

    /**
     * Get the az1110.
     *
     * @return float Returns the az1110.
     */
    public function getAz1110() {
        return $this->az1110;
    }

    /**
     * Set the az1110.
     *
     * @param float $az1110 The az1110.
     */
    public function setAz1110($az1110) {
        $this->az1110 = $az1110;
        return $this;
    }
}
