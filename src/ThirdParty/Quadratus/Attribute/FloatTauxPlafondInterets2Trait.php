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
 * Taux plafond interets2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPlafondInterets2Trait {

    /**
     * Taux plafond interets2.
     *
     * @var float
     */
    private $tauxPlafondInterets2;

    /**
     * Get the taux plafond interets2.
     *
     * @return float Returns the taux plafond interets2.
     */
    public function getTauxPlafondInterets2() {
        return $this->tauxPlafondInterets2;
    }

    /**
     * Set the taux plafond interets2.
     *
     * @param float $tauxPlafondInterets2 The taux plafond interets2.
     */
    public function setTauxPlafondInterets2($tauxPlafondInterets2) {
        $this->tauxPlafondInterets2 = $tauxPlafondInterets2;
        return $this;
    }
}
