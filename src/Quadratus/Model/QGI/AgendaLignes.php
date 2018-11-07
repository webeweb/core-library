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
 * Agenda lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AgendaLignes {

    /**
     * Budget num uniq.
     *
     * @var string
     */
    private $budgetNumUniq;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Coll creation.
     *
     * @var string
     */
    private $collCreation;

    /**
     * Coll modif.
     *
     * @var string
     */
    private $collModif;

    /**
     * Confirme.
     *
     * @var boolean
     */
    private $confirme;

    /**
     * Critere libre.
     *
     * @var string
     */
    private $critereLibre;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date modif.
     *
     * @var DateTime
     */
    private $dateModif;

    /**
     * Heure debut.
     *
     * @var DateTime
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var DateTime
     */
    private $heureFin;

    /**
     * Interlocuteur.
     *
     * @var string
     */
    private $interlocuteur;

    /**
     * Is tache t p.
     *
     * @var int
     */
    private $isTacheTP;

    /**
     * Is transf.
     *
     * @var boolean
     */
    private $isTransf;

    /**
     * Jour.
     *
     * @var DateTime
     */
    private $jour;

    /**
     * Memo plus.
     *
     * @var string
     */
    private $memoPlus;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Num ordre mission.
     *
     * @var string
     */
    private $numOrdreMission;

    /**
     * Num uniq.
     *
     * @var string
     */
    private $numUniq;

    /**
     * Num uniq2.
     *
     * @var string
     */
    private $numUniq2;

    /**
     * Piece jointe.
     *
     * @var string
     */
    private $pieceJointe;

    /**
     * Prive.
     *
     * @var boolean
     */
    private $prive;

    /**
     * Recurrence.
     *
     * @var string
     */
    private $recurrence;

    /**
     * Type activite.
     *
     * @var string
     */
    private $typeActivite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the budget num uniq.
     *
     * @return string Returns the budget num uniq.
     */
    public function getBudgetNumUniq() {
        return $this->budgetNumUniq;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
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
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the coll creation.
     *
     * @return string Returns the coll creation.
     */
    public function getCollCreation() {
        return $this->collCreation;
    }

    /**
     * Get the coll modif.
     *
     * @return string Returns the coll modif.
     */
    public function getCollModif() {
        return $this->collModif;
    }

    /**
     * Get the confirme.
     *
     * @return boolean Returns the confirme.
     */
    public function getConfirme() {
        return $this->confirme;
    }

    /**
     * Get the critere libre.
     *
     * @return string Returns the critere libre.
     */
    public function getCritereLibre() {
        return $this->critereLibre;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the heure debut.
     *
     * @return DateTime Returns the heure debut.
     */
    public function getHeureDebut() {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime Returns the heure fin.
     */
    public function getHeureFin() {
        return $this->heureFin;
    }

    /**
     * Get the interlocuteur.
     *
     * @return string Returns the interlocuteur.
     */
    public function getInterlocuteur() {
        return $this->interlocuteur;
    }

    /**
     * Get the is tache t p.
     *
     * @return int Returns the is tache t p.
     */
    public function getIsTacheTP() {
        return $this->isTacheTP;
    }

    /**
     * Get the is transf.
     *
     * @return boolean Returns the is transf.
     */
    public function getIsTransf() {
        return $this->isTransf;
    }

    /**
     * Get the jour.
     *
     * @return DateTime Returns the jour.
     */
    public function getJour() {
        return $this->jour;
    }

    /**
     * Get the memo plus.
     *
     * @return string Returns the memo plus.
     */
    public function getMemoPlus() {
        return $this->memoPlus;
    }

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Get the num ordre mission.
     *
     * @return string Returns the num ordre mission.
     */
    public function getNumOrdreMission() {
        return $this->numOrdreMission;
    }

    /**
     * Get the num uniq.
     *
     * @return string Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the num uniq2.
     *
     * @return string Returns the num uniq2.
     */
    public function getNumUniq2() {
        return $this->numUniq2;
    }

    /**
     * Get the piece jointe.
     *
     * @return string Returns the piece jointe.
     */
    public function getPieceJointe() {
        return $this->pieceJointe;
    }

    /**
     * Get the prive.
     *
     * @return boolean Returns the prive.
     */
    public function getPrive() {
        return $this->prive;
    }

    /**
     * Get the recurrence.
     *
     * @return string Returns the recurrence.
     */
    public function getRecurrence() {
        return $this->recurrence;
    }

    /**
     * Get the type activite.
     *
     * @return string Returns the type activite.
     */
    public function getTypeActivite() {
        return $this->typeActivite;
    }

    /**
     * Set the budget num uniq.
     *
     * @param string $budgetNumUniq The budget num uniq.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setBudgetNumUniq($budgetNumUniq) {
        $this->budgetNumUniq = $budgetNumUniq;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the coll creation.
     *
     * @param string $collCreation The coll creation.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setCollCreation($collCreation) {
        $this->collCreation = $collCreation;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string $collModif The coll modif.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setCollModif($collModif) {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the confirme.
     *
     * @param boolean $confirme The confirme.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setConfirme($confirme) {
        $this->confirme = $confirme;
        return $this;
    }

    /**
     * Set the critere libre.
     *
     * @param string $critereLibre The critere libre.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setCritereLibre($critereLibre) {
        $this->critereLibre = $critereLibre;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime $dateModif The date modif.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param DateTime $heureDebut The heure debut.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setHeureDebut(DateTime $heureDebut = null) {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime $heureFin The heure fin.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setHeureFin(DateTime $heureFin = null) {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the interlocuteur.
     *
     * @param string $interlocuteur The interlocuteur.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setInterlocuteur($interlocuteur) {
        $this->interlocuteur = $interlocuteur;
        return $this;
    }

    /**
     * Set the is tache t p.
     *
     * @param int $isTacheTP The is tache t p.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setIsTacheTP($isTacheTP) {
        $this->isTacheTP = $isTacheTP;
        return $this;
    }

    /**
     * Set the is transf.
     *
     * @param boolean $isTransf The is transf.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setIsTransf($isTransf) {
        $this->isTransf = $isTransf;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param DateTime $jour The jour.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setJour(DateTime $jour = null) {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the memo plus.
     *
     * @param string $memoPlus The memo plus.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setMemoPlus($memoPlus) {
        $this->memoPlus = $memoPlus;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the num ordre mission.
     *
     * @param string $numOrdreMission The num ordre mission.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setNumOrdreMission($numOrdreMission) {
        $this->numOrdreMission = $numOrdreMission;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string $numUniq The num uniq.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the num uniq2.
     *
     * @param string $numUniq2 The num uniq2.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setNumUniq2($numUniq2) {
        $this->numUniq2 = $numUniq2;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string $pieceJointe The piece jointe.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setPieceJointe($pieceJointe) {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the prive.
     *
     * @param boolean $prive The prive.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setPrive($prive) {
        $this->prive = $prive;
        return $this;
    }

    /**
     * Set the recurrence.
     *
     * @param string $recurrence The recurrence.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setRecurrence($recurrence) {
        $this->recurrence = $recurrence;
        return $this;
    }

    /**
     * Set the type activite.
     *
     * @param string $typeActivite The type activite.
     * @return AgendaLignes Returns this agenda lignes.
     */
    public function setTypeActivite($typeActivite) {
        $this->typeActivite = $typeActivite;
        return $this;
    }

}
