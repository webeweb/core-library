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
 * Montant annuel2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAnnuel2Trait {

    /**
     * Montant annuel2.
     *
     * @var float
     */
    private $montantAnnuel2;

    /**
     * Get the montant annuel2.
     *
     * @return float Returns the montant annuel2.
     */
    public function getMontantAnnuel2() {
        return $this->montantAnnuel2;
    }

    /**
     * Set the montant annuel2.
     *
     * @param float $montantAnnuel2 The montant annuel2.
     */
    public function setMontantAnnuel2($montantAnnuel2) {
        $this->montantAnnuel2 = $montantAnnuel2;
        return $this;
    }
}
