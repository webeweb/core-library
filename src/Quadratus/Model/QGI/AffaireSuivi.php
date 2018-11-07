<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Affaire suivi model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AffaireSuivi {

    /**
     * Avancement.
     *
     * @var float
     */
    private $avancement;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date bilan.
     *
     * @var DateTime
     */
    private $dateBilan;

    /**
     * Liste collab.
     *
     * @var string
     */
    private $listeCollab;

    /**
     * Nb heures previsionnel.
     *
     * @var float
     */
    private $nbHeuresPrevisionnel;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avancement.
     *
     * @return float Returns the avancement.
     */
    public function getAvancement() {
        return $this->avancement;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code phase.
     *
     * @return string Returns the code phase.
     */
    public function getCodePhase() {
        return $this->codePhase;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the date bilan.
     *
     * @return DateTime Returns the date bilan.
     */
    public function getDateBilan() {
        return $this->dateBilan;
    }

    /**
     * Get the liste collab.
     *
     * @return string Returns the liste collab.
     */
    public function getListeCollab() {
        return $this->listeCollab;
    }

    /**
     * Get the nb heures previsionnel.
     *
     * @return float Returns the nb heures previsionnel.
     */
    public function getNbHeuresPrevisionnel() {
        return $this->nbHeuresPrevisionnel;
    }

    /**
     * Set the avancement.
     *
     * @param float $avancement The avancement.
     * @return AffaireSuivi Returns this affaire suivi.
     */
    public function setAvancement($avancement) {
        $this->avancement = $avancement;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return AffaireSuivi Returns this affaire suivi.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     * @return AffaireSuivi Returns this affaire suivi.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return AffaireSuivi Returns this affaire suivi.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date bilan.
     *
     * @param DateTime $dateBilan The date bilan.
     * @return AffaireSuivi Returns this affaire suivi.
     */
    public function setDateBilan(DateTime $dateBilan = null) {
        $this->dateBilan = $dateBilan;
        return $this;
    }

    /**
     * Set the liste collab.
     *
     * @param string $listeCollab The liste collab.
     * @return AffaireSuivi Returns this affaire suivi.
     */
    public function setListeCollab($listeCollab) {
        $this->listeCollab = $listeCollab;
        return $this;
    }

    /**
     * Set the nb heures previsionnel.
     *
     * @param float $nbHeuresPrevisionnel The nb heures previsionnel.
     * @return AffaireSuivi Returns this affaire suivi.
     */
    public function setNbHeuresPrevisionnel($nbHeuresPrevisionnel) {
        $this->nbHeuresPrevisionnel = $nbHeuresPrevisionnel;
        return $this;
    }

}
