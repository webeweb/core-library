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
 * Montant somme isol brut5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolBrut5Trait {

    /**
     * Montant somme isol brut5.
     *
     * @var float
     */
    private $montantSommeIsolBrut5;

    /**
     * Get the montant somme isol brut5.
     *
     * @return float Returns the montant somme isol brut5.
     */
    public function getMontantSommeIsolBrut5() {
        return $this->montantSommeIsolBrut5;
    }

    /**
     * Set the montant somme isol brut5.
     *
     * @param float $montantSommeIsolBrut5 The montant somme isol brut5.
     */
    public function setMontantSommeIsolBrut5($montantSommeIsolBrut5) {
        $this->montantSommeIsolBrut5 = $montantSommeIsolBrut5;
        return $this;
    }
}
