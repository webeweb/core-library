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
 * Z0121b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0121bTrait {

    /**
     * Z0121b.
     *
     * @var float
     */
    private $z0121b;

    /**
     * Get the z0121b.
     *
     * @return float Returns the z0121b.
     */
    public function getZ0121b() {
        return $this->z0121b;
    }

    /**
     * Set the z0121b.
     *
     * @param float $z0121b The z0121b.
     */
    public function setZ0121b($z0121b) {
        $this->z0121b = $z0121b;
        return $this;
    }
}
