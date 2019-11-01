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
 * Absence modifiee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAbsenceModifieeTrait {

    /**
     * Absence modifiee.
     *
     * @var string
     */
    private $absenceModifiee;

    /**
     * Get the absence modifiee.
     *
     * @return string Returns the absence modifiee.
     */
    public function getAbsenceModifiee() {
        return $this->absenceModifiee;
    }

    /**
     * Set the absence modifiee.
     *
     * @param string $absenceModifiee The absence modifiee.
     */
    public function setAbsenceModifiee($absenceModifiee) {
        $this->absenceModifiee = $absenceModifiee;
        return $this;
    }
}
