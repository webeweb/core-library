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
 * Missions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMissionsTrait {

    /**
     * Missions.
     *
     * @var string
     */
    private $missions;

    /**
     * Get the missions.
     *
     * @return string Returns the missions.
     */
    public function getMissions() {
        return $this->missions;
    }

    /**
     * Set the missions.
     *
     * @param string $missions The missions.
     */
    public function setMissions($missions) {
        $this->missions = $missions;
        return $this;
    }
}
