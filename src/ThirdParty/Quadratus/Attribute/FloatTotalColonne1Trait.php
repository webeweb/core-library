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
 * Total colonne1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalColonne1Trait {

    /**
     * Total colonne1.
     *
     * @var float
     */
    private $totalColonne1;

    /**
     * Get the total colonne1.
     *
     * @return float Returns the total colonne1.
     */
    public function getTotalColonne1() {
        return $this->totalColonne1;
    }

    /**
     * Set the total colonne1.
     *
     * @param float $totalColonne1 The total colonne1.
     */
    public function setTotalColonne1($totalColonne1) {
        $this->totalColonne1 = $totalColonne1;
        return $this;
    }
}
