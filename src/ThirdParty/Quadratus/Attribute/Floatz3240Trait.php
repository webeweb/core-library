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
 * z3240 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz3240Trait {

    /**
     * z3240.
     *
     * @var float
     */
    private $z3240;

    /**
     * Get the z3240.
     *
     * @return float Returns the z3240.
     */
    public function getz3240() {
        return $this->z3240;
    }

    /**
     * Set the z3240.
     *
     * @param float $z3240 The z3240.
     */
    public function setz3240($z3240) {
        $this->z3240 = $z3240;
        return $this;
    }
}
