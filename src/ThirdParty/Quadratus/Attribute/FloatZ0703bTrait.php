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
 * Z0703b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0703bTrait {

    /**
     * Z0703b.
     *
     * @var float
     */
    private $z0703b;

    /**
     * Get the z0703b.
     *
     * @return float Returns the z0703b.
     */
    public function getZ0703b() {
        return $this->z0703b;
    }

    /**
     * Set the z0703b.
     *
     * @param float $z0703b The z0703b.
     */
    public function setZ0703b($z0703b) {
        $this->z0703b = $z0703b;
        return $this;
    }
}
