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
 * Qtel code mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQtelCodeMissionTrait {

    /**
     * Qtel code mission.
     *
     * @var string
     */
    private $qtelCodeMission;

    /**
     * Get the qtel code mission.
     *
     * @return string Returns the qtel code mission.
     */
    public function getQtelCodeMission() {
        return $this->qtelCodeMission;
    }

    /**
     * Set the qtel code mission.
     *
     * @param string $qtelCodeMission The qtel code mission.
     */
    public function setQtelCodeMission($qtelCodeMission) {
        $this->qtelCodeMission = $qtelCodeMission;
        return $this;
    }
}
