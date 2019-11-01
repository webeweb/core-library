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
 * Date entretien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEntretienTrait {

    /**
     * Date entretien.
     *
     * @var DateTime|null
     */
    private $dateEntretien;

    /**
     * Get the date entretien.
     *
     * @return DateTime|null Returns the date entretien.
     */
    public function getDateEntretien() {
        return $this->dateEntretien;
    }

    /**
     * Set the date entretien.
     *
     * @param DateTime|null $dateEntretien The date entretien.
     */
    public function setDateEntretien(DateTime $dateEntretien = null) {
        $this->dateEntretien = $dateEntretien;
        return $this;
    }
}
