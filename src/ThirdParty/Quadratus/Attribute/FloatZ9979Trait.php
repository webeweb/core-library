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
 * Z9979 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ9979Trait {

    /**
     * Z9979.
     *
     * @var float
     */
    private $z9979;

    /**
     * Get the z9979.
     *
     * @return float Returns the z9979.
     */
    public function getZ9979() {
        return $this->z9979;
    }

    /**
     * Set the z9979.
     *
     * @param float $z9979 The z9979.
     */
    public function setZ9979($z9979) {
        $this->z9979 = $z9979;
        return $this;
    }
}
