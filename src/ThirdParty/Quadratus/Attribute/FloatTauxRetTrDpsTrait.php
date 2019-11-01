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
 * Taux ret tr dps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrDpsTrait {

    /**
     * Taux ret tr dps.
     *
     * @var float
     */
    private $tauxRetTrDps;

    /**
     * Get the taux ret tr dps.
     *
     * @return float Returns the taux ret tr dps.
     */
    public function getTauxRetTrDps() {
        return $this->tauxRetTrDps;
    }

    /**
     * Set the taux ret tr dps.
     *
     * @param float $tauxRetTrDps The taux ret tr dps.
     */
    public function setTauxRetTrDps($tauxRetTrDps) {
        $this->tauxRetTrDps = $tauxRetTrDps;
        return $this;
    }
}
