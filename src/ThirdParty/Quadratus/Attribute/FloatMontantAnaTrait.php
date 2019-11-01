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
 * Montant ana trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAnaTrait {

    /**
     * Montant ana.
     *
     * @var float
     */
    private $montantAna;

    /**
     * Get the montant ana.
     *
     * @return float Returns the montant ana.
     */
    public function getMontantAna() {
        return $this->montantAna;
    }

    /**
     * Set the montant ana.
     *
     * @param float $montantAna The montant ana.
     */
    public function setMontantAna($montantAna) {
        $this->montantAna = $montantAna;
        return $this;
    }
}
