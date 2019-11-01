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
 * Montant somme isol brut2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolBrut2Trait {

    /**
     * Montant somme isol brut2.
     *
     * @var float
     */
    private $montantSommeIsolBrut2;

    /**
     * Get the montant somme isol brut2.
     *
     * @return float Returns the montant somme isol brut2.
     */
    public function getMontantSommeIsolBrut2() {
        return $this->montantSommeIsolBrut2;
    }

    /**
     * Set the montant somme isol brut2.
     *
     * @param float $montantSommeIsolBrut2 The montant somme isol brut2.
     */
    public function setMontantSommeIsolBrut2($montantSommeIsolBrut2) {
        $this->montantSommeIsolBrut2 = $montantSommeIsolBrut2;
        return $this;
    }
}
