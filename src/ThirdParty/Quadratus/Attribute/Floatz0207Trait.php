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
 * z0207 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0207Trait {

    /**
     * z0207.
     *
     * @var float
     */
    private $z0207;

    /**
     * Get the z0207.
     *
     * @return float Returns the z0207.
     */
    public function getz0207() {
        return $this->z0207;
    }

    /**
     * Set the z0207.
     *
     * @param float $z0207 The z0207.
     */
    public function setz0207($z0207) {
        $this->z0207 = $z0207;
        return $this;
    }
}
