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
 * Montant smic retenu3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSmicRetenu3Trait {

    /**
     * Montant smic retenu3.
     *
     * @var float
     */
    private $montantSmicRetenu3;

    /**
     * Get the montant smic retenu3.
     *
     * @return float Returns the montant smic retenu3.
     */
    public function getMontantSmicRetenu3() {
        return $this->montantSmicRetenu3;
    }

    /**
     * Set the montant smic retenu3.
     *
     * @param float $montantSmicRetenu3 The montant smic retenu3.
     */
    public function setMontantSmicRetenu3($montantSmicRetenu3) {
        $this->montantSmicRetenu3 = $montantSmicRetenu3;
        return $this;
    }
}
