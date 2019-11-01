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
 * Montant brut5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBrut5Trait {

    /**
     * Montant brut5.
     *
     * @var float
     */
    private $montantBrut5;

    /**
     * Get the montant brut5.
     *
     * @return float Returns the montant brut5.
     */
    public function getMontantBrut5() {
        return $this->montantBrut5;
    }

    /**
     * Set the montant brut5.
     *
     * @param float $montantBrut5 The montant brut5.
     */
    public function setMontantBrut5($montantBrut5) {
        $this->montantBrut5 = $montantBrut5;
        return $this;
    }
}
