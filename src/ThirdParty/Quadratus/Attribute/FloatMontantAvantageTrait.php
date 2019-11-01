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
 * Montant avantage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAvantageTrait {

    /**
     * Montant avantage.
     *
     * @var float
     */
    private $montantAvantage;

    /**
     * Get the montant avantage.
     *
     * @return float Returns the montant avantage.
     */
    public function getMontantAvantage() {
        return $this->montantAvantage;
    }

    /**
     * Set the montant avantage.
     *
     * @param float $montantAvantage The montant avantage.
     */
    public function setMontantAvantage($montantAvantage) {
        $this->montantAvantage = $montantAvantage;
        return $this;
    }
}
