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
 * Z0200 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0200Trait {

    /**
     * Z0200.
     *
     * @var float
     */
    private $z0200;

    /**
     * Get the z0200.
     *
     * @return float Returns the z0200.
     */
    public function getZ0200() {
        return $this->z0200;
    }

    /**
     * Set the z0200.
     *
     * @param float $z0200 The z0200.
     */
    public function setZ0200($z0200) {
        $this->z0200 = $z0200;
        return $this;
    }
}
