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
 * Z0032 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0032Trait {

    /**
     * Z0032.
     *
     * @var float
     */
    private $z0032;

    /**
     * Get the z0032.
     *
     * @return float Returns the z0032.
     */
    public function getZ0032() {
        return $this->z0032;
    }

    /**
     * Set the z0032.
     *
     * @param float $z0032 The z0032.
     */
    public function setZ0032($z0032) {
        $this->z0032 = $z0032;
        return $this;
    }
}
