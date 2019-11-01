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
 * Montant charges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantChargesTrait {

    /**
     * Montant charges.
     *
     * @var float
     */
    private $montantCharges;

    /**
     * Get the montant charges.
     *
     * @return float Returns the montant charges.
     */
    public function getMontantCharges() {
        return $this->montantCharges;
    }

    /**
     * Set the montant charges.
     *
     * @param float $montantCharges The montant charges.
     */
    public function setMontantCharges($montantCharges) {
        $this->montantCharges = $montantCharges;
        return $this;
    }
}
