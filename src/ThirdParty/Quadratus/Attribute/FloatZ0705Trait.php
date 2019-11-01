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
 * Z0705 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0705Trait {

    /**
     * Z0705.
     *
     * @var float
     */
    private $z0705;

    /**
     * Get the z0705.
     *
     * @return float Returns the z0705.
     */
    public function getZ0705() {
        return $this->z0705;
    }

    /**
     * Set the z0705.
     *
     * @param float $z0705 The z0705.
     */
    public function setZ0705($z0705) {
        $this->z0705 = $z0705;
        return $this;
    }
}
