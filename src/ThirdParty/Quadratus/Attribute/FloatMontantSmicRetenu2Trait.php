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
 * Montant smic retenu2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSmicRetenu2Trait {

    /**
     * Montant smic retenu2.
     *
     * @var float
     */
    private $montantSmicRetenu2;

    /**
     * Get the montant smic retenu2.
     *
     * @return float Returns the montant smic retenu2.
     */
    public function getMontantSmicRetenu2() {
        return $this->montantSmicRetenu2;
    }

    /**
     * Set the montant smic retenu2.
     *
     * @param float $montantSmicRetenu2 The montant smic retenu2.
     */
    public function setMontantSmicRetenu2($montantSmicRetenu2) {
        $this->montantSmicRetenu2 = $montantSmicRetenu2;
        return $this;
    }
}
