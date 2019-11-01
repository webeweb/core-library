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
 * Montant annuel4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAnnuel4Trait {

    /**
     * Montant annuel4.
     *
     * @var float
     */
    private $montantAnnuel4;

    /**
     * Get the montant annuel4.
     *
     * @return float Returns the montant annuel4.
     */
    public function getMontantAnnuel4() {
        return $this->montantAnnuel4;
    }

    /**
     * Set the montant annuel4.
     *
     * @param float $montantAnnuel4 The montant annuel4.
     */
    public function setMontantAnnuel4($montantAnnuel4) {
        $this->montantAnnuel4 = $montantAnnuel4;
        return $this;
    }
}
