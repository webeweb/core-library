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
 * Absence du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeAbsenceDuTrait {

    /**
     * Absence du.
     *
     * @var DateTime|null
     */
    private $absenceDu;

    /**
     * Get the absence du.
     *
     * @return DateTime|null Returns the absence du.
     */
    public function getAbsenceDu() {
        return $this->absenceDu;
    }

    /**
     * Set the absence du.
     *
     * @param DateTime|null $absenceDu The absence du.
     */
    public function setAbsenceDu(DateTime $absenceDu = null) {
        $this->absenceDu = $absenceDu;
        return $this;
    }
}
