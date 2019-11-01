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
 * Montant somme isol plaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSommeIsolPlafTrait {

    /**
     * Montant somme isol plaf.
     *
     * @var float
     */
    private $montantSommeIsolPlaf;

    /**
     * Get the montant somme isol plaf.
     *
     * @return float Returns the montant somme isol plaf.
     */
    public function getMontantSommeIsolPlaf() {
        return $this->montantSommeIsolPlaf;
    }

    /**
     * Set the montant somme isol plaf.
     *
     * @param float $montantSommeIsolPlaf The montant somme isol plaf.
     */
    public function setMontantSommeIsolPlaf($montantSommeIsolPlaf) {
        $this->montantSommeIsolPlaf = $montantSommeIsolPlaf;
        return $this;
    }
}
