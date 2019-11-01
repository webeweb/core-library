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
 * Z0100 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0100Trait {

    /**
     * Z0100.
     *
     * @var float
     */
    private $z0100;

    /**
     * Get the z0100.
     *
     * @return float Returns the z0100.
     */
    public function getZ0100() {
        return $this->z0100;
    }

    /**
     * Set the z0100.
     *
     * @param float $z0100 The z0100.
     */
    public function setZ0100($z0100) {
        $this->z0100 = $z0100;
        return $this;
    }
}
