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
 * Double3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble3Trait {

    /**
     * Double3.
     *
     * @var float
     */
    private $double3;

    /**
     * Get the double3.
     *
     * @return float Returns the double3.
     */
    public function getDouble3() {
        return $this->double3;
    }

    /**
     * Set the double3.
     *
     * @param float $double3 The double3.
     */
    public function setDouble3($double3) {
        $this->double3 = $double3;
        return $this;
    }
}
