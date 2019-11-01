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
 * Date fin affaire fin mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinAffaireFinMoisTrait {

    /**
     * Date fin affaire fin mois.
     *
     * @var DateTime|null
     */
    private $dateFinAffaireFinMois;

    /**
     * Get the date fin affaire fin mois.
     *
     * @return DateTime|null Returns the date fin affaire fin mois.
     */
    public function getDateFinAffaireFinMois() {
        return $this->dateFinAffaireFinMois;
    }

    /**
     * Set the date fin affaire fin mois.
     *
     * @param DateTime|null $dateFinAffaireFinMois The date fin affaire fin mois.
     */
    public function setDateFinAffaireFinMois(DateTime $dateFinAffaireFinMois = null) {
        $this->dateFinAffaireFinMois = $dateFinAffaireFinMois;
        return $this;
    }
}
