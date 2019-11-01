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
 * z4213 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4213Trait {

    /**
     * z4213.
     *
     * @var float
     */
    private $z4213;

    /**
     * Get the z4213.
     *
     * @return float Returns the z4213.
     */
    public function getz4213() {
        return $this->z4213;
    }

    /**
     * Set the z4213.
     *
     * @param float $z4213 The z4213.
     */
    public function setz4213($z4213) {
        $this->z4213 = $z4213;
        return $this;
    }
}
