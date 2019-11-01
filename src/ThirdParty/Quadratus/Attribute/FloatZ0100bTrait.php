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
 * Z0100b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0100bTrait {

    /**
     * Z0100b.
     *
     * @var float
     */
    private $z0100b;

    /**
     * Get the z0100b.
     *
     * @return float Returns the z0100b.
     */
    public function getZ0100b() {
        return $this->z0100b;
    }

    /**
     * Set the z0100b.
     *
     * @param float $z0100b The z0100b.
     */
    public function setZ0100b($z0100b) {
        $this->z0100b = $z0100b;
        return $this;
    }
}
