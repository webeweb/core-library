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
 * Montant somme isol plaf5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolPlaf5Trait {

    /**
     * Montant somme isol plaf5.
     *
     * @var float
     */
    private $montantSommeIsolPlaf5;

    /**
     * Get the montant somme isol plaf5.
     *
     * @return float Returns the montant somme isol plaf5.
     */
    public function getMontantSommeIsolPlaf5() {
        return $this->montantSommeIsolPlaf5;
    }

    /**
     * Set the montant somme isol plaf5.
     *
     * @param float $montantSommeIsolPlaf5 The montant somme isol plaf5.
     */
    public function setMontantSommeIsolPlaf5($montantSommeIsolPlaf5) {
        $this->montantSommeIsolPlaf5 = $montantSommeIsolPlaf5;
        return $this;
    }
}
