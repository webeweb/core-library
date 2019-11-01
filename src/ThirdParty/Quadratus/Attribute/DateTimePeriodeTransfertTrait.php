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

use DateTime;

/**
 * Periode transfert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeTransfertTrait {

    /**
     * Periode transfert.
     *
     * @var DateTime|null
     */
    private $periodeTransfert;

    /**
     * Get the periode transfert.
     *
     * @return DateTime|null Returns the periode transfert.
     */
    public function getPeriodeTransfert() {
        return $this->periodeTransfert;
    }

    /**
     * Set the periode transfert.
     *
     * @param DateTime|null $periodeTransfert The periode transfert.
     */
    public function setPeriodeTransfert(DateTime $periodeTransfert = null) {
        $this->periodeTransfert = $periodeTransfert;
        return $this;
    }
}
