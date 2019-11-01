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
 * Taux prime annuelle proprete moins20 ans trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPrimeAnnuellePropreteMoins20AnsTrait {

    /**
     * Taux prime annuelle proprete moins20 ans.
     *
     * @var float
     */
    private $tauxPrimeAnnuellePropreteMoins20Ans;

    /**
     * Get the taux prime annuelle proprete moins20 ans.
     *
     * @return float Returns the taux prime annuelle proprete moins20 ans.
     */
    public function getTauxPrimeAnnuellePropreteMoins20Ans() {
        return $this->tauxPrimeAnnuellePropreteMoins20Ans;
    }

    /**
     * Set the taux prime annuelle proprete moins20 ans.
     *
     * @param float $tauxPrimeAnnuellePropreteMoins20Ans The taux prime annuelle proprete moins20 ans.
     */
    public function setTauxPrimeAnnuellePropreteMoins20Ans($tauxPrimeAnnuellePropreteMoins20Ans) {
        $this->tauxPrimeAnnuellePropreteMoins20Ans = $tauxPrimeAnnuellePropreteMoins20Ans;
        return $this;
    }
}
