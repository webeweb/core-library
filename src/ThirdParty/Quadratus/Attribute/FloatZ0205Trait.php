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
 * Z0205 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0205Trait {

    /**
     * Z0205.
     *
     * @var float
     */
    private $z0205;

    /**
     * Get the z0205.
     *
     * @return float Returns the z0205.
     */
    public function getZ0205() {
        return $this->z0205;
    }

    /**
     * Set the z0205.
     *
     * @param float $z0205 The z0205.
     */
    public function setZ0205($z0205) {
        $this->z0205 = $z0205;
        return $this;
    }
}
