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
 * Total colonne3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalColonne3Trait {

    /**
     * Total colonne3.
     *
     * @var float
     */
    private $totalColonne3;

    /**
     * Get the total colonne3.
     *
     * @return float Returns the total colonne3.
     */
    public function getTotalColonne3() {
        return $this->totalColonne3;
    }

    /**
     * Set the total colonne3.
     *
     * @param float $totalColonne3 The total colonne3.
     */
    public function setTotalColonne3($totalColonne3) {
        $this->totalColonne3 = $totalColonne3;
        return $this;
    }
}
