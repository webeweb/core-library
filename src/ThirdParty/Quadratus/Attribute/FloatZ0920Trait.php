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
 * Z0920 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0920Trait {

    /**
     * Z0920.
     *
     * @var float
     */
    private $z0920;

    /**
     * Get the z0920.
     *
     * @return float Returns the z0920.
     */
    public function getZ0920() {
        return $this->z0920;
    }

    /**
     * Set the z0920.
     *
     * @param float $z0920 The z0920.
     */
    public function setZ0920($z0920) {
        $this->z0920 = $z0920;
        return $this;
    }
}
