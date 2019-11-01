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
 * Periode cloturee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeClotureeTrait {

    /**
     * Periode cloturee.
     *
     * @var DateTime|null
     */
    private $periodeCloturee;

    /**
     * Get the periode cloturee.
     *
     * @return DateTime|null Returns the periode cloturee.
     */
    public function getPeriodeCloturee() {
        return $this->periodeCloturee;
    }

    /**
     * Set the periode cloturee.
     *
     * @param DateTime|null $periodeCloturee The periode cloturee.
     */
    public function setPeriodeCloturee(DateTime $periodeCloturee = null) {
        $this->periodeCloturee = $periodeCloturee;
        return $this;
    }
}
