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
 * z0044 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0044Trait {

    /**
     * z0044.
     *
     * @var float
     */
    private $z0044;

    /**
     * Get the z0044.
     *
     * @return float Returns the z0044.
     */
    public function getz0044() {
        return $this->z0044;
    }

    /**
     * Set the z0044.
     *
     * @param float $z0044 The z0044.
     */
    public function setz0044($z0044) {
        $this->z0044 = $z0044;
        return $this;
    }
}
