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
 * Montant brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBrutTrait {

    /**
     * Montant brut.
     *
     * @var float
     */
    private $montantBrut;

    /**
     * Get the montant brut.
     *
     * @return float Returns the montant brut.
     */
    public function getMontantBrut() {
        return $this->montantBrut;
    }

    /**
     * Set the montant brut.
     *
     * @param float $montantBrut The montant brut.
     */
    public function setMontantBrut($montantBrut) {
        $this->montantBrut = $montantBrut;
        return $this;
    }
}
