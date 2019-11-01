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
 * Montant avantages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAvantagesTrait {

    /**
     * Montant avantages.
     *
     * @var float
     */
    private $montantAvantages;

    /**
     * Get the montant avantages.
     *
     * @return float Returns the montant avantages.
     */
    public function getMontantAvantages() {
        return $this->montantAvantages;
    }

    /**
     * Set the montant avantages.
     *
     * @param float $montantAvantages The montant avantages.
     */
    public function setMontantAvantages($montantAvantages) {
        $this->montantAvantages = $montantAvantages;
        return $this;
    }
}
