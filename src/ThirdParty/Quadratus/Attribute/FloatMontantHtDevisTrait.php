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
 * Montant ht devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantHtDevisTrait {

    /**
     * Montant ht devis.
     *
     * @var float
     */
    private $montantHtDevis;

    /**
     * Get the montant ht devis.
     *
     * @return float Returns the montant ht devis.
     */
    public function getMontantHtDevis() {
        return $this->montantHtDevis;
    }

    /**
     * Set the montant ht devis.
     *
     * @param float $montantHtDevis The montant ht devis.
     */
    public function setMontantHtDevis($montantHtDevis) {
        $this->montantHtDevis = $montantHtDevis;
        return $this;
    }
}
