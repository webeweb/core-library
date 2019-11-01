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
 * z0981 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0981Trait {

    /**
     * z0981.
     *
     * @var float
     */
    private $z0981;

    /**
     * Get the z0981.
     *
     * @return float Returns the z0981.
     */
    public function getz0981() {
        return $this->z0981;
    }

    /**
     * Set the z0981.
     *
     * @param float $z0981 The z0981.
     */
    public function setz0981($z0981) {
        $this->z0981 = $z0981;
        return $this;
    }
}
