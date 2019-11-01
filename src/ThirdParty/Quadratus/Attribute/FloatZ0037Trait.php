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
 * Z0037 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0037Trait {

    /**
     * Z0037.
     *
     * @var float
     */
    private $z0037;

    /**
     * Get the z0037.
     *
     * @return float Returns the z0037.
     */
    public function getZ0037() {
        return $this->z0037;
    }

    /**
     * Set the z0037.
     *
     * @param float $z0037 The z0037.
     */
    public function setZ0037($z0037) {
        $this->z0037 = $z0037;
        return $this;
    }
}
