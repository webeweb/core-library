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
 * Z0600 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0600Trait {

    /**
     * Z0600.
     *
     * @var float
     */
    private $z0600;

    /**
     * Get the z0600.
     *
     * @return float Returns the z0600.
     */
    public function getZ0600() {
        return $this->z0600;
    }

    /**
     * Set the z0600.
     *
     * @param float $z0600 The z0600.
     */
    public function setZ0600($z0600) {
        $this->z0600 = $z0600;
        return $this;
    }
}
