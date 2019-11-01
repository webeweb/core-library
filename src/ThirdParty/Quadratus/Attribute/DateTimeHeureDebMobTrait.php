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
 * Heure deb mob trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeureDebMobTrait {

    /**
     * Heure deb mob.
     *
     * @var DateTime|null
     */
    private $heureDebMob;

    /**
     * Get the heure deb mob.
     *
     * @return DateTime|null Returns the heure deb mob.
     */
    public function getHeureDebMob() {
        return $this->heureDebMob;
    }

    /**
     * Set the heure deb mob.
     *
     * @param DateTime|null $heureDebMob The heure deb mob.
     */
    public function setHeureDebMob(DateTime $heureDebMob = null) {
        $this->heureDebMob = $heureDebMob;
        return $this;
    }
}
