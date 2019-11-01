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
 * Montant somme isol brut3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolBrut3Trait {

    /**
     * Montant somme isol brut3.
     *
     * @var float
     */
    private $montantSommeIsolBrut3;

    /**
     * Get the montant somme isol brut3.
     *
     * @return float Returns the montant somme isol brut3.
     */
    public function getMontantSommeIsolBrut3() {
        return $this->montantSommeIsolBrut3;
    }

    /**
     * Set the montant somme isol brut3.
     *
     * @param float $montantSommeIsolBrut3 The montant somme isol brut3.
     */
    public function setMontantSommeIsolBrut3($montantSommeIsolBrut3) {
        $this->montantSommeIsolBrut3 = $montantSommeIsolBrut3;
        return $this;
    }
}
