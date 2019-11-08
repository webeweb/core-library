<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Mission visu taches.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class MissionVisuTaches {

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Code tache visu.
     *
     * @var string
     */
    private $codeTacheVisu;

    /**
     * Is regroupement.
     *
     * @var bool
     */
    private $isRegroupement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Get the code tache visu.
     *
     * @return string Returns the code tache visu.
     */
    public function getCodeTacheVisu() {
        return $this->codeTacheVisu;
    }

    /**
     * Get the is regroupement.
     *
     * @return bool Returns the is regroupement.
     */
    public function getIsRegroupement() {
        return $this->isRegroupement;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code tache visu.
     *
     * @param string $codeTacheVisu The code tache visu.
     */
    public function setCodeTacheVisu($codeTacheVisu) {
        $this->codeTacheVisu = $codeTacheVisu;
        return $this;
    }

    /**
     * Set the is regroupement.
     *
     * @param bool $isRegroupement The is regroupement.
     */
    public function setIsRegroupement($isRegroupement) {
        $this->isRegroupement = $isRegroupement;
        return $this;
    }
}
