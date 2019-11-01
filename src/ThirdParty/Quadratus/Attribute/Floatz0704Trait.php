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
 * z0704 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0704Trait {

    /**
     * z0704.
     *
     * @var float
     */
    private $z0704;

    /**
     * Get the z0704.
     *
     * @return float Returns the z0704.
     */
    public function getz0704() {
        return $this->z0704;
    }

    /**
     * Set the z0704.
     *
     * @param float $z0704 The z0704.
     */
    public function setz0704($z0704) {
        $this->z0704 = $z0704;
        return $this;
    }
}
