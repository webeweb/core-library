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
 * Total salaire autre regime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalSalaireAutreRegimeTrait {

    /**
     * Total salaire autre regime.
     *
     * @var float
     */
    private $totalSalaireAutreRegime;

    /**
     * Get the total salaire autre regime.
     *
     * @return float Returns the total salaire autre regime.
     */
    public function getTotalSalaireAutreRegime() {
        return $this->totalSalaireAutreRegime;
    }

    /**
     * Set the total salaire autre regime.
     *
     * @param float $totalSalaireAutreRegime The total salaire autre regime.
     */
    public function setTotalSalaireAutreRegime($totalSalaireAutreRegime) {
        $this->totalSalaireAutreRegime = $totalSalaireAutreRegime;
        return $this;
    }
}
