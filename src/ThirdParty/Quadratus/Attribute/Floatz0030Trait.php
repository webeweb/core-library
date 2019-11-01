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
 * z0030 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0030Trait {

    /**
     * z0030.
     *
     * @var float
     */
    private $z0030;

    /**
     * Get the z0030.
     *
     * @return float Returns the z0030.
     */
    public function getz0030() {
        return $this->z0030;
    }

    /**
     * Set the z0030.
     *
     * @param float $z0030 The z0030.
     */
    public function setz0030($z0030) {
        $this->z0030 = $z0030;
        return $this;
    }
}
