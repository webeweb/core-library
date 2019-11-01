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
 * Z18 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ18Trait {

    /**
     * Z18.
     *
     * @var float
     */
    private $z18;

    /**
     * Get the z18.
     *
     * @return float Returns the z18.
     */
    public function getZ18() {
        return $this->z18;
    }

    /**
     * Set the z18.
     *
     * @param float $z18 The z18.
     */
    public function setZ18($z18) {
        $this->z18 = $z18;
        return $this;
    }
}
