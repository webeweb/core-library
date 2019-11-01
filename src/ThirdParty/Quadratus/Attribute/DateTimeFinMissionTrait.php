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
 * Fin mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinMissionTrait {

    /**
     * Fin mission.
     *
     * @var DateTime|null
     */
    private $finMission;

    /**
     * Get the fin mission.
     *
     * @return DateTime|null Returns the fin mission.
     */
    public function getFinMission() {
        return $this->finMission;
    }

    /**
     * Set the fin mission.
     *
     * @param DateTime|null $finMission The fin mission.
     */
    public function setFinMission(DateTime $finMission = null) {
        $this->finMission = $finMission;
        return $this;
    }
}
