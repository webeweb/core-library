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
 * z8004 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz8004Trait {

    /**
     * z8004.
     *
     * @var float
     */
    private $z8004;

    /**
     * Get the z8004.
     *
     * @return float Returns the z8004.
     */
    public function getz8004() {
        return $this->z8004;
    }

    /**
     * Set the z8004.
     *
     * @param float $z8004 The z8004.
     */
    public function setz8004($z8004) {
        $this->z8004 = $z8004;
        return $this;
    }
}
