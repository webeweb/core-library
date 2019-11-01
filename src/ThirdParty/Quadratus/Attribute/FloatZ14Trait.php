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
 * Z14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ14Trait {

    /**
     * Z14.
     *
     * @var float
     */
    private $z14;

    /**
     * Get the z14.
     *
     * @return float Returns the z14.
     */
    public function getZ14() {
        return $this->z14;
    }

    /**
     * Set the z14.
     *
     * @param float $z14 The z14.
     */
    public function setZ14($z14) {
        $this->z14 = $z14;
        return $this;
    }
}
