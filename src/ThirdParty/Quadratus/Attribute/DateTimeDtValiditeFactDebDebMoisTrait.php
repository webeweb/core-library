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
 * Dt validite fact deb deb mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtValiditeFactDebDebMoisTrait {

    /**
     * Dt validite fact deb deb mois.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDebDebMois;

    /**
     * Get the dt validite fact deb deb mois.
     *
     * @return DateTime|null Returns the dt validite fact deb deb mois.
     */
    public function getDtValiditeFactDebDebMois() {
        return $this->dtValiditeFactDebDebMois;
    }

    /**
     * Set the dt validite fact deb deb mois.
     *
     * @param DateTime|null $dtValiditeFactDebDebMois The dt validite fact deb deb mois.
     */
    public function setDtValiditeFactDebDebMois(DateTime $dtValiditeFactDebDebMois = null) {
        $this->dtValiditeFactDebDebMois = $dtValiditeFactDebDebMois;
        return $this;
    }
}
