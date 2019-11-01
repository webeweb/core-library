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
 * Taux devise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxDeviseTrait {

    /**
     * Taux devise.
     *
     * @var float
     */
    private $tauxDevise;

    /**
     * Get the taux devise.
     *
     * @return float Returns the taux devise.
     */
    public function getTauxDevise() {
        return $this->tauxDevise;
    }

    /**
     * Set the taux devise.
     *
     * @param float $tauxDevise The taux devise.
     */
    public function setTauxDevise($tauxDevise) {
        $this->tauxDevise = $tauxDevise;
        return $this;
    }
}
