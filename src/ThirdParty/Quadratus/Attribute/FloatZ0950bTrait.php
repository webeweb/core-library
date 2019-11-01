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
 * Z0950b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0950bTrait {

    /**
     * Z0950b.
     *
     * @var float
     */
    private $z0950b;

    /**
     * Get the z0950b.
     *
     * @return float Returns the z0950b.
     */
    public function getZ0950b() {
        return $this->z0950b;
    }

    /**
     * Set the z0950b.
     *
     * @param float $z0950b The z0950b.
     */
    public function setZ0950b($z0950b) {
        $this->z0950b = $z0950b;
        return $this;
    }
}
