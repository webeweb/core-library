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
 * z0151 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0151Trait {

    /**
     * z0151.
     *
     * @var float
     */
    private $z0151;

    /**
     * Get the z0151.
     *
     * @return float Returns the z0151.
     */
    public function getz0151() {
        return $this->z0151;
    }

    /**
     * Set the z0151.
     *
     * @param float $z0151 The z0151.
     */
    public function setz0151($z0151) {
        $this->z0151 = $z0151;
        return $this;
    }
}
