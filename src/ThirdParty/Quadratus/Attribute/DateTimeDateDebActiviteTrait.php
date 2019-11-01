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
 * Date deb activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebActiviteTrait {

    /**
     * Date deb activite.
     *
     * @var DateTime|null
     */
    private $dateDebActivite;

    /**
     * Get the date deb activite.
     *
     * @return DateTime|null Returns the date deb activite.
     */
    public function getDateDebActivite() {
        return $this->dateDebActivite;
    }

    /**
     * Set the date deb activite.
     *
     * @param DateTime|null $dateDebActivite The date deb activite.
     */
    public function setDateDebActivite(DateTime $dateDebActivite = null) {
        $this->dateDebActivite = $dateDebActivite;
        return $this;
    }
}
