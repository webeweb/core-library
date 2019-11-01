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
 * Montant4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontant4Trait {

    /**
     * Montant4.
     *
     * @var float
     */
    private $montant4;

    /**
     * Get the montant4.
     *
     * @return float Returns the montant4.
     */
    public function getMontant4() {
        return $this->montant4;
    }

    /**
     * Set the montant4.
     *
     * @param float $montant4 The montant4.
     */
    public function setMontant4($montant4) {
        $this->montant4 = $montant4;
        return $this;
    }
}
