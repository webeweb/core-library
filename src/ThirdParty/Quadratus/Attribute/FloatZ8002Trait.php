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
 * Z8002 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ8002Trait {

    /**
     * Z8002.
     *
     * @var float
     */
    private $z8002;

    /**
     * Get the z8002.
     *
     * @return float Returns the z8002.
     */
    public function getZ8002() {
        return $this->z8002;
    }

    /**
     * Set the z8002.
     *
     * @param float $z8002 The z8002.
     */
    public function setZ8002($z8002) {
        $this->z8002 = $z8002;
        return $this;
    }
}
