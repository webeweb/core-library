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
 * Montant brut4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBrut4Trait {

    /**
     * Montant brut4.
     *
     * @var float
     */
    private $montantBrut4;

    /**
     * Get the montant brut4.
     *
     * @return float Returns the montant brut4.
     */
    public function getMontantBrut4() {
        return $this->montantBrut4;
    }

    /**
     * Set the montant brut4.
     *
     * @param float $montantBrut4 The montant brut4.
     */
    public function setMontantBrut4($montantBrut4) {
        $this->montantBrut4 = $montantBrut4;
        return $this;
    }
}
