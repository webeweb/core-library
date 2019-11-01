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
 * Taux h absence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHAbsenceTrait {

    /**
     * Taux h absence.
     *
     * @var float
     */
    private $tauxHAbsence;

    /**
     * Get the taux h absence.
     *
     * @return float Returns the taux h absence.
     */
    public function getTauxHAbsence() {
        return $this->tauxHAbsence;
    }

    /**
     * Set the taux h absence.
     *
     * @param float $tauxHAbsence The taux h absence.
     */
    public function setTauxHAbsence($tauxHAbsence) {
        $this->tauxHAbsence = $tauxHAbsence;
        return $this;
    }
}
