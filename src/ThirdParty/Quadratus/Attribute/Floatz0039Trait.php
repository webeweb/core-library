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
 * z0039 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0039Trait {

    /**
     * z0039.
     *
     * @var float
     */
    private $z0039;

    /**
     * Get the z0039.
     *
     * @return float Returns the z0039.
     */
    public function getz0039() {
        return $this->z0039;
    }

    /**
     * Set the z0039.
     *
     * @param float $z0039 The z0039.
     */
    public function setz0039($z0039) {
        $this->z0039 = $z0039;
        return $this;
    }
}
