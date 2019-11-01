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
 * Montant indemnites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantIndemnitesTrait {

    /**
     * Montant indemnites.
     *
     * @var float
     */
    private $montantIndemnites;

    /**
     * Get the montant indemnites.
     *
     * @return float Returns the montant indemnites.
     */
    public function getMontantIndemnites() {
        return $this->montantIndemnites;
    }

    /**
     * Set the montant indemnites.
     *
     * @param float $montantIndemnites The montant indemnites.
     */
    public function setMontantIndemnites($montantIndemnites) {
        $this->montantIndemnites = $montantIndemnites;
        return $this;
    }
}
