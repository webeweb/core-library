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
 * Z0031 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0031Trait {

    /**
     * Z0031.
     *
     * @var float
     */
    private $z0031;

    /**
     * Get the z0031.
     *
     * @return float Returns the z0031.
     */
    public function getZ0031() {
        return $this->z0031;
    }

    /**
     * Set the z0031.
     *
     * @param float $z0031 The z0031.
     */
    public function setZ0031($z0031) {
        $this->z0031 = $z0031;
        return $this;
    }
}
