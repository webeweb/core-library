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
 * Taux pension militaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPensionMilitaireTrait {

    /**
     * Taux pension militaire.
     *
     * @var float
     */
    private $tauxPensionMilitaire;

    /**
     * Get the taux pension militaire.
     *
     * @return float Returns the taux pension militaire.
     */
    public function getTauxPensionMilitaire() {
        return $this->tauxPensionMilitaire;
    }

    /**
     * Set the taux pension militaire.
     *
     * @param float $tauxPensionMilitaire The taux pension militaire.
     */
    public function setTauxPensionMilitaire($tauxPensionMilitaire) {
        $this->tauxPensionMilitaire = $tauxPensionMilitaire;
        return $this;
    }
}
