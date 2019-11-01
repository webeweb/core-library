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
 * Taux plafond interets trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPlafondInteretsTrait {

    /**
     * Taux plafond interets.
     *
     * @var float
     */
    private $tauxPlafondInterets;

    /**
     * Get the taux plafond interets.
     *
     * @return float Returns the taux plafond interets.
     */
    public function getTauxPlafondInterets() {
        return $this->tauxPlafondInterets;
    }

    /**
     * Set the taux plafond interets.
     *
     * @param float $tauxPlafondInterets The taux plafond interets.
     */
    public function setTauxPlafondInterets($tauxPlafondInterets) {
        $this->tauxPlafondInterets = $tauxPlafondInterets;
        return $this;
    }
}
