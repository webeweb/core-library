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
 * Montant cumul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCumulTrait {

    /**
     * Montant cumul.
     *
     * @var float
     */
    private $montantCumul;

    /**
     * Get the montant cumul.
     *
     * @return float Returns the montant cumul.
     */
    public function getMontantCumul() {
        return $this->montantCumul;
    }

    /**
     * Set the montant cumul.
     *
     * @param float $montantCumul The montant cumul.
     */
    public function setMontantCumul($montantCumul) {
        $this->montantCumul = $montantCumul;
        return $this;
    }
}
