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
 * Total ruamm tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalRuammTr2Trait {

    /**
     * Total ruamm tr2.
     *
     * @var float
     */
    private $totalRuammTr2;

    /**
     * Get the total ruamm tr2.
     *
     * @return float Returns the total ruamm tr2.
     */
    public function getTotalRuammTr2() {
        return $this->totalRuammTr2;
    }

    /**
     * Set the total ruamm tr2.
     *
     * @param float $totalRuammTr2 The total ruamm tr2.
     */
    public function setTotalRuammTr2($totalRuammTr2) {
        $this->totalRuammTr2 = $totalRuammTr2;
        return $this;
    }
}
