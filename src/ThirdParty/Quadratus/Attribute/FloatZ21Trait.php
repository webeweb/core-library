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
 * Z21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ21Trait {

    /**
     * Z21.
     *
     * @var float
     */
    private $z21;

    /**
     * Get the z21.
     *
     * @return float Returns the z21.
     */
    public function getZ21() {
        return $this->z21;
    }

    /**
     * Set the z21.
     *
     * @param float $z21 The z21.
     */
    public function setZ21($z21) {
        $this->z21 = $z21;
        return $this;
    }
}
