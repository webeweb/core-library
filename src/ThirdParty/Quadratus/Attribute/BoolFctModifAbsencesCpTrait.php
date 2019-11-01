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
 * Fct modif absences cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifAbsencesCpTrait {

    /**
     * Fct modif absences cp.
     *
     * @var bool
     */
    private $fctModifAbsencesCp;

    /**
     * Get the fct modif absences cp.
     *
     * @return bool Returns the fct modif absences cp.
     */
    public function getFctModifAbsencesCp() {
        return $this->fctModifAbsencesCp;
    }

    /**
     * Set the fct modif absences cp.
     *
     * @param bool $fctModifAbsencesCp The fct modif absences cp.
     */
    public function setFctModifAbsencesCp($fctModifAbsencesCp) {
        $this->fctModifAbsencesCp = $fctModifAbsencesCp;
        return $this;
    }
}
