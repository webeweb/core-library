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
 * Date verse salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateVerseSalaireTrait {

    /**
     * Date verse salaire.
     *
     * @var DateTime|null
     */
    private $dateVerseSalaire;

    /**
     * Get the date verse salaire.
     *
     * @return DateTime|null Returns the date verse salaire.
     */
    public function getDateVerseSalaire() {
        return $this->dateVerseSalaire;
    }

    /**
     * Set the date verse salaire.
     *
     * @param DateTime|null $dateVerseSalaire The date verse salaire.
     */
    public function setDateVerseSalaire(DateTime $dateVerseSalaire = null) {
        $this->dateVerseSalaire = $dateVerseSalaire;
        return $this;
    }
}
