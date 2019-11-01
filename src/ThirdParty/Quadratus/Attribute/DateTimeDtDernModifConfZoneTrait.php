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
 * Dt dern modif conf zone trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDernModifConfZoneTrait {

    /**
     * Dt dern modif conf zone.
     *
     * @var DateTime|null
     */
    private $dtDernModifConfZone;

    /**
     * Get the dt dern modif conf zone.
     *
     * @return DateTime|null Returns the dt dern modif conf zone.
     */
    public function getDtDernModifConfZone() {
        return $this->dtDernModifConfZone;
    }

    /**
     * Set the dt dern modif conf zone.
     *
     * @param DateTime|null $dtDernModifConfZone The dt dern modif conf zone.
     */
    public function setDtDernModifConfZone(DateTime $dtDernModifConfZone = null) {
        $this->dtDernModifConfZone = $dtDernModifConfZone;
        return $this;
    }
}
