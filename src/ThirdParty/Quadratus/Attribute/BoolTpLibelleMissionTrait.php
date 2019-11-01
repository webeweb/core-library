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
 * Tp libelle mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpLibelleMissionTrait {

    /**
     * Tp libelle mission.
     *
     * @var bool
     */
    private $tpLibelleMission;

    /**
     * Get the tp libelle mission.
     *
     * @return bool Returns the tp libelle mission.
     */
    public function getTpLibelleMission() {
        return $this->tpLibelleMission;
    }

    /**
     * Set the tp libelle mission.
     *
     * @param bool $tpLibelleMission The tp libelle mission.
     */
    public function setTpLibelleMission($tpLibelleMission) {
        $this->tpLibelleMission = $tpLibelleMission;
        return $this;
    }
}
