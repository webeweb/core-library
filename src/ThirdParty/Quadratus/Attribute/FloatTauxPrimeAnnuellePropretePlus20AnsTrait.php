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
 * Taux prime annuelle proprete plus20 ans trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPrimeAnnuellePropretePlus20AnsTrait {

    /**
     * Taux prime annuelle proprete plus20 ans.
     *
     * @var float
     */
    private $tauxPrimeAnnuellePropretePlus20Ans;

    /**
     * Get the taux prime annuelle proprete plus20 ans.
     *
     * @return float Returns the taux prime annuelle proprete plus20 ans.
     */
    public function getTauxPrimeAnnuellePropretePlus20Ans() {
        return $this->tauxPrimeAnnuellePropretePlus20Ans;
    }

    /**
     * Set the taux prime annuelle proprete plus20 ans.
     *
     * @param float $tauxPrimeAnnuellePropretePlus20Ans The taux prime annuelle proprete plus20 ans.
     */
    public function setTauxPrimeAnnuellePropretePlus20Ans($tauxPrimeAnnuellePropretePlus20Ans) {
        $this->tauxPrimeAnnuellePropretePlus20Ans = $tauxPrimeAnnuellePropretePlus20Ans;
        return $this;
    }
}
