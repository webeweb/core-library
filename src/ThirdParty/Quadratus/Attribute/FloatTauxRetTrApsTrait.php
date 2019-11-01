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
 * Taux ret tr aps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrApsTrait {

    /**
     * Taux ret tr aps.
     *
     * @var float
     */
    private $tauxRetTrAps;

    /**
     * Get the taux ret tr aps.
     *
     * @return float Returns the taux ret tr aps.
     */
    public function getTauxRetTrAps() {
        return $this->tauxRetTrAps;
    }

    /**
     * Set the taux ret tr aps.
     *
     * @param float $tauxRetTrAps The taux ret tr aps.
     */
    public function setTauxRetTrAps($tauxRetTrAps) {
        $this->tauxRetTrAps = $tauxRetTrAps;
        return $this;
    }
}
