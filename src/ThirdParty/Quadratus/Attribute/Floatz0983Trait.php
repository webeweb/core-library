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
 * z0983 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0983Trait {

    /**
     * z0983.
     *
     * @var float
     */
    private $z0983;

    /**
     * Get the z0983.
     *
     * @return float Returns the z0983.
     */
    public function getz0983() {
        return $this->z0983;
    }

    /**
     * Set the z0983.
     *
     * @param float $z0983 The z0983.
     */
    public function setz0983($z0983) {
        $this->z0983 = $z0983;
        return $this;
    }
}
