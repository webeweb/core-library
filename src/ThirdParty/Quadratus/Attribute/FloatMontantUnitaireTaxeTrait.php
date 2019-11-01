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
 * Montant unitaire taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantUnitaireTaxeTrait {

    /**
     * Montant unitaire taxe.
     *
     * @var float
     */
    private $montantUnitaireTaxe;

    /**
     * Get the montant unitaire taxe.
     *
     * @return float Returns the montant unitaire taxe.
     */
    public function getMontantUnitaireTaxe() {
        return $this->montantUnitaireTaxe;
    }

    /**
     * Set the montant unitaire taxe.
     *
     * @param float $montantUnitaireTaxe The montant unitaire taxe.
     */
    public function setMontantUnitaireTaxe($montantUnitaireTaxe) {
        $this->montantUnitaireTaxe = $montantUnitaireTaxe;
        return $this;
    }
}
