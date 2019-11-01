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
 * Z0703 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0703Trait {

    /**
     * Z0703.
     *
     * @var float
     */
    private $z0703;

    /**
     * Get the z0703.
     *
     * @return float Returns the z0703.
     */
    public function getZ0703() {
        return $this->z0703;
    }

    /**
     * Set the z0703.
     *
     * @param float $z0703 The z0703.
     */
    public function setZ0703($z0703) {
        $this->z0703 = $z0703;
        return $this;
    }
}
