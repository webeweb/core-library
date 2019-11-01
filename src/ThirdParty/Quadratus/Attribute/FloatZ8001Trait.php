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
 * Z8001 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ8001Trait {

    /**
     * Z8001.
     *
     * @var float
     */
    private $z8001;

    /**
     * Get the z8001.
     *
     * @return float Returns the z8001.
     */
    public function getZ8001() {
        return $this->z8001;
    }

    /**
     * Set the z8001.
     *
     * @param float $z8001 The z8001.
     */
    public function setZ8001($z8001) {
        $this->z8001 = $z8001;
        return $this;
    }
}
