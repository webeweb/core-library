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
 * Z8005 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ8005Trait {

    /**
     * Z8005.
     *
     * @var float
     */
    private $z8005;

    /**
     * Get the z8005.
     *
     * @return float Returns the z8005.
     */
    public function getZ8005() {
        return $this->z8005;
    }

    /**
     * Set the z8005.
     *
     * @param float $z8005 The z8005.
     */
    public function setZ8005($z8005) {
        $this->z8005 = $z8005;
        return $this;
    }
}
