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
 * Z0040 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0040Trait {

    /**
     * Z0040.
     *
     * @var float
     */
    private $z0040;

    /**
     * Get the z0040.
     *
     * @return float Returns the z0040.
     */
    public function getZ0040() {
        return $this->z0040;
    }

    /**
     * Set the z0040.
     *
     * @param float $z0040 The z0040.
     */
    public function setZ0040($z0040) {
        $this->z0040 = $z0040;
        return $this;
    }
}
