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
 * Z196 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ196Trait {

    /**
     * Z196.
     *
     * @var float
     */
    private $z196;

    /**
     * Get the z196.
     *
     * @return float Returns the z196.
     */
    public function getZ196() {
        return $this->z196;
    }

    /**
     * Set the z196.
     *
     * @param float $z196 The z196.
     */
    public function setZ196($z196) {
        $this->z196 = $z196;
        return $this;
    }
}
