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
 * Montant charges3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCharges3Trait {

    /**
     * Montant charges3.
     *
     * @var float
     */
    private $montantCharges3;

    /**
     * Get the montant charges3.
     *
     * @return float Returns the montant charges3.
     */
    public function getMontantCharges3() {
        return $this->montantCharges3;
    }

    /**
     * Set the montant charges3.
     *
     * @param float $montantCharges3 The montant charges3.
     */
    public function setMontantCharges3($montantCharges3) {
        $this->montantCharges3 = $montantCharges3;
        return $this;
    }
}
