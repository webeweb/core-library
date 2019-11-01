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
 * Taux ret tr bps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrBpsTrait {

    /**
     * Taux ret tr bps.
     *
     * @var float
     */
    private $tauxRetTrBps;

    /**
     * Get the taux ret tr bps.
     *
     * @return float Returns the taux ret tr bps.
     */
    public function getTauxRetTrBps() {
        return $this->tauxRetTrBps;
    }

    /**
     * Set the taux ret tr bps.
     *
     * @param float $tauxRetTrBps The taux ret tr bps.
     */
    public function setTauxRetTrBps($tauxRetTrBps) {
        $this->tauxRetTrBps = $tauxRetTrBps;
        return $this;
    }
}
