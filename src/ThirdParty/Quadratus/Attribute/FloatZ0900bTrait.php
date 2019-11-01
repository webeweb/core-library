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
 * Z0900b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0900bTrait {

    /**
     * Z0900b.
     *
     * @var float
     */
    private $z0900b;

    /**
     * Get the z0900b.
     *
     * @return float Returns the z0900b.
     */
    public function getZ0900b() {
        return $this->z0900b;
    }

    /**
     * Set the z0900b.
     *
     * @param float $z0900b The z0900b.
     */
    public function setZ0900b($z0900b) {
        $this->z0900b = $z0900b;
        return $this;
    }
}
