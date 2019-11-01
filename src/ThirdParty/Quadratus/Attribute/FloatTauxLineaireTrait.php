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
 * Taux lineaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxLineaireTrait {

    /**
     * Taux lineaire.
     *
     * @var float
     */
    private $tauxLineaire;

    /**
     * Get the taux lineaire.
     *
     * @return float Returns the taux lineaire.
     */
    public function getTauxLineaire() {
        return $this->tauxLineaire;
    }

    /**
     * Set the taux lineaire.
     *
     * @param float $tauxLineaire The taux lineaire.
     */
    public function setTauxLineaire($tauxLineaire) {
        $this->tauxLineaire = $tauxLineaire;
        return $this;
    }
}
