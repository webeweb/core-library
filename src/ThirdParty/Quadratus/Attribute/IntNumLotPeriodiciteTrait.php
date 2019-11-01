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

/**
 * Num lot periodicite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotPeriodiciteTrait {

    /**
     * Num lot periodicite.
     *
     * @var int
     */
    private $numLotPeriodicite;

    /**
     * Get the num lot periodicite.
     *
     * @return int Returns the num lot periodicite.
     */
    public function getNumLotPeriodicite() {
        return $this->numLotPeriodicite;
    }

    /**
     * Set the num lot periodicite.
     *
     * @param int $numLotPeriodicite The num lot periodicite.
     */
    public function setNumLotPeriodicite($numLotPeriodicite) {
        $this->numLotPeriodicite = $numLotPeriodicite;
        return $this;
    }
}
