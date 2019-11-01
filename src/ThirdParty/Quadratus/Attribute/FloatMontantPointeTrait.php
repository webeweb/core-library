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
 * Montant pointe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantPointeTrait {

    /**
     * Montant pointe.
     *
     * @var float
     */
    private $montantPointe;

    /**
     * Get the montant pointe.
     *
     * @return float Returns the montant pointe.
     */
    public function getMontantPointe() {
        return $this->montantPointe;
    }

    /**
     * Set the montant pointe.
     *
     * @param float $montantPointe The montant pointe.
     */
    public function setMontantPointe($montantPointe) {
        $this->montantPointe = $montantPointe;
        return $this;
    }
}
