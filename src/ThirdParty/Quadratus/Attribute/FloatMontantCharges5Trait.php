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
 * Montant charges5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCharges5Trait {

    /**
     * Montant charges5.
     *
     * @var float
     */
    private $montantCharges5;

    /**
     * Get the montant charges5.
     *
     * @return float Returns the montant charges5.
     */
    public function getMontantCharges5() {
        return $this->montantCharges5;
    }

    /**
     * Set the montant charges5.
     *
     * @param float $montantCharges5 The montant charges5.
     */
    public function setMontantCharges5($montantCharges5) {
        $this->montantCharges5 = $montantCharges5;
        return $this;
    }
}
