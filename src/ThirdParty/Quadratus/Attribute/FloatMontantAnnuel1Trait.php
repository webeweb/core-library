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
 * Montant annuel1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantAnnuel1Trait {

    /**
     * Montant annuel1.
     *
     * @var float
     */
    private $montantAnnuel1;

    /**
     * Get the montant annuel1.
     *
     * @return float Returns the montant annuel1.
     */
    public function getMontantAnnuel1() {
        return $this->montantAnnuel1;
    }

    /**
     * Set the montant annuel1.
     *
     * @param float $montantAnnuel1 The montant annuel1.
     */
    public function setMontantAnnuel1($montantAnnuel1) {
        $this->montantAnnuel1 = $montantAnnuel1;
        return $this;
    }
}
