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
 * Montant ipe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantIpeTrait {

    /**
     * Montant ipe.
     *
     * @var float
     */
    private $montantIpe;

    /**
     * Get the montant ipe.
     *
     * @return float Returns the montant ipe.
     */
    public function getMontantIpe() {
        return $this->montantIpe;
    }

    /**
     * Set the montant ipe.
     *
     * @param float $montantIpe The montant ipe.
     */
    public function setMontantIpe($montantIpe) {
        $this->montantIpe = $montantIpe;
        return $this;
    }
}
