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
 * z0709 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0709Trait {

    /**
     * z0709.
     *
     * @var float
     */
    private $z0709;

    /**
     * Get the z0709.
     *
     * @return float Returns the z0709.
     */
    public function getz0709() {
        return $this->z0709;
    }

    /**
     * Set the z0709.
     *
     * @param float $z0709 The z0709.
     */
    public function setz0709($z0709) {
        $this->z0709 = $z0709;
        return $this;
    }
}
