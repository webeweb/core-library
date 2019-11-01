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
 * Az3510 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz3510Trait {

    /**
     * Az3510.
     *
     * @var float
     */
    private $az3510;

    /**
     * Get the az3510.
     *
     * @return float Returns the az3510.
     */
    public function getAz3510() {
        return $this->az3510;
    }

    /**
     * Set the az3510.
     *
     * @param float $az3510 The az3510.
     */
    public function setAz3510($az3510) {
        $this->az3510 = $az3510;
        return $this;
    }
}
