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
 * Z0900 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0900Trait {

    /**
     * Z0900.
     *
     * @var float
     */
    private $z0900;

    /**
     * Get the z0900.
     *
     * @return float Returns the z0900.
     */
    public function getZ0900() {
        return $this->z0900;
    }

    /**
     * Set the z0900.
     *
     * @param float $z0900 The z0900.
     */
    public function setZ0900($z0900) {
        $this->z0900 = $z0900;
        return $this;
    }
}
