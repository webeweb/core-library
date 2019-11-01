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
 * Num lot ecrit trans periodicite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransPeriodiciteTrait {

    /**
     * Num lot ecrit trans periodicite.
     *
     * @var int
     */
    private $numLotEcritTransPeriodicite;

    /**
     * Get the num lot ecrit trans periodicite.
     *
     * @return int Returns the num lot ecrit trans periodicite.
     */
    public function getNumLotEcritTransPeriodicite() {
        return $this->numLotEcritTransPeriodicite;
    }

    /**
     * Set the num lot ecrit trans periodicite.
     *
     * @param int $numLotEcritTransPeriodicite The num lot ecrit trans periodicite.
     */
    public function setNumLotEcritTransPeriodicite($numLotEcritTransPeriodicite) {
        $this->numLotEcritTransPeriodicite = $numLotEcritTransPeriodicite;
        return $this;
    }
}
