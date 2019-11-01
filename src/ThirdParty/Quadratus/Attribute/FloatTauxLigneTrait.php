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
 * Taux ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxLigneTrait {

    /**
     * Taux ligne.
     *
     * @var float
     */
    private $tauxLigne;

    /**
     * Get the taux ligne.
     *
     * @return float Returns the taux ligne.
     */
    public function getTauxLigne() {
        return $this->tauxLigne;
    }

    /**
     * Set the taux ligne.
     *
     * @param float $tauxLigne The taux ligne.
     */
    public function setTauxLigne($tauxLigne) {
        $this->tauxLigne = $tauxLigne;
        return $this;
    }
}
