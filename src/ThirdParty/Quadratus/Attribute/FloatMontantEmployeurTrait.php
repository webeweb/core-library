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
 * Montant employeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantEmployeurTrait {

    /**
     * Montant employeur.
     *
     * @var float
     */
    private $montantEmployeur;

    /**
     * Get the montant employeur.
     *
     * @return float Returns the montant employeur.
     */
    public function getMontantEmployeur() {
        return $this->montantEmployeur;
    }

    /**
     * Set the montant employeur.
     *
     * @param float $montantEmployeur The montant employeur.
     */
    public function setMontantEmployeur($montantEmployeur) {
        $this->montantEmployeur = $montantEmployeur;
        return $this;
    }
}
