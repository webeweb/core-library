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
 * Montant somme isol plaf2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolPlaf2Trait {

    /**
     * Montant somme isol plaf2.
     *
     * @var float
     */
    private $montantSommeIsolPlaf2;

    /**
     * Get the montant somme isol plaf2.
     *
     * @return float Returns the montant somme isol plaf2.
     */
    public function getMontantSommeIsolPlaf2() {
        return $this->montantSommeIsolPlaf2;
    }

    /**
     * Set the montant somme isol plaf2.
     *
     * @param float $montantSommeIsolPlaf2 The montant somme isol plaf2.
     */
    public function setMontantSommeIsolPlaf2($montantSommeIsolPlaf2) {
        $this->montantSommeIsolPlaf2 = $montantSommeIsolPlaf2;
        return $this;
    }
}
