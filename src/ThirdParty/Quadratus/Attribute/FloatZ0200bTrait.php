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
 * Z0200b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0200bTrait {

    /**
     * Z0200b.
     *
     * @var float
     */
    private $z0200b;

    /**
     * Get the z0200b.
     *
     * @return float Returns the z0200b.
     */
    public function getZ0200b() {
        return $this->z0200b;
    }

    /**
     * Set the z0200b.
     *
     * @param float $z0200b The z0200b.
     */
    public function setZ0200b($z0200b) {
        $this->z0200b = $z0200b;
        return $this;
    }
}
