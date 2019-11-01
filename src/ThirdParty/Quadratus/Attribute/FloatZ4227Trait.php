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
 * Z4227 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ4227Trait {

    /**
     * Z4227.
     *
     * @var float
     */
    private $z4227;

    /**
     * Get the z4227.
     *
     * @return float Returns the z4227.
     */
    public function getZ4227() {
        return $this->z4227;
    }

    /**
     * Set the z4227.
     *
     * @param float $z4227 The z4227.
     */
    public function setZ4227($z4227) {
        $this->z4227 = $z4227;
        return $this;
    }
}
