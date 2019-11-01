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
 * Montant rembour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantRembourTrait {

    /**
     * Montant rembour.
     *
     * @var float
     */
    private $montantRembour;

    /**
     * Get the montant rembour.
     *
     * @return float Returns the montant rembour.
     */
    public function getMontantRembour() {
        return $this->montantRembour;
    }

    /**
     * Set the montant rembour.
     *
     * @param float $montantRembour The montant rembour.
     */
    public function setMontantRembour($montantRembour) {
        $this->montantRembour = $montantRembour;
        return $this;
    }
}
