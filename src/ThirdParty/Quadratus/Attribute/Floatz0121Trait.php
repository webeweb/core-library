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
 * z0121 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0121Trait {

    /**
     * z0121.
     *
     * @var float
     */
    private $z0121;

    /**
     * Get the z0121.
     *
     * @return float Returns the z0121.
     */
    public function getz0121() {
        return $this->z0121;
    }

    /**
     * Set the z0121.
     *
     * @param float $z0121 The z0121.
     */
    public function setz0121($z0121) {
        $this->z0121 = $z0121;
        return $this;
    }
}
