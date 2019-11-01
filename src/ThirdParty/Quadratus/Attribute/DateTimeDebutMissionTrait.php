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
 * Debut mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutMissionTrait {

    /**
     * Debut mission.
     *
     * @var DateTime|null
     */
    private $debutMission;

    /**
     * Get the debut mission.
     *
     * @return DateTime|null Returns the debut mission.
     */
    public function getDebutMission() {
        return $this->debutMission;
    }

    /**
     * Set the debut mission.
     *
     * @param DateTime|null $debutMission The debut mission.
     */
    public function setDebutMission(DateTime $debutMission = null) {
        $this->debutMission = $debutMission;
        return $this;
    }
}
