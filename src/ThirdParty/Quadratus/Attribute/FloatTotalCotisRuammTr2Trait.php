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
 * Total cotis ruamm tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalCotisRuammTr2Trait {

    /**
     * Total cotis ruamm tr2.
     *
     * @var float
     */
    private $totalCotisRuammTr2;

    /**
     * Get the total cotis ruamm tr2.
     *
     * @return float Returns the total cotis ruamm tr2.
     */
    public function getTotalCotisRuammTr2() {
        return $this->totalCotisRuammTr2;
    }

    /**
     * Set the total cotis ruamm tr2.
     *
     * @param float $totalCotisRuammTr2 The total cotis ruamm tr2.
     */
    public function setTotalCotisRuammTr2($totalCotisRuammTr2) {
        $this->totalCotisRuammTr2 = $totalCotisRuammTr2;
        return $this;
    }
}
