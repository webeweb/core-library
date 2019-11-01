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
 * z4217 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4217Trait {

    /**
     * z4217.
     *
     * @var float
     */
    private $z4217;

    /**
     * Get the z4217.
     *
     * @return float Returns the z4217.
     */
    public function getz4217() {
        return $this->z4217;
    }

    /**
     * Set the z4217.
     *
     * @param float $z4217 The z4217.
     */
    public function setz4217($z4217) {
        $this->z4217 = $z4217;
        return $this;
    }
}
