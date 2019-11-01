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
 * Date fin affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinAffaireTrait {

    /**
     * Date fin affaire.
     *
     * @var DateTime|null
     */
    private $dateFinAffaire;

    /**
     * Get the date fin affaire.
     *
     * @return DateTime|null Returns the date fin affaire.
     */
    public function getDateFinAffaire() {
        return $this->dateFinAffaire;
    }

    /**
     * Set the date fin affaire.
     *
     * @param DateTime|null $dateFinAffaire The date fin affaire.
     */
    public function setDateFinAffaire(DateTime $dateFinAffaire = null) {
        $this->dateFinAffaire = $dateFinAffaire;
        return $this;
    }
}
