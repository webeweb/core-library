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
 * z0980 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0980Trait {

    /**
     * z0980.
     *
     * @var float
     */
    private $z0980;

    /**
     * Get the z0980.
     *
     * @return float Returns the z0980.
     */
    public function getz0980() {
        return $this->z0980;
    }

    /**
     * Set the z0980.
     *
     * @param float $z0980 The z0980.
     */
    public function setz0980($z0980) {
        $this->z0980 = $z0980;
        return $this;
    }
}
