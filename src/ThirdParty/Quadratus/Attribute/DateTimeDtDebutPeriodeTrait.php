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
 * Dt debut periode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebutPeriodeTrait {

    /**
     * Dt debut periode.
     *
     * @var DateTime|null
     */
    private $dtDebutPeriode;

    /**
     * Get the dt debut periode.
     *
     * @return DateTime|null Returns the dt debut periode.
     */
    public function getDtDebutPeriode() {
        return $this->dtDebutPeriode;
    }

    /**
     * Set the dt debut periode.
     *
     * @param DateTime|null $dtDebutPeriode The dt debut periode.
     */
    public function setDtDebutPeriode(DateTime $dtDebutPeriode = null) {
        $this->dtDebutPeriode = $dtDebutPeriode;
        return $this;
    }
}
