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
 * Date fin periode essai trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinPeriodeEssaiTrait {

    /**
     * Date fin periode essai.
     *
     * @var DateTime|null
     */
    private $dateFinPeriodeEssai;

    /**
     * Get the date fin periode essai.
     *
     * @return DateTime|null Returns the date fin periode essai.
     */
    public function getDateFinPeriodeEssai() {
        return $this->dateFinPeriodeEssai;
    }

    /**
     * Set the date fin periode essai.
     *
     * @param DateTime|null $dateFinPeriodeEssai The date fin periode essai.
     */
    public function setDateFinPeriodeEssai(DateTime $dateFinPeriodeEssai = null) {
        $this->dateFinPeriodeEssai = $dateFinPeriodeEssai;
        return $this;
    }
}
