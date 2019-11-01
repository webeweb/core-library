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
 * Montant annuel3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAnnuel3Trait {

    /**
     * Montant annuel3.
     *
     * @var float
     */
    private $montantAnnuel3;

    /**
     * Get the montant annuel3.
     *
     * @return float Returns the montant annuel3.
     */
    public function getMontantAnnuel3() {
        return $this->montantAnnuel3;
    }

    /**
     * Set the montant annuel3.
     *
     * @param float $montantAnnuel3 The montant annuel3.
     */
    public function setMontantAnnuel3($montantAnnuel3) {
        $this->montantAnnuel3 = $montantAnnuel3;
        return $this;
    }
}
