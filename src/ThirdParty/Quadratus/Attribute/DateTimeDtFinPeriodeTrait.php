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
 * Dt fin periode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinPeriodeTrait {

    /**
     * Dt fin periode.
     *
     * @var DateTime|null
     */
    private $dtFinPeriode;

    /**
     * Get the dt fin periode.
     *
     * @return DateTime|null Returns the dt fin periode.
     */
    public function getDtFinPeriode() {
        return $this->dtFinPeriode;
    }

    /**
     * Set the dt fin periode.
     *
     * @param DateTime|null $dtFinPeriode The dt fin periode.
     */
    public function setDtFinPeriode(DateTime $dtFinPeriode = null) {
        $this->dtFinPeriode = $dtFinPeriode;
        return $this;
    }
}
