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
 * Date deb affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebAffaireTrait {

    /**
     * Date deb affaire.
     *
     * @var DateTime|null
     */
    private $dateDebAffaire;

    /**
     * Get the date deb affaire.
     *
     * @return DateTime|null Returns the date deb affaire.
     */
    public function getDateDebAffaire() {
        return $this->dateDebAffaire;
    }

    /**
     * Set the date deb affaire.
     *
     * @param DateTime|null $dateDebAffaire The date deb affaire.
     */
    public function setDateDebAffaire(DateTime $dateDebAffaire = null) {
        $this->dateDebAffaire = $dateDebAffaire;
        return $this;
    }
}
