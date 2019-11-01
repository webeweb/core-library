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
 * Montant total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantTotalTrait {

    /**
     * Montant total.
     *
     * @var float
     */
    private $montantTotal;

    /**
     * Get the montant total.
     *
     * @return float Returns the montant total.
     */
    public function getMontantTotal() {
        return $this->montantTotal;
    }

    /**
     * Set the montant total.
     *
     * @param float $montantTotal The montant total.
     */
    public function setMontantTotal($montantTotal) {
        $this->montantTotal = $montantTotal;
        return $this;
    }
}
