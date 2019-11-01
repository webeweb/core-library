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
 * Num ordre mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumOrdreMissionTrait {

    /**
     * Num ordre mission.
     *
     * @var string
     */
    private $numOrdreMission;

    /**
     * Get the num ordre mission.
     *
     * @return string Returns the num ordre mission.
     */
    public function getNumOrdreMission() {
        return $this->numOrdreMission;
    }

    /**
     * Set the num ordre mission.
     *
     * @param string $numOrdreMission The num ordre mission.
     */
    public function setNumOrdreMission($numOrdreMission) {
        $this->numOrdreMission = $numOrdreMission;
        return $this;
    }
}
