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
 * Date comm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCommTrait {

    /**
     * Date comm.
     *
     * @var DateTime|null
     */
    private $dateComm;

    /**
     * Get the date comm.
     *
     * @return DateTime|null Returns the date comm.
     */
    public function getDateComm() {
        return $this->dateComm;
    }

    /**
     * Set the date comm.
     *
     * @param DateTime|null $dateComm The date comm.
     */
    public function setDateComm(DateTime $dateComm = null) {
        $this->dateComm = $dateComm;
        return $this;
    }
}
