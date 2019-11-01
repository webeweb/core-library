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
 * Montant assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAssuranceTrait {

    /**
     * Montant assurance.
     *
     * @var float
     */
    private $montantAssurance;

    /**
     * Get the montant assurance.
     *
     * @return float Returns the montant assurance.
     */
    public function getMontantAssurance() {
        return $this->montantAssurance;
    }

    /**
     * Set the montant assurance.
     *
     * @param float $montantAssurance The montant assurance.
     */
    public function setMontantAssurance($montantAssurance) {
        $this->montantAssurance = $montantAssurance;
        return $this;
    }
}
