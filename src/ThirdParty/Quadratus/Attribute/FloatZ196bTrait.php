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
 * Z196b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ196bTrait {

    /**
     * Z196b.
     *
     * @var float
     */
    private $z196b;

    /**
     * Get the z196b.
     *
     * @return float Returns the z196b.
     */
    public function getZ196b() {
        return $this->z196b;
    }

    /**
     * Set the z196b.
     *
     * @param float $z196b The z196b.
     */
    public function setZ196b($z196b) {
        $this->z196b = $z196b;
        return $this;
    }
}
