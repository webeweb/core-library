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
 * Periode avenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeAvenantTrait {

    /**
     * Periode avenant.
     *
     * @var DateTime|null
     */
    private $periodeAvenant;

    /**
     * Get the periode avenant.
     *
     * @return DateTime|null Returns the periode avenant.
     */
    public function getPeriodeAvenant() {
        return $this->periodeAvenant;
    }

    /**
     * Set the periode avenant.
     *
     * @param DateTime|null $periodeAvenant The periode avenant.
     */
    public function setPeriodeAvenant(DateTime $periodeAvenant = null) {
        $this->periodeAvenant = $periodeAvenant;
        return $this;
    }
}
