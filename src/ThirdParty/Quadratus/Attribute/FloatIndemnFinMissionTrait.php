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

/**
 * Indemn fin mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnFinMissionTrait {

    /**
     * Indemn fin mission.
     *
     * @var float
     */
    private $indemnFinMission;

    /**
     * Get the indemn fin mission.
     *
     * @return float Returns the indemn fin mission.
     */
    public function getIndemnFinMission() {
        return $this->indemnFinMission;
    }

    /**
     * Set the indemn fin mission.
     *
     * @param float $indemnFinMission The indemn fin mission.
     */
    public function setIndemnFinMission($indemnFinMission) {
        $this->indemnFinMission = $indemnFinMission;
        return $this;
    }
}
