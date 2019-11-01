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
 * Vendredi p mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeVendrediPMfinTrait {

    /**
     * Vendredi p mfin.
     *
     * @var DateTime|null
     */
    private $vendrediPMfin;

    /**
     * Get the vendredi p mfin.
     *
     * @return DateTime|null Returns the vendredi p mfin.
     */
    public function getVendrediPMfin() {
        return $this->vendrediPMfin;
    }

    /**
     * Set the vendredi p mfin.
     *
     * @param DateTime|null $vendrediPMfin The vendredi p mfin.
     */
    public function setVendrediPMfin(DateTime $vendrediPMfin = null) {
        $this->vendrediPMfin = $vendrediPMfin;
        return $this;
    }
}
