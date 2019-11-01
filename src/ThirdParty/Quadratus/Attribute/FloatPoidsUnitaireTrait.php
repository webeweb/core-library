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
 * Poids unitaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPoidsUnitaireTrait {

    /**
     * Poids unitaire.
     *
     * @var float
     */
    private $poidsUnitaire;

    /**
     * Get the poids unitaire.
     *
     * @return float Returns the poids unitaire.
     */
    public function getPoidsUnitaire() {
        return $this->poidsUnitaire;
    }

    /**
     * Set the poids unitaire.
     *
     * @param float $poidsUnitaire The poids unitaire.
     */
    public function setPoidsUnitaire($poidsUnitaire) {
        $this->poidsUnitaire = $poidsUnitaire;
        return $this;
    }
}
