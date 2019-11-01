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
 * Az3240 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz3240Trait {

    /**
     * Az3240.
     *
     * @var float
     */
    private $az3240;

    /**
     * Get the az3240.
     *
     * @return float Returns the az3240.
     */
    public function getAz3240() {
        return $this->az3240;
    }

    /**
     * Set the az3240.
     *
     * @param float $az3240 The az3240.
     */
    public function setAz3240($az3240) {
        $this->az3240 = $az3240;
        return $this;
    }
}
