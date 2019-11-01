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
 * Montant comm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCommTrait {

    /**
     * Montant comm.
     *
     * @var float
     */
    private $montantComm;

    /**
     * Get the montant comm.
     *
     * @return float Returns the montant comm.
     */
    public function getMontantComm() {
        return $this->montantComm;
    }

    /**
     * Set the montant comm.
     *
     * @param float $montantComm The montant comm.
     */
    public function setMontantComm($montantComm) {
        $this->montantComm = $montantComm;
        return $this;
    }
}
