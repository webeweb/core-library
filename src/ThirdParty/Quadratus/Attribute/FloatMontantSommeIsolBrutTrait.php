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
 * Montant somme isol brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolBrutTrait {

    /**
     * Montant somme isol brut.
     *
     * @var float
     */
    private $montantSommeIsolBrut;

    /**
     * Get the montant somme isol brut.
     *
     * @return float Returns the montant somme isol brut.
     */
    public function getMontantSommeIsolBrut() {
        return $this->montantSommeIsolBrut;
    }

    /**
     * Set the montant somme isol brut.
     *
     * @param float $montantSommeIsolBrut The montant somme isol brut.
     */
    public function setMontantSommeIsolBrut($montantSommeIsolBrut) {
        $this->montantSommeIsolBrut = $montantSommeIsolBrut;
        return $this;
    }
}
