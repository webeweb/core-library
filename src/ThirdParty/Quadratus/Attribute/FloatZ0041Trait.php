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
 * Z0041 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0041Trait {

    /**
     * Z0041.
     *
     * @var float
     */
    private $z0041;

    /**
     * Get the z0041.
     *
     * @return float Returns the z0041.
     */
    public function getZ0041() {
        return $this->z0041;
    }

    /**
     * Set the z0041.
     *
     * @param float $z0041 The z0041.
     */
    public function setZ0041($z0041) {
        $this->z0041 = $z0041;
        return $this;
    }
}
