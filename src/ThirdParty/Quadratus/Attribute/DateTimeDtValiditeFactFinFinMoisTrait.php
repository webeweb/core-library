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
 * Dt validite fact fin fin mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtValiditeFactFinFinMoisTrait {

    /**
     * Dt validite fact fin fin mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactFinFinMois;

    /**
     * Get the dt validite fact fin fin mois.
     *
     * @return DateTime|null Returns the dt validite fact fin fin mois.
     */
    public function getDtValiditeFactFinFinMois() {
        return $this->dtValiditeFactFinFinMois;
    }

    /**
     * Set the dt validite fact fin fin mois.
     *
     * @param DateTime|null $dtValiditeFactFinFinMois The dt validite fact fin fin mois.
     */
    public function setDtValiditeFactFinFinMois(DateTime $dtValiditeFactFinFinMois = null) {
        $this->dtValiditeFactFinFinMois = $dtValiditeFactFinFinMois;
        return $this;
    }
}
