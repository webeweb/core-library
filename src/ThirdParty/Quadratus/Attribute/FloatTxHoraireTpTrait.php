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
 * Tx horaire tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxHoraireTpTrait {

    /**
     * Tx horaire tp.
     *
     * @var float
     */
    private $txHoraireTp;

    /**
     * Get the tx horaire tp.
     *
     * @return float Returns the tx horaire tp.
     */
    public function getTxHoraireTp() {
        return $this->txHoraireTp;
    }

    /**
     * Set the tx horaire tp.
     *
     * @param float $txHoraireTp The tx horaire tp.
     */
    public function setTxHoraireTp($txHoraireTp) {
        $this->txHoraireTp = $txHoraireTp;
        return $this;
    }
}
