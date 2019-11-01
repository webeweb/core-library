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
 * Z8003c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ8003cTrait {

    /**
     * Z8003c.
     *
     * @var float
     */
    private $z8003c;

    /**
     * Get the z8003c.
     *
     * @return float Returns the z8003c.
     */
    public function getZ8003c() {
        return $this->z8003c;
    }

    /**
     * Set the z8003c.
     *
     * @param float $z8003c The z8003c.
     */
    public function setZ8003c($z8003c) {
        $this->z8003c = $z8003c;
        return $this;
    }
}
