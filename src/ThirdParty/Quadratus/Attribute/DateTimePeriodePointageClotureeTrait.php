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
 * Periode pointage cloturee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodePointageClotureeTrait {

    /**
     * Periode pointage cloturee.
     *
     * @var DateTime|null
     */
    private $periodePointageCloturee;

    /**
     * Get the periode pointage cloturee.
     *
     * @return DateTime|null Returns the periode pointage cloturee.
     */
    public function getPeriodePointageCloturee() {
        return $this->periodePointageCloturee;
    }

    /**
     * Set the periode pointage cloturee.
     *
     * @param DateTime|null $periodePointageCloturee The periode pointage cloturee.
     */
    public function setPeriodePointageCloturee(DateTime $periodePointageCloturee = null) {
        $this->periodePointageCloturee = $periodePointageCloturee;
        return $this;
    }
}
