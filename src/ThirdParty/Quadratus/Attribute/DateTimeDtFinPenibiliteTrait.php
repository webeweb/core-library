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
 * Dt fin penibilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinPenibiliteTrait {

    /**
     * Dt fin penibilite.
     *
     * @var DateTime|null
     */
    private $dtFinPenibilite;

    /**
     * Get the dt fin penibilite.
     *
     * @return DateTime|null Returns the dt fin penibilite.
     */
    public function getDtFinPenibilite() {
        return $this->dtFinPenibilite;
    }

    /**
     * Set the dt fin penibilite.
     *
     * @param DateTime|null $dtFinPenibilite The dt fin penibilite.
     */
    public function setDtFinPenibilite(DateTime $dtFinPenibilite = null) {
        $this->dtFinPenibilite = $dtFinPenibilite;
        return $this;
    }
}
