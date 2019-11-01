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
 * Total salaire ccs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalSalaireCcsTrait {

    /**
     * Total salaire ccs.
     *
     * @var float
     */
    private $totalSalaireCcs;

    /**
     * Get the total salaire ccs.
     *
     * @return float Returns the total salaire ccs.
     */
    public function getTotalSalaireCcs() {
        return $this->totalSalaireCcs;
    }

    /**
     * Set the total salaire ccs.
     *
     * @param float $totalSalaireCcs The total salaire ccs.
     */
    public function setTotalSalaireCcs($totalSalaireCcs) {
        $this->totalSalaireCcs = $totalSalaireCcs;
        return $this;
    }
}
