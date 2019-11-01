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
 * z0018 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0018Trait {

    /**
     * z0018.
     *
     * @var float
     */
    private $z0018;

    /**
     * Get the z0018.
     *
     * @return float Returns the z0018.
     */
    public function getz0018() {
        return $this->z0018;
    }

    /**
     * Set the z0018.
     *
     * @param float $z0018 The z0018.
     */
    public function setz0018($z0018) {
        $this->z0018 = $z0018;
        return $this;
    }
}
