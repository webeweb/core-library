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
 * Dt dern jour trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDernJourTravTrait {

    /**
     * Dt dern jour trav.
     *
     * @var DateTime|null
     */
    private $dtDernJourTrav;

    /**
     * Get the dt dern jour trav.
     *
     * @return DateTime|null Returns the dt dern jour trav.
     */
    public function getDtDernJourTrav() {
        return $this->dtDernJourTrav;
    }

    /**
     * Set the dt dern jour trav.
     *
     * @param DateTime|null $dtDernJourTrav The dt dern jour trav.
     */
    public function setDtDernJourTrav(DateTime $dtDernJourTrav = null) {
        $this->dtDernJourTrav = $dtDernJourTrav;
        return $this;
    }
}
