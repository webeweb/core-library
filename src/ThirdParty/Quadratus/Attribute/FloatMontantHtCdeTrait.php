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
 * Montant ht cde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantHtCdeTrait {

    /**
     * Montant ht cde.
     *
     * @var float
     */
    private $montantHtCde;

    /**
     * Get the montant ht cde.
     *
     * @return float Returns the montant ht cde.
     */
    public function getMontantHtCde() {
        return $this->montantHtCde;
    }

    /**
     * Set the montant ht cde.
     *
     * @param float $montantHtCde The montant ht cde.
     */
    public function setMontantHtCde($montantHtCde) {
        $this->montantHtCde = $montantHtCde;
        return $this;
    }
}
