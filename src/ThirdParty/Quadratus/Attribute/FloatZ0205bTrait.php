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
 * Z0205b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0205bTrait {

    /**
     * Z0205b.
     *
     * @var float
     */
    private $z0205b;

    /**
     * Get the z0205b.
     *
     * @return float Returns the z0205b.
     */
    public function getZ0205b() {
        return $this->z0205b;
    }

    /**
     * Set the z0205b.
     *
     * @param float $z0205b The z0205b.
     */
    public function setZ0205b($z0205b) {
        $this->z0205b = $z0205b;
        return $this;
    }
}
