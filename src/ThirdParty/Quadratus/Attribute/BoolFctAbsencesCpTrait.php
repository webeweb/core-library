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
 * Fct absences cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctAbsencesCpTrait {

    /**
     * Fct absences cp.
     *
     * @var bool
     */
    private $fctAbsencesCp;

    /**
     * Get the fct absences cp.
     *
     * @return bool Returns the fct absences cp.
     */
    public function getFctAbsencesCp() {
        return $this->fctAbsencesCp;
    }

    /**
     * Set the fct absences cp.
     *
     * @param bool $fctAbsencesCp The fct absences cp.
     */
    public function setFctAbsencesCp($fctAbsencesCp) {
        $this->fctAbsencesCp = $fctAbsencesCp;
        return $this;
    }
}
