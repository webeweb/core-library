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
 * Dt validite fact fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtValiditeFactFinTrait {

    /**
     * Dt validite fact fin.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFin;

    /**
     * Get the dt validite fact fin.
     *
     * @return DateTime|null Returns the dt validite fact fin.
     */
    public function getDtValiditeFactFin() {
        return $this->dtValiditeFactFin;
    }

    /**
     * Set the dt validite fact fin.
     *
     * @param DateTime|null $dtValiditeFactFin The dt validite fact fin.
     */
    public function setDtValiditeFactFin(DateTime $dtValiditeFactFin = null) {
        $this->dtValiditeFactFin = $dtValiditeFactFin;
        return $this;
    }
}
