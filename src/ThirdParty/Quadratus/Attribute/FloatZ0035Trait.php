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
 * Z0035 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0035Trait {

    /**
     * Z0035.
     *
     * @var float
     */
    private $z0035;

    /**
     * Get the z0035.
     *
     * @return float Returns the z0035.
     */
    public function getZ0035() {
        return $this->z0035;
    }

    /**
     * Set the z0035.
     *
     * @param float $z0035 The z0035.
     */
    public function setZ0035($z0035) {
        $this->z0035 = $z0035;
        return $this;
    }
}
