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
 * Ha date pv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHaDatePvTrait {

    /**
     * Ha date pv.
     *
     * @var DateTime|null
     */
    private $haDatePv;

    /**
     * Get the ha date pv.
     *
     * @return DateTime|null Returns the ha date pv.
     */
    public function getHaDatePv() {
        return $this->haDatePv;
    }

    /**
     * Set the ha date pv.
     *
     * @param DateTime|null $haDatePv The ha date pv.
     */
    public function setHaDatePv(DateTime $haDatePv = null) {
        $this->haDatePv = $haDatePv;
        return $this;
    }
}
