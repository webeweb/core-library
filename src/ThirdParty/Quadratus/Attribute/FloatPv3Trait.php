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
 * Pv3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPv3Trait {

    /**
     * Pv3.
     *
     * @var float
     */
    private $pv3;

    /**
     * Get the pv3.
     *
     * @return float Returns the pv3.
     */
    public function getPv3() {
        return $this->pv3;
    }

    /**
     * Set the pv3.
     *
     * @param float $pv3 The pv3.
     */
    public function setPv3($pv3) {
        $this->pv3 = $pv3;
        return $this;
    }
}
