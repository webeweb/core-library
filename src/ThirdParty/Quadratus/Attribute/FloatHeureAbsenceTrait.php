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
 * Heure absence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeureAbsenceTrait {

    /**
     * Heure absence.
     *
     * @var float
     */
    private $heureAbsence;

    /**
     * Get the heure absence.
     *
     * @return float Returns the heure absence.
     */
    public function getHeureAbsence() {
        return $this->heureAbsence;
    }

    /**
     * Set the heure absence.
     *
     * @param float $heureAbsence The heure absence.
     */
    public function setHeureAbsence($heureAbsence) {
        $this->heureAbsence = $heureAbsence;
        return $this;
    }
}
