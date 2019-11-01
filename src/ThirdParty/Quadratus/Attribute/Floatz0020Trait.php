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
 * z0020 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0020Trait {

    /**
     * z0020.
     *
     * @var float
     */
    private $z0020;

    /**
     * Get the z0020.
     *
     * @return float Returns the z0020.
     */
    public function getz0020() {
        return $this->z0020;
    }

    /**
     * Set the z0020.
     *
     * @param float $z0020 The z0020.
     */
    public function setz0020($z0020) {
        $this->z0020 = $z0020;
        return $this;
    }
}
