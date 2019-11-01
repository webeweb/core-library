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
 * Tot retenue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotRetenueTrait {

    /**
     * Tot retenue.
     *
     * @var float
     */
    private $totRetenue;

    /**
     * Get the tot retenue.
     *
     * @return float Returns the tot retenue.
     */
    public function getTotRetenue() {
        return $this->totRetenue;
    }

    /**
     * Set the tot retenue.
     *
     * @param float $totRetenue The tot retenue.
     */
    public function setTotRetenue($totRetenue) {
        $this->totRetenue = $totRetenue;
        return $this;
    }
}
