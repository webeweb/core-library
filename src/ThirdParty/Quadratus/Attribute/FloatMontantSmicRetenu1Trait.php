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
 * Montant smic retenu1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSmicRetenu1Trait {

    /**
     * Montant smic retenu1.
     *
     * @var float
     */
    private $montantSmicRetenu1;

    /**
     * Get the montant smic retenu1.
     *
     * @return float Returns the montant smic retenu1.
     */
    public function getMontantSmicRetenu1() {
        return $this->montantSmicRetenu1;
    }

    /**
     * Set the montant smic retenu1.
     *
     * @param float $montantSmicRetenu1 The montant smic retenu1.
     */
    public function setMontantSmicRetenu1($montantSmicRetenu1) {
        $this->montantSmicRetenu1 = $montantSmicRetenu1;
        return $this;
    }
}
