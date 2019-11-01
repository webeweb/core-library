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
 * z0028 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0028Trait {

    /**
     * z0028.
     *
     * @var float
     */
    private $z0028;

    /**
     * Get the z0028.
     *
     * @return float Returns the z0028.
     */
    public function getz0028() {
        return $this->z0028;
    }

    /**
     * Set the z0028.
     *
     * @param float $z0028 The z0028.
     */
    public function setz0028($z0028) {
        $this->z0028 = $z0028;
        return $this;
    }
}
