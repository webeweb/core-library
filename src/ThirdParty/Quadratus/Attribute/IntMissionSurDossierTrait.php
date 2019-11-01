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
 * Mission sur dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMissionSurDossierTrait {

    /**
     * Mission sur dossier.
     *
     * @var int
     */
    private $missionSurDossier;

    /**
     * Get the mission sur dossier.
     *
     * @return int Returns the mission sur dossier.
     */
    public function getMissionSurDossier() {
        return $this->missionSurDossier;
    }

    /**
     * Set the mission sur dossier.
     *
     * @param int $missionSurDossier The mission sur dossier.
     */
    public function setMissionSurDossier($missionSurDossier) {
        $this->missionSurDossier = $missionSurDossier;
        return $this;
    }
}
