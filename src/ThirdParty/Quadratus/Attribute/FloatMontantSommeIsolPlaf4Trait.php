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
 * Montant somme isol plaf4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolPlaf4Trait {

    /**
     * Montant somme isol plaf4.
     *
     * @var float
     */
    private $montantSommeIsolPlaf4;

    /**
     * Get the montant somme isol plaf4.
     *
     * @return float Returns the montant somme isol plaf4.
     */
    public function getMontantSommeIsolPlaf4() {
        return $this->montantSommeIsolPlaf4;
    }

    /**
     * Set the montant somme isol plaf4.
     *
     * @param float $montantSommeIsolPlaf4 The montant somme isol plaf4.
     */
    public function setMontantSommeIsolPlaf4($montantSommeIsolPlaf4) {
        $this->montantSommeIsolPlaf4 = $montantSommeIsolPlaf4;
        return $this;
    }
}
