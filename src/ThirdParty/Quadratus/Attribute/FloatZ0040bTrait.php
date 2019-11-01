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
 * Z0040b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0040bTrait {

    /**
     * Z0040b.
     *
     * @var float
     */
    private $z0040b;

    /**
     * Get the z0040b.
     *
     * @return float Returns the z0040b.
     */
    public function getZ0040b() {
        return $this->z0040b;
    }

    /**
     * Set the z0040b.
     *
     * @param float $z0040b The z0040b.
     */
    public function setZ0040b($z0040b) {
        $this->z0040b = $z0040b;
        return $this;
    }
}
