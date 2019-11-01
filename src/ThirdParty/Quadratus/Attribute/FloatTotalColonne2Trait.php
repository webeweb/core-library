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
 * Total colonne2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalColonne2Trait {

    /**
     * Total colonne2.
     *
     * @var float
     */
    private $totalColonne2;

    /**
     * Get the total colonne2.
     *
     * @return float Returns the total colonne2.
     */
    public function getTotalColonne2() {
        return $this->totalColonne2;
    }

    /**
     * Set the total colonne2.
     *
     * @param float $totalColonne2 The total colonne2.
     */
    public function setTotalColonne2($totalColonne2) {
        $this->totalColonne2 = $totalColonne2;
        return $this;
    }
}
