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
 * Historique travaux model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class HistoriqueTravaux {

    /**
     * Cataloguee.
     *
     * @var boolean
     */
    private $cataloguee;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collaborateur clot.
     *
     * @var string
     */
    private $codeCollaborateurClot;

    /**
     * Code collaborateur dest.
     *
     * @var string
     */
    private $codeCollaborateurDest;

    /**
     * Code collaborateur entrant.
     *
     * @var string
     */
    private $codeCollaborateurEntrant;

    /**
     * Date alerte.
     *
     * @var DateTime
     */
    private $dateAlerte;

    /**
     * Date butoir.
     *
     * @var DateTime
     */
    private $dateButoir;

    /**
     * Date entree.
     *
     * @var DateTime
     */
    private $dateEntree;

    /**
     * Date sortie.
     *
     * @var DateTime
     */
    private $dateSortie;

    /**
     * Demandeur.
     *
     * @var string
     */
    private $demandeur;

    /**
     * Duree.
     *
     * @var int
     */
    private $duree;

    /**
     * I d travail.
     *
     * @var int
     */
    private $iDTravail;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Nom client.
     *
     * @var string
     */
    private $nomClient;

    /**
     * Piece jointe.
     *
     * @var string
     */
    private $pieceJointe;

    /**
     * Reponse.
     *
     * @var string
     */
    private $reponse;

    /**
     * Travail fait.
     *
     * @var boolean
     */
    private $travailFait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the cataloguee.
     *
     * @return boolean Returns the cataloguee.
     */
    public function getCataloguee() {
        return $this->cataloguee;
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
     * Get the code collaborateur clot.
     *
     * @return string Returns the code collaborateur clot.
     */
    public function getCodeCollaborateurClot() {
        return $this->codeCollaborateurClot;
    }

    /**
     * Get the code collaborateur dest.
     *
     * @return string Returns the code collaborateur dest.
     */
    public function getCodeCollaborateurDest() {
        return $this->codeCollaborateurDest;
    }

    /**
     * Get the code collaborateur entrant.
     *
     * @return string Returns the code collaborateur entrant.
     */
    public function getCodeCollaborateurEntrant() {
        return $this->codeCollaborateurEntrant;
    }

    /**
     * Get the date alerte.
     *
     * @return DateTime Returns the date alerte.
     */
    public function getDateAlerte() {
        return $this->dateAlerte;
    }

    /**
     * Get the date butoir.
     *
     * @return DateTime Returns the date butoir.
     */
    public function getDateButoir() {
        return $this->dateButoir;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the demandeur.
     *
     * @return string Returns the demandeur.
     */
    public function getDemandeur() {
        return $this->demandeur;
    }

    /**
     * Get the duree.
     *
     * @return int Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Get the i d travail.
     *
     * @return int Returns the i d travail.
     */
    public function getIDTravail() {
        return $this->iDTravail;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the nom client.
     *
     * @return string Returns the nom client.
     */
    public function getNomClient() {
        return $this->nomClient;
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
     * Get the reponse.
     *
     * @return string Returns the reponse.
     */
    public function getReponse() {
        return $this->reponse;
    }

    /**
     * Get the travail fait.
     *
     * @return boolean Returns the travail fait.
     */
    public function getTravailFait() {
        return $this->travailFait;
    }

    /**
     * Set the cataloguee.
     *
     * @param boolean $cataloguee The cataloguee.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setCataloguee($cataloguee) {
        $this->cataloguee = $cataloguee;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur clot.
     *
     * @param string $codeCollaborateurClot The code collaborateur clot.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setCodeCollaborateurClot($codeCollaborateurClot) {
        $this->codeCollaborateurClot = $codeCollaborateurClot;
        return $this;
    }

    /**
     * Set the code collaborateur dest.
     *
     * @param string $codeCollaborateurDest The code collaborateur dest.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setCodeCollaborateurDest($codeCollaborateurDest) {
        $this->codeCollaborateurDest = $codeCollaborateurDest;
        return $this;
    }

    /**
     * Set the code collaborateur entrant.
     *
     * @param string $codeCollaborateurEntrant The code collaborateur entrant.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setCodeCollaborateurEntrant($codeCollaborateurEntrant) {
        $this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
        return $this;
    }

    /**
     * Set the date alerte.
     *
     * @param DateTime $dateAlerte The date alerte.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setDateAlerte(DateTime $dateAlerte = null) {
        $this->dateAlerte = $dateAlerte;
        return $this;
    }

    /**
     * Set the date butoir.
     *
     * @param DateTime $dateButoir The date butoir.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setDateButoir(DateTime $dateButoir = null) {
        $this->dateButoir = $dateButoir;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime $dateEntree The date entree.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime $dateSortie The date sortie.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the demandeur.
     *
     * @param string $demandeur The demandeur.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setDemandeur($demandeur) {
        $this->demandeur = $demandeur;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the i d travail.
     *
     * @param int $iDTravail The i d travail.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setIDTravail($iDTravail) {
        $this->iDTravail = $iDTravail;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string $nomClient The nom client.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string $pieceJointe The piece jointe.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setPieceJointe($pieceJointe) {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the reponse.
     *
     * @param string $reponse The reponse.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setReponse($reponse) {
        $this->reponse = $reponse;
        return $this;
    }

    /**
     * Set the travail fait.
     *
     * @param boolean $travailFait The travail fait.
     * @return HistoriqueTravaux Returns this historique travaux.
     */
    public function setTravailFait($travailFait) {
        $this->travailFait = $travailFait;
        return $this;
    }

}
