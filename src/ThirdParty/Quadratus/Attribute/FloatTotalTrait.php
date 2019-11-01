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
 * Total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalTrait {

    /**
     * Total.
     *
     * @var float
     */
    private $total;

    /**
     * Get the total.
     *
     * @return float Returns the total.
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Set the total.
     *
     * @param float $total The total.
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }
}
