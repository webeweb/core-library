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
 * z4 bca12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4Bca12Trait {

    /**
     * z4 bca12.
     *
     * @var float
     */
    private $z4Bca12;

    /**
     * Get the z4 bca12.
     *
     * @return float Returns the z4 bca12.
     */
    public function getz4Bca12() {
        return $this->z4Bca12;
    }

    /**
     * Set the z4 bca12.
     *
     * @param float $z4Bca12 The z4 bca12.
     */
    public function setz4Bca12($z4Bca12) {
        $this->z4Bca12 = $z4Bca12;
        return $this;
    }
}
