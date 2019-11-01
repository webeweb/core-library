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
 * Z0701 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0701Trait {

    /**
     * Z0701.
     *
     * @var float
     */
    private $z0701;

    /**
     * Get the z0701.
     *
     * @return float Returns the z0701.
     */
    public function getZ0701() {
        return $this->z0701;
    }

    /**
     * Set the z0701.
     *
     * @param float $z0701 The z0701.
     */
    public function setZ0701($z0701) {
        $this->z0701 = $z0701;
        return $this;
    }
}
