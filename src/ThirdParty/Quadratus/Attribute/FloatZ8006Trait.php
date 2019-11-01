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
 * Z8006 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ8006Trait {

    /**
     * Z8006.
     *
     * @var float
     */
    private $z8006;

    /**
     * Get the z8006.
     *
     * @return float Returns the z8006.
     */
    public function getZ8006() {
        return $this->z8006;
    }

    /**
     * Set the z8006.
     *
     * @param float $z8006 The z8006.
     */
    public function setZ8006($z8006) {
        $this->z8006 = $z8006;
        return $this;
    }
}
