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
 * Az3910 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz3910Trait {

    /**
     * Az3910.
     *
     * @var float
     */
    private $az3910;

    /**
     * Get the az3910.
     *
     * @return float Returns the az3910.
     */
    public function getAz3910() {
        return $this->az3910;
    }

    /**
     * Set the az3910.
     *
     * @param float $az3910 The az3910.
     */
    public function setAz3910($az3910) {
        $this->az3910 = $az3910;
        return $this;
    }
}
