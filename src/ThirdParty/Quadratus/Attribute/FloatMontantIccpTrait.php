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
 * Montant iccp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantIccpTrait {

    /**
     * Montant iccp.
     *
     * @var float
     */
    private $montantIccp;

    /**
     * Get the montant iccp.
     *
     * @return float Returns the montant iccp.
     */
    public function getMontantIccp() {
        return $this->montantIccp;
    }

    /**
     * Set the montant iccp.
     *
     * @param float $montantIccp The montant iccp.
     */
    public function setMontantIccp($montantIccp) {
        $this->montantIccp = $montantIccp;
        return $this;
    }
}
