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
 * z0982 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0982Trait {

    /**
     * z0982.
     *
     * @var float
     */
    private $z0982;

    /**
     * Get the z0982.
     *
     * @return float Returns the z0982.
     */
    public function getz0982() {
        return $this->z0982;
    }

    /**
     * Set the z0982.
     *
     * @param float $z0982 The z0982.
     */
    public function setz0982($z0982) {
        $this->z0982 = $z0982;
        return $this;
    }
}
