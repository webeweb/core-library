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
 * Montant restant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantRestantTrait {

    /**
     * Montant restant.
     *
     * @var float
     */
    private $montantRestant;

    /**
     * Get the montant restant.
     *
     * @return float Returns the montant restant.
     */
    public function getMontantRestant() {
        return $this->montantRestant;
    }

    /**
     * Set the montant restant.
     *
     * @param float $montantRestant The montant restant.
     */
    public function setMontantRestant($montantRestant) {
        $this->montantRestant = $montantRestant;
        return $this;
    }
}
