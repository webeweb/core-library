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
 * Z0038 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0038Trait {

    /**
     * Z0038.
     *
     * @var float
     */
    private $z0038;

    /**
     * Get the z0038.
     *
     * @return float Returns the z0038.
     */
    public function getZ0038() {
        return $this->z0038;
    }

    /**
     * Set the z0038.
     *
     * @param float $z0038 The z0038.
     */
    public function setZ0038($z0038) {
        $this->z0038 = $z0038;
        return $this;
    }
}
