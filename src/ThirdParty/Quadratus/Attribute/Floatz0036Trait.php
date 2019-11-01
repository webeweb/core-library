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
 * z0036 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0036Trait {

    /**
     * z0036.
     *
     * @var float
     */
    private $z0036;

    /**
     * Get the z0036.
     *
     * @return float Returns the z0036.
     */
    public function getz0036() {
        return $this->z0036;
    }

    /**
     * Set the z0036.
     *
     * @param float $z0036 The z0036.
     */
    public function setz0036($z0036) {
        $this->z0036 = $z0036;
        return $this;
    }
}
