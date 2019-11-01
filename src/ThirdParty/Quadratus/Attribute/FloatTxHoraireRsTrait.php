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
 * Tx horaire rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxHoraireRsTrait {

    /**
     * Tx horaire rs.
     *
     * @var float
     */
    private $txHoraireRs;

    /**
     * Get the tx horaire rs.
     *
     * @return float Returns the tx horaire rs.
     */
    public function getTxHoraireRs() {
        return $this->txHoraireRs;
    }

    /**
     * Set the tx horaire rs.
     *
     * @param float $txHoraireRs The tx horaire rs.
     */
    public function setTxHoraireRs($txHoraireRs) {
        $this->txHoraireRs = $txHoraireRs;
        return $this;
    }
}
