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
 * z0970 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0970Trait {

    /**
     * z0970.
     *
     * @var float
     */
    private $z0970;

    /**
     * Get the z0970.
     *
     * @return float Returns the z0970.
     */
    public function getz0970() {
        return $this->z0970;
    }

    /**
     * Set the z0970.
     *
     * @param float $z0970 The z0970.
     */
    public function setz0970($z0970) {
        $this->z0970 = $z0970;
        return $this;
    }
}
