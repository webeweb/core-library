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
 * Total cotis autre regime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalCotisAutreRegimeTrait {

    /**
     * Total cotis autre regime.
     *
     * @var float
     */
    private $totalCotisAutreRegime;

    /**
     * Get the total cotis autre regime.
     *
     * @return float Returns the total cotis autre regime.
     */
    public function getTotalCotisAutreRegime() {
        return $this->totalCotisAutreRegime;
    }

    /**
     * Set the total cotis autre regime.
     *
     * @param float $totalCotisAutreRegime The total cotis autre regime.
     */
    public function setTotalCotisAutreRegime($totalCotisAutreRegime) {
        $this->totalCotisAutreRegime = $totalCotisAutreRegime;
        return $this;
    }
}
