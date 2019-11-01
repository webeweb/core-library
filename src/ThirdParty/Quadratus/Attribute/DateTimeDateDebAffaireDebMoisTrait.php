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
 * Date deb affaire deb mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebAffaireDebMoisTrait {

    /**
     * Date deb affaire deb mois.
     *
     * @var DateTime|null
     */
    private $dateDebAffaireDebMois;

    /**
     * Get the date deb affaire deb mois.
     *
     * @return DateTime|null Returns the date deb affaire deb mois.
     */
    public function getDateDebAffaireDebMois() {
        return $this->dateDebAffaireDebMois;
    }

    /**
     * Set the date deb affaire deb mois.
     *
     * @param DateTime|null $dateDebAffaireDebMois The date deb affaire deb mois.
     */
    public function setDateDebAffaireDebMois(DateTime $dateDebAffaireDebMois = null) {
        $this->dateDebAffaireDebMois = $dateDebAffaireDebMois;
        return $this;
    }
}
