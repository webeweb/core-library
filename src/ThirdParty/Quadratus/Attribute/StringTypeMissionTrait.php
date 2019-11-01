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
 * Type mission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeMissionTrait {

    /**
     * Type mission.
     *
     * @var string
     */
    private $typeMission;

    /**
     * Get the type mission.
     *
     * @return string Returns the type mission.
     */
    public function getTypeMission() {
        return $this->typeMission;
    }

    /**
     * Set the type mission.
     *
     * @param string $typeMission The type mission.
     */
    public function setTypeMission($typeMission) {
        $this->typeMission = $typeMission;
        return $this;
    }
}
