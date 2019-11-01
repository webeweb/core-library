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
 * Taux ret tr cps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrCpsTrait {

    /**
     * Taux ret tr cps.
     *
     * @var float
     */
    private $tauxRetTrCps;

    /**
     * Get the taux ret tr cps.
     *
     * @return float Returns the taux ret tr cps.
     */
    public function getTauxRetTrCps() {
        return $this->tauxRetTrCps;
    }

    /**
     * Set the taux ret tr cps.
     *
     * @param float $tauxRetTrCps The taux ret tr cps.
     */
    public function setTauxRetTrCps($tauxRetTrCps) {
        $this->tauxRetTrCps = $tauxRetTrCps;
        return $this;
    }
}
