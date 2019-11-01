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
 * Z01 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ01Trait {

    /**
     * Z01.
     *
     * @var float
     */
    private $z01;

    /**
     * Get the z01.
     *
     * @return float Returns the z01.
     */
    public function getZ01() {
        return $this->z01;
    }

    /**
     * Set the z01.
     *
     * @param float $z01 The z01.
     */
    public function setZ01($z01) {
        $this->z01 = $z01;
        return $this;
    }
}
