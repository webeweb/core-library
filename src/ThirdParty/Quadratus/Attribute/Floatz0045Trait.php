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
 * z0045 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0045Trait {

    /**
     * z0045.
     *
     * @var float
     */
    private $z0045;

    /**
     * Get the z0045.
     *
     * @return float Returns the z0045.
     */
    public function getz0045() {
        return $this->z0045;
    }

    /**
     * Set the z0045.
     *
     * @param float $z0045 The z0045.
     */
    public function setz0045($z0045) {
        $this->z0045 = $z0045;
        return $this;
    }
}
