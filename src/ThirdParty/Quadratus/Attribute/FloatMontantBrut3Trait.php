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
 * Montant brut3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBrut3Trait {

    /**
     * Montant brut3.
     *
     * @var float
     */
    private $montantBrut3;

    /**
     * Get the montant brut3.
     *
     * @return float Returns the montant brut3.
     */
    public function getMontantBrut3() {
        return $this->montantBrut3;
    }

    /**
     * Set the montant brut3.
     *
     * @param float $montantBrut3 The montant brut3.
     */
    public function setMontantBrut3($montantBrut3) {
        $this->montantBrut3 = $montantBrut3;
        return $this;
    }
}
