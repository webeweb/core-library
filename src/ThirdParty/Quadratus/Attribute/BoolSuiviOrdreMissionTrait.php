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
 * Suivi ordre mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviOrdreMissionTrait {

    /**
     * Suivi ordre mission.
     *
     * @var bool
     */
    private $suiviOrdreMission;

    /**
     * Get the suivi ordre mission.
     *
     * @return bool Returns the suivi ordre mission.
     */
    public function getSuiviOrdreMission() {
        return $this->suiviOrdreMission;
    }

    /**
     * Set the suivi ordre mission.
     *
     * @param bool $suiviOrdreMission The suivi ordre mission.
     */
    public function setSuiviOrdreMission($suiviOrdreMission) {
        $this->suiviOrdreMission = $suiviOrdreMission;
        return $this;
    }
}
