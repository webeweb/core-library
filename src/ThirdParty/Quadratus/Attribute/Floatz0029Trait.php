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
 * z0029 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0029Trait {

    /**
     * z0029.
     *
     * @var float
     */
    private $z0029;

    /**
     * Get the z0029.
     *
     * @return float Returns the z0029.
     */
    public function getz0029() {
        return $this->z0029;
    }

    /**
     * Set the z0029.
     *
     * @param float $z0029 The z0029.
     */
    public function setz0029($z0029) {
        $this->z0029 = $z0029;
        return $this;
    }
}
