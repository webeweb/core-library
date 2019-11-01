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
 * Nb h absence intemp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAbsenceIntempTrait {

    /**
     * Nb h absence intemp.
     *
     * @var float
     */
    private $nbHAbsenceIntemp;

    /**
     * Get the nb h absence intemp.
     *
     * @return float Returns the nb h absence intemp.
     */
    public function getNbHAbsenceIntemp() {
        return $this->nbHAbsenceIntemp;
    }

    /**
     * Set the nb h absence intemp.
     *
     * @param float $nbHAbsenceIntemp The nb h absence intemp.
     */
    public function setNbHAbsenceIntemp($nbHAbsenceIntemp) {
        $this->nbHAbsenceIntemp = $nbHAbsenceIntemp;
        return $this;
    }
}
