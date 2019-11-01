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
 * Montant charges4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCharges4Trait {

    /**
     * Montant charges4.
     *
     * @var float
     */
    private $montantCharges4;

    /**
     * Get the montant charges4.
     *
     * @return float Returns the montant charges4.
     */
    public function getMontantCharges4() {
        return $this->montantCharges4;
    }

    /**
     * Set the montant charges4.
     *
     * @param float $montantCharges4 The montant charges4.
     */
    public function setMontantCharges4($montantCharges4) {
        $this->montantCharges4 = $montantCharges4;
        return $this;
    }
}
