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
 * Montant somme isol plaf3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolPlaf3Trait {

    /**
     * Montant somme isol plaf3.
     *
     * @var float
     */
    private $montantSommeIsolPlaf3;

    /**
     * Get the montant somme isol plaf3.
     *
     * @return float Returns the montant somme isol plaf3.
     */
    public function getMontantSommeIsolPlaf3() {
        return $this->montantSommeIsolPlaf3;
    }

    /**
     * Set the montant somme isol plaf3.
     *
     * @param float $montantSommeIsolPlaf3 The montant somme isol plaf3.
     */
    public function setMontantSommeIsolPlaf3($montantSommeIsolPlaf3) {
        $this->montantSommeIsolPlaf3 = $montantSommeIsolPlaf3;
        return $this;
    }
}
