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
 * Absence extra trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAbsenceExtraTrait {

    /**
     * Absence extra.
     *
     * @var string
     */
    private $absenceExtra;

    /**
     * Get the absence extra.
     *
     * @return string Returns the absence extra.
     */
    public function getAbsenceExtra() {
        return $this->absenceExtra;
    }

    /**
     * Set the absence extra.
     *
     * @param string $absenceExtra The absence extra.
     */
    public function setAbsenceExtra($absenceExtra) {
        $this->absenceExtra = $absenceExtra;
        return $this;
    }
}
