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
 * Montant salarial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSalarialTrait {

    /**
     * Montant salarial.
     *
     * @var float
     */
    private $montantSalarial;

    /**
     * Get the montant salarial.
     *
     * @return float Returns the montant salarial.
     */
    public function getMontantSalarial() {
        return $this->montantSalarial;
    }

    /**
     * Set the montant salarial.
     *
     * @param float $montantSalarial The montant salarial.
     */
    public function setMontantSalarial($montantSalarial) {
        $this->montantSalarial = $montantSalarial;
        return $this;
    }
}
