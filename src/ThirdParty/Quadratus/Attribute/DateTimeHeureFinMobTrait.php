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
 * Heure fin mob trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeureFinMobTrait {

    /**
     * Heure fin mob.
     *
     * @var DateTime|null
     */
    private $heureFinMob;

    /**
     * Get the heure fin mob.
     *
     * @return DateTime|null Returns the heure fin mob.
     */
    public function getHeureFinMob() {
        return $this->heureFinMob;
    }

    /**
     * Set the heure fin mob.
     *
     * @param DateTime|null $heureFinMob The heure fin mob.
     */
    public function setHeureFinMob(DateTime $heureFinMob = null) {
        $this->heureFinMob = $heureFinMob;
        return $this;
    }
}
