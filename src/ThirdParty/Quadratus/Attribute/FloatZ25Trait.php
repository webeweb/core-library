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
 * Z25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ25Trait {

    /**
     * Z25.
     *
     * @var float
     */
    private $z25;

    /**
     * Get the z25.
     *
     * @return float Returns the z25.
     */
    public function getZ25() {
        return $this->z25;
    }

    /**
     * Set the z25.
     *
     * @param float $z25 The z25.
     */
    public function setZ25($z25) {
        $this->z25 = $z25;
        return $this;
    }
}
