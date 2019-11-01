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
 * z0008 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0008Trait {

    /**
     * z0008.
     *
     * @var float
     */
    private $z0008;

    /**
     * Get the z0008.
     *
     * @return float Returns the z0008.
     */
    public function getz0008() {
        return $this->z0008;
    }

    /**
     * Set the z0008.
     *
     * @param float $z0008 The z0008.
     */
    public function setz0008($z0008) {
        $this->z0008 = $z0008;
        return $this;
    }
}
