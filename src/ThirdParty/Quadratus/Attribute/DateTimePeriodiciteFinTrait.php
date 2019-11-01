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
 * Periodicite fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodiciteFinTrait {

    /**
     * Periodicite fin.
     *
     * @var DateTime|null
     */
    private $periodiciteFin;

    /**
     * Get the periodicite fin.
     *
     * @return DateTime|null Returns the periodicite fin.
     */
    public function getPeriodiciteFin() {
        return $this->periodiciteFin;
    }

    /**
     * Set the periodicite fin.
     *
     * @param DateTime|null $periodiciteFin The periodicite fin.
     */
    public function setPeriodiciteFin(DateTime $periodiciteFin = null) {
        $this->periodiciteFin = $periodiciteFin;
        return $this;
    }
}
