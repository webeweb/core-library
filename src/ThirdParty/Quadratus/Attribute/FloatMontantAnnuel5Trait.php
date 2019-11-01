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
 * Montant annuel5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAnnuel5Trait {

    /**
     * Montant annuel5.
     *
     * @var float
     */
    private $montantAnnuel5;

    /**
     * Get the montant annuel5.
     *
     * @return float Returns the montant annuel5.
     */
    public function getMontantAnnuel5() {
        return $this->montantAnnuel5;
    }

    /**
     * Set the montant annuel5.
     *
     * @param float $montantAnnuel5 The montant annuel5.
     */
    public function setMontantAnnuel5($montantAnnuel5) {
        $this->montantAnnuel5 = $montantAnnuel5;
        return $this;
    }
}
