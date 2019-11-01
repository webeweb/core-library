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

use DateTime;

/**
 * Absence au trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeAbsenceAuTrait {

    /**
     * Absence au.
     *
     * @var DateTime|null
     */
    private $absenceAu;

    /**
     * Get the absence au.
     *
     * @return DateTime|null Returns the absence au.
     */
    public function getAbsenceAu() {
        return $this->absenceAu;
    }

    /**
     * Set the absence au.
     *
     * @param DateTime|null $absenceAu The absence au.
     */
    public function setAbsenceAu(DateTime $absenceAu = null) {
        $this->absenceAu = $absenceAu;
        return $this;
    }
}
