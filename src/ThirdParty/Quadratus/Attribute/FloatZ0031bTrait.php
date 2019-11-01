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
 * Z0031b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0031bTrait {

    /**
     * Z0031b.
     *
     * @var float
     */
    private $z0031b;

    /**
     * Get the z0031b.
     *
     * @return float Returns the z0031b.
     */
    public function getZ0031b() {
        return $this->z0031b;
    }

    /**
     * Set the z0031b.
     *
     * @param float $z0031b The z0031b.
     */
    public function setZ0031b($z0031b) {
        $this->z0031b = $z0031b;
        return $this;
    }
}
