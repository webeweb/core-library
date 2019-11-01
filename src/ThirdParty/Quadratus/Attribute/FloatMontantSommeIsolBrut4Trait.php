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
 * Montant somme isol brut4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolBrut4Trait {

    /**
     * Montant somme isol brut4.
     *
     * @var float
     */
    private $montantSommeIsolBrut4;

    /**
     * Get the montant somme isol brut4.
     *
     * @return float Returns the montant somme isol brut4.
     */
    public function getMontantSommeIsolBrut4() {
        return $this->montantSommeIsolBrut4;
    }

    /**
     * Set the montant somme isol brut4.
     *
     * @param float $montantSommeIsolBrut4 The montant somme isol brut4.
     */
    public function setMontantSommeIsolBrut4($montantSommeIsolBrut4) {
        $this->montantSommeIsolBrut4 = $montantSommeIsolBrut4;
        return $this;
    }
}
