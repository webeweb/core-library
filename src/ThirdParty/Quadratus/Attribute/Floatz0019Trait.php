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
 * z0019 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0019Trait {

    /**
     * z0019.
     *
     * @var float
     */
    private $z0019;

    /**
     * Get the z0019.
     *
     * @return float Returns the z0019.
     */
    public function getz0019() {
        return $this->z0019;
    }

    /**
     * Set the z0019.
     *
     * @param float $z0019 The z0019.
     */
    public function setz0019($z0019) {
        $this->z0019 = $z0019;
        return $this;
    }
}
