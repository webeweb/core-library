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
 * Z0033 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0033Trait {

    /**
     * Z0033.
     *
     * @var float
     */
    private $z0033;

    /**
     * Get the z0033.
     *
     * @return float Returns the z0033.
     */
    public function getZ0033() {
        return $this->z0033;
    }

    /**
     * Set the z0033.
     *
     * @param float $z0033 The z0033.
     */
    public function setZ0033($z0033) {
        $this->z0033 = $z0033;
        return $this;
    }
}
