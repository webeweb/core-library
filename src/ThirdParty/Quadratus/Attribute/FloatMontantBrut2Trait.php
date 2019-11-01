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
 * Montant brut2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBrut2Trait {

    /**
     * Montant brut2.
     *
     * @var float
     */
    private $montantBrut2;

    /**
     * Get the montant brut2.
     *
     * @return float Returns the montant brut2.
     */
    public function getMontantBrut2() {
        return $this->montantBrut2;
    }

    /**
     * Set the montant brut2.
     *
     * @param float $montantBrut2 The montant brut2.
     */
    public function setMontantBrut2($montantBrut2) {
        $this->montantBrut2 = $montantBrut2;
        return $this;
    }
}
