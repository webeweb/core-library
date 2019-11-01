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
 * Mission principale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMissionPrincipaleTrait {

    /**
     * Mission principale.
     *
     * @var string
     */
    private $missionPrincipale;

    /**
     * Get the mission principale.
     *
     * @return string Returns the mission principale.
     */
    public function getMissionPrincipale() {
        return $this->missionPrincipale;
    }

    /**
     * Set the mission principale.
     *
     * @param string $missionPrincipale The mission principale.
     */
    public function setMissionPrincipale($missionPrincipale) {
        $this->missionPrincipale = $missionPrincipale;
        return $this;
    }
}
