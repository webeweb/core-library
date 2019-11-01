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
 * Date appli gestion heures en plus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAppliGestionHeuresEnPlusTrait {

    /**
     * Date appli gestion heures en plus.
     *
     * @var DateTime|null
     */
    private $dateAppliGestionHeuresEnPlus;

    /**
     * Get the date appli gestion heures en plus.
     *
     * @return DateTime|null Returns the date appli gestion heures en plus.
     */
    public function getDateAppliGestionHeuresEnPlus() {
        return $this->dateAppliGestionHeuresEnPlus;
    }

    /**
     * Set the date appli gestion heures en plus.
     *
     * @param DateTime|null $dateAppliGestionHeuresEnPlus The date appli gestion heures en plus.
     */
    public function setDateAppliGestionHeuresEnPlus(DateTime $dateAppliGestionHeuresEnPlus = null) {
        $this->dateAppliGestionHeuresEnPlus = $dateAppliGestionHeuresEnPlus;
        return $this;
    }
}
