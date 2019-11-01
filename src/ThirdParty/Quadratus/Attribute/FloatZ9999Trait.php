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
 * Z9999 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ9999Trait {

    /**
     * Z9999.
     *
     * @var float
     */
    private $z9999;

    /**
     * Get the z9999.
     *
     * @return float Returns the z9999.
     */
    public function getZ9999() {
        return $this->z9999;
    }

    /**
     * Set the z9999.
     *
     * @param float $z9999 The z9999.
     */
    public function setZ9999($z9999) {
        $this->z9999 = $z9999;
        return $this;
    }
}
