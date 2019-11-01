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
 * Taux pat tr c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPatTrCTrait {

    /**
     * Taux pat tr c.
     *
     * @var float
     */
    private $tauxPatTrC;

    /**
     * Get the taux pat tr c.
     *
     * @return float Returns the taux pat tr c.
     */
    public function getTauxPatTrC() {
        return $this->tauxPatTrC;
    }

    /**
     * Set the taux pat tr c.
     *
     * @param float $tauxPatTrC The taux pat tr c.
     */
    public function setTauxPatTrC($tauxPatTrC) {
        $this->tauxPatTrC = $tauxPatTrC;
        return $this;
    }
}
