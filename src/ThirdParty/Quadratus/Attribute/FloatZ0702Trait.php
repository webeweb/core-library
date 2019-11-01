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
 * Z0702 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0702Trait {

    /**
     * Z0702.
     *
     * @var float
     */
    private $z0702;

    /**
     * Get the z0702.
     *
     * @return float Returns the z0702.
     */
    public function getZ0702() {
        return $this->z0702;
    }

    /**
     * Set the z0702.
     *
     * @param float $z0702 The z0702.
     */
    public function setZ0702($z0702) {
        $this->z0702 = $z0702;
        return $this;
    }
}
