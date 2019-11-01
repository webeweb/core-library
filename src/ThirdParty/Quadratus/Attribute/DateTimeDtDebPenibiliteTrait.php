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
 * Dt deb penibilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebPenibiliteTrait {

    /**
     * Dt deb penibilite.
     *
     * @var DateTime|null
     */
    private $dtDebPenibilite;

    /**
     * Get the dt deb penibilite.
     *
     * @return DateTime|null Returns the dt deb penibilite.
     */
    public function getDtDebPenibilite() {
        return $this->dtDebPenibilite;
    }

    /**
     * Set the dt deb penibilite.
     *
     * @param DateTime|null $dtDebPenibilite The dt deb penibilite.
     */
    public function setDtDebPenibilite(DateTime $dtDebPenibilite = null) {
        $this->dtDebPenibilite = $dtDebPenibilite;
        return $this;
    }
}
