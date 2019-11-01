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
 * Montant tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantTvaTrait {

    /**
     * Montant tva.
     *
     * @var float
     */
    private $montantTva;

    /**
     * Get the montant tva.
     *
     * @return float Returns the montant tva.
     */
    public function getMontantTva() {
        return $this->montantTva;
    }

    /**
     * Set the montant tva.
     *
     * @param float $montantTva The montant tva.
     */
    public function setMontantTva($montantTva) {
        $this->montantTva = $montantTva;
        return $this;
    }
}
