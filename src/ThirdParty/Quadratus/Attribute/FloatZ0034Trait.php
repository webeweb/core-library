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
 * Z0034 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0034Trait {

    /**
     * Z0034.
     *
     * @var float
     */
    private $z0034;

    /**
     * Get the z0034.
     *
     * @return float Returns the z0034.
     */
    public function getZ0034() {
        return $this->z0034;
    }

    /**
     * Set the z0034.
     *
     * @param float $z0034 The z0034.
     */
    public function setZ0034($z0034) {
        $this->z0034 = $z0034;
        return $this;
    }
}
