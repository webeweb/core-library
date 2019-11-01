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
 * Montant charges2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCharges2Trait {

    /**
     * Montant charges2.
     *
     * @var float
     */
    private $montantCharges2;

    /**
     * Get the montant charges2.
     *
     * @return float Returns the montant charges2.
     */
    public function getMontantCharges2() {
        return $this->montantCharges2;
    }

    /**
     * Set the montant charges2.
     *
     * @param float $montantCharges2 The montant charges2.
     */
    public function setMontantCharges2($montantCharges2) {
        $this->montantCharges2 = $montantCharges2;
        return $this;
    }
}
