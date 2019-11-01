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
 * Total colonne4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalColonne4Trait {

    /**
     * Total colonne4.
     *
     * @var float
     */
    private $totalColonne4;

    /**
     * Get the total colonne4.
     *
     * @return float Returns the total colonne4.
     */
    public function getTotalColonne4() {
        return $this->totalColonne4;
    }

    /**
     * Set the total colonne4.
     *
     * @param float $totalColonne4 The total colonne4.
     */
    public function setTotalColonne4($totalColonne4) {
        $this->totalColonne4 = $totalColonne4;
        return $this;
    }
}
