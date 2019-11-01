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
 * Montant particulier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantParticulierTrait {

    /**
     * Montant particulier.
     *
     * @var float
     */
    private $montantParticulier;

    /**
     * Get the montant particulier.
     *
     * @return float Returns the montant particulier.
     */
    public function getMontantParticulier() {
        return $this->montantParticulier;
    }

    /**
     * Set the montant particulier.
     *
     * @param float $montantParticulier The montant particulier.
     */
    public function setMontantParticulier($montantParticulier) {
        $this->montantParticulier = $montantParticulier;
        return $this;
    }
}
