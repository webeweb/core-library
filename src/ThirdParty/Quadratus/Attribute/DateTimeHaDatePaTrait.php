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
 * Ha date pa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHaDatePaTrait {

    /**
     * Ha date pa.
     *
     * @var DateTime|null
     */
    private $haDatePa;

    /**
     * Get the ha date pa.
     *
     * @return DateTime|null Returns the ha date pa.
     */
    public function getHaDatePa() {
        return $this->haDatePa;
    }

    /**
     * Set the ha date pa.
     *
     * @param DateTime|null $haDatePa The ha date pa.
     */
    public function setHaDatePa(DateTime $haDatePa = null) {
        $this->haDatePa = $haDatePa;
        return $this;
    }
}
