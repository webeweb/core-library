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
 * Habs2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHabs2Trait {

    /**
     * Habs2.
     *
     * @var float
     */
    private $habs2;

    /**
     * Get the habs2.
     *
     * @return float Returns the habs2.
     */
    public function getHabs2() {
        return $this->habs2;
    }

    /**
     * Set the habs2.
     *
     * @param float $habs2 The habs2.
     */
    public function setHabs2($habs2) {
        $this->habs2 = $habs2;
        return $this;
    }
}
