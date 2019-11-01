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
 * Ad deduction amort anterieur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdDeductionAmortAnterieurTrait {

    /**
     * Ad deduction amort anterieur.
     *
     * @var float
     */
    private $adDeductionAmortAnterieur;

    /**
     * Get the ad deduction amort anterieur.
     *
     * @return float Returns the ad deduction amort anterieur.
     */
    public function getAdDeductionAmortAnterieur() {
        return $this->adDeductionAmortAnterieur;
    }

    /**
     * Set the ad deduction amort anterieur.
     *
     * @param float $adDeductionAmortAnterieur The ad deduction amort anterieur.
     */
    public function setAdDeductionAmortAnterieur($adDeductionAmortAnterieur) {
        $this->adDeductionAmortAnterieur = $adDeductionAmortAnterieur;
        return $this;
    }
}
