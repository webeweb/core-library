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
 * Pv2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPv2Trait {

    /**
     * Pv2.
     *
     * @var float
     */
    private $pv2;

    /**
     * Get the pv2.
     *
     * @return float Returns the pv2.
     */
    public function getPv2() {
        return $this->pv2;
    }

    /**
     * Set the pv2.
     *
     * @param float $pv2 The pv2.
     */
    public function setPv2($pv2) {
        $this->pv2 = $pv2;
        return $this;
    }
}
