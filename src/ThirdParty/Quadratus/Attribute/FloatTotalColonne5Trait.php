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
 * Total colonne5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalColonne5Trait {

    /**
     * Total colonne5.
     *
     * @var float
     */
    private $totalColonne5;

    /**
     * Get the total colonne5.
     *
     * @return float Returns the total colonne5.
     */
    public function getTotalColonne5() {
        return $this->totalColonne5;
    }

    /**
     * Set the total colonne5.
     *
     * @param float $totalColonne5 The total colonne5.
     */
    public function setTotalColonne5($totalColonne5) {
        $this->totalColonne5 = $totalColonne5;
        return $this;
    }
}
