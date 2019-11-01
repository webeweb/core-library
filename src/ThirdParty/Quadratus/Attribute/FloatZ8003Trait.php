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
 * Z8003 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ8003Trait {

    /**
     * Z8003.
     *
     * @var float
     */
    private $z8003;

    /**
     * Get the z8003.
     *
     * @return float Returns the z8003.
     */
    public function getZ8003() {
        return $this->z8003;
    }

    /**
     * Set the z8003.
     *
     * @param float $z8003 The z8003.
     */
    public function setZ8003($z8003) {
        $this->z8003 = $z8003;
        return $this;
    }
}
