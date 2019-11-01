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
 * Z0950 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0950Trait {

    /**
     * Z0950.
     *
     * @var float
     */
    private $z0950;

    /**
     * Get the z0950.
     *
     * @return float Returns the z0950.
     */
    public function getZ0950() {
        return $this->z0950;
    }

    /**
     * Set the z0950.
     *
     * @param float $z0950 The z0950.
     */
    public function setZ0950($z0950) {
        $this->z0950 = $z0950;
        return $this;
    }
}
