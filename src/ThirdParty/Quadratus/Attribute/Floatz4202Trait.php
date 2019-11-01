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
 * z4202 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4202Trait {

    /**
     * z4202.
     *
     * @var float
     */
    private $z4202;

    /**
     * Get the z4202.
     *
     * @return float Returns the z4202.
     */
    public function getz4202() {
        return $this->z4202;
    }

    /**
     * Set the z4202.
     *
     * @param float $z4202 The z4202.
     */
    public function setz4202($z4202) {
        $this->z4202 = $z4202;
        return $this;
    }
}
