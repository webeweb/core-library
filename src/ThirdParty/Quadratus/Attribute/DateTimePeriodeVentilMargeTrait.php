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
 * Periode ventil marge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeVentilMargeTrait {

    /**
     * Periode ventil marge.
     *
     * @var DateTime|null
     */
    private $periodeVentilMarge;

    /**
     * Get the periode ventil marge.
     *
     * @return DateTime|null Returns the periode ventil marge.
     */
    public function getPeriodeVentilMarge() {
        return $this->periodeVentilMarge;
    }

    /**
     * Set the periode ventil marge.
     *
     * @param DateTime|null $periodeVentilMarge The periode ventil marge.
     */
    public function setPeriodeVentilMarge(DateTime $periodeVentilMarge = null) {
        $this->periodeVentilMarge = $periodeVentilMarge;
        return $this;
    }
}
