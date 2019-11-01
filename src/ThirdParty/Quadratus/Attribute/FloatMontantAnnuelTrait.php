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
 * Montant annuel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAnnuelTrait {

    /**
     * Montant annuel.
     *
     * @var float
     */
    private $montantAnnuel;

    /**
     * Get the montant annuel.
     *
     * @return float Returns the montant annuel.
     */
    public function getMontantAnnuel() {
        return $this->montantAnnuel;
    }

    /**
     * Set the montant annuel.
     *
     * @param float $montantAnnuel The montant annuel.
     */
    public function setMontantAnnuel($montantAnnuel) {
        $this->montantAnnuel = $montantAnnuel;
        return $this;
    }
}
