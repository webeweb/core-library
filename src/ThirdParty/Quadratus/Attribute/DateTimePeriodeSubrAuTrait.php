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
 * Periode subr au trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeSubrAuTrait {

    /**
     * Periode subr au.
     *
     * @var DateTime|null
     */
    private $periodeSubrAu;

    /**
     * Get the periode subr au.
     *
     * @return DateTime|null Returns the periode subr au.
     */
    public function getPeriodeSubrAu() {
        return $this->periodeSubrAu;
    }

    /**
     * Set the periode subr au.
     *
     * @param DateTime|null $periodeSubrAu The periode subr au.
     */
    public function setPeriodeSubrAu(DateTime $periodeSubrAu = null) {
        $this->periodeSubrAu = $periodeSubrAu;
        return $this;
    }
}
