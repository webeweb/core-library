<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Seuil repos recup model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SeuilReposRecup {

    /**
     * Date application.
     *
     * @var DateTime
     */
    private $dateApplication;

    /**
     * Nb jour repos recup.
     *
     * @var float
     */
    private $nbJourReposRecup;

    /**
     * Numero grille type.
     *
     * @var int
     */
    private $numeroGrilleType;

    /**
     * Seuil declenche.
     *
     * @var float
     */
    private $seuilDeclenche;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date application.
     *
     * @return DateTime Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the nb jour repos recup.
     *
     * @return float Returns the nb jour repos recup.
     */
    public function getNbJourReposRecup() {
        return $this->nbJourReposRecup;
    }

    /**
     * Get the numero grille type.
     *
     * @return int Returns the numero grille type.
     */
    public function getNumeroGrilleType() {
        return $this->numeroGrilleType;
    }

    /**
     * Get the seuil declenche.
     *
     * @return float Returns the seuil declenche.
     */
    public function getSeuilDeclenche() {
        return $this->seuilDeclenche;
    }

    /**
     * Set the date application.
     *
     * @param DateTime $dateApplication The date application.
     * @return SeuilReposRecup Returns this seuil repos recup.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the nb jour repos recup.
     *
     * @param float $nbJourReposRecup The nb jour repos recup.
     * @return SeuilReposRecup Returns this seuil repos recup.
     */
    public function setNbJourReposRecup($nbJourReposRecup) {
        $this->nbJourReposRecup = $nbJourReposRecup;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return SeuilReposRecup Returns this seuil repos recup.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the seuil declenche.
     *
     * @param float $seuilDeclenche The seuil declenche.
     * @return SeuilReposRecup Returns this seuil repos recup.
     */
    public function setSeuilDeclenche($seuilDeclenche) {
        $this->seuilDeclenche = $seuilDeclenche;
        return $this;
    }
}
