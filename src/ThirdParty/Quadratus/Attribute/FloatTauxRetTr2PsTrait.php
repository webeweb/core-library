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
 * Taux ret tr2 ps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTr2PsTrait {

    /**
     * Taux ret tr2 ps.
     *
     * @var float
     */
    private $tauxRetTr2Ps;

    /**
     * Get the taux ret tr2 ps.
     *
     * @return float Returns the taux ret tr2 ps.
     */
    public function getTauxRetTr2Ps() {
        return $this->tauxRetTr2Ps;
    }

    /**
     * Set the taux ret tr2 ps.
     *
     * @param float $tauxRetTr2Ps The taux ret tr2 ps.
     */
    public function setTauxRetTr2Ps($tauxRetTr2Ps) {
        $this->tauxRetTr2Ps = $tauxRetTr2Ps;
        return $this;
    }
}
