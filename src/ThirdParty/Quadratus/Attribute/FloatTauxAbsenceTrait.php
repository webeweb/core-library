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
 * Taux absence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxAbsenceTrait {

    /**
     * Taux absence.
     *
     * @var float
     */
    private $tauxAbsence;

    /**
     * Get the taux absence.
     *
     * @return float Returns the taux absence.
     */
    public function getTauxAbsence() {
        return $this->tauxAbsence;
    }

    /**
     * Set the taux absence.
     *
     * @param float $tauxAbsence The taux absence.
     */
    public function setTauxAbsence($tauxAbsence) {
        $this->tauxAbsence = $tauxAbsence;
        return $this;
    }
}
