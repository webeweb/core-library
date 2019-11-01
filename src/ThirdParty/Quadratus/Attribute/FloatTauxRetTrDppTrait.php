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
 * Taux ret tr dpp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrDppTrait {

    /**
     * Taux ret tr dpp.
     *
     * @var float
     */
    private $tauxRetTrDpp;

    /**
     * Get the taux ret tr dpp.
     *
     * @return float Returns the taux ret tr dpp.
     */
    public function getTauxRetTrDpp() {
        return $this->tauxRetTrDpp;
    }

    /**
     * Set the taux ret tr dpp.
     *
     * @param float $tauxRetTrDpp The taux ret tr dpp.
     */
    public function setTauxRetTrDpp($tauxRetTrDpp) {
        $this->tauxRetTrDpp = $tauxRetTrDpp;
        return $this;
    }
}
