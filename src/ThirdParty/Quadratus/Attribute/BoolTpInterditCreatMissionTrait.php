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
 * Tp interdit creat mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpInterditCreatMissionTrait {

    /**
     * Tp interdit creat mission.
     *
     * @var bool
     */
    private $tpInterditCreatMission;

    /**
     * Get the tp interdit creat mission.
     *
     * @return bool Returns the tp interdit creat mission.
     */
    public function getTpInterditCreatMission() {
        return $this->tpInterditCreatMission;
    }

    /**
     * Set the tp interdit creat mission.
     *
     * @param bool $tpInterditCreatMission The tp interdit creat mission.
     */
    public function setTpInterditCreatMission($tpInterditCreatMission) {
        $this->tpInterditCreatMission = $tpInterditCreatMission;
        return $this;
    }
}
