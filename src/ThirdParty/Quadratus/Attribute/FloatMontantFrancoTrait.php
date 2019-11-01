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
 * Montant franco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantFrancoTrait {

    /**
     * Montant franco.
     *
     * @var float
     */
    private $montantFranco;

    /**
     * Get the montant franco.
     *
     * @return float Returns the montant franco.
     */
    public function getMontantFranco() {
        return $this->montantFranco;
    }

    /**
     * Set the montant franco.
     *
     * @param float $montantFranco The montant franco.
     */
    public function setMontantFranco($montantFranco) {
        $this->montantFranco = $montantFranco;
        return $this;
    }
}
