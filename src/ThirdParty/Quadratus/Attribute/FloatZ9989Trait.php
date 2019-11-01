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
 * Z9989 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ9989Trait {

    /**
     * Z9989.
     *
     * @var float
     */
    private $z9989;

    /**
     * Get the z9989.
     *
     * @return float Returns the z9989.
     */
    public function getZ9989() {
        return $this->z9989;
    }

    /**
     * Set the z9989.
     *
     * @param float $z9989 The z9989.
     */
    public function setZ9989($z9989) {
        $this->z9989 = $z9989;
        return $this;
    }
}
