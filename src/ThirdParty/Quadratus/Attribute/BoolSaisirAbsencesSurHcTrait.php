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
 * Saisir absences sur hc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisirAbsencesSurHcTrait {

    /**
     * Saisir absences sur hc.
     *
     * @var bool
     */
    private $saisirAbsencesSurHc;

    /**
     * Get the saisir absences sur hc.
     *
     * @return bool Returns the saisir absences sur hc.
     */
    public function getSaisirAbsencesSurHc() {
        return $this->saisirAbsencesSurHc;
    }

    /**
     * Set the saisir absences sur hc.
     *
     * @param bool $saisirAbsencesSurHc The saisir absences sur hc.
     */
    public function setSaisirAbsencesSurHc($saisirAbsencesSurHc) {
        $this->saisirAbsencesSurHc = $saisirAbsencesSurHc;
        return $this;
    }
}
