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
 * Total cotis ccs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalCotisCcsTrait {

    /**
     * Total cotis ccs.
     *
     * @var float
     */
    private $totalCotisCcs;

    /**
     * Get the total cotis ccs.
     *
     * @return float Returns the total cotis ccs.
     */
    public function getTotalCotisCcs() {
        return $this->totalCotisCcs;
    }

    /**
     * Set the total cotis ccs.
     *
     * @param float $totalCotisCcs The total cotis ccs.
     */
    public function setTotalCotisCcs($totalCotisCcs) {
        $this->totalCotisCcs = $totalCotisCcs;
        return $this;
    }
}
