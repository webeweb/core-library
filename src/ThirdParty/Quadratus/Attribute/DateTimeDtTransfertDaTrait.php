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
 * Dt transfert da trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtTransfertDaTrait {

    /**
     * Dt transfert da.
     *
     * @var DateTime|null
     */
    private $dtTransfertDa;

    /**
     * Get the dt transfert da.
     *
     * @return DateTime|null Returns the dt transfert da.
     */
    public function getDtTransfertDa() {
        return $this->dtTransfertDa;
    }

    /**
     * Set the dt transfert da.
     *
     * @param DateTime|null $dtTransfertDa The dt transfert da.
     */
    public function setDtTransfertDa(DateTime $dtTransfertDa = null) {
        $this->dtTransfertDa = $dtTransfertDa;
        return $this;
    }
}
