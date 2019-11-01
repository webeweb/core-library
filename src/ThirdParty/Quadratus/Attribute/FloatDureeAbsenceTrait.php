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
 * Duree absence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeAbsenceTrait {

    /**
     * Duree absence.
     *
     * @var float
     */
    private $dureeAbsence;

    /**
     * Get the duree absence.
     *
     * @return float Returns the duree absence.
     */
    public function getDureeAbsence() {
        return $this->dureeAbsence;
    }

    /**
     * Set the duree absence.
     *
     * @param float $dureeAbsence The duree absence.
     */
    public function setDureeAbsence($dureeAbsence) {
        $this->dureeAbsence = $dureeAbsence;
        return $this;
    }
}
