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

use DateTime;

/**
 * Appels en cours.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AppelsEnCours {

    /**
     * Avec mise en somm.
     *
     * @var bool
     */
    private $avecMiseEnSomm;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

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
     * Code collaborateur redir.
     *
     * @var string
     */
    private $codeCollaborateurRedir;

    /**
     * Code produit.
     *
     * @var string
     */
    private $codeProduit;

    /**
     * Compteur temps.
     *
     * @var int
     */
    private $compteurTemps;

    /**
     * Confidentiel.
     *
     * @var bool
     */
    private $confidentiel;

    /**
     * Consequence.
     *
     * @var string
     */
    private $consequence;

    /**
     * Date creation client.
     *
     * @var DateTime|null
     */
    private $dateCreationClient;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date message lu.
     *
     * @var DateTime|null
     */
    private $dateMessageLu;

    /**
     * Date redir.
     *
     * @var DateTime|null
     */
    private $dateRedir;

    /**
     * Demande ar.
     *
     * @var bool
     */
    private $demandeAr;

    /**
     * Destinataires a.
     *
     * @var string
     */
    private $destinatairesA;

    /**
     * Destinataires cc.
     *
     * @var string
     */
    private $destinatairesCc;

    /**
     * Email auteur.
     *
     * @var string
     */
    private $emailAuteur;

    /**
     * Groupe qualifiant.
     *
     * @var string
     */
    private $groupeQualifiant;

    /**
     * Id appel.
     *
     * @var int
     */
    private $idAppel;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Message lu.
     *
     * @var bool
     */
    private $messageLu;

    /**
     * Mise en somm date heure.
     *
     * @var DateTime|null
     */
    private $miseEnSommDateHeure;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * Nb appels en cours.
     *
     * @var int
     */
    private $nbAppelsEnCours;

    /**
     * Nom client.
     *
     * @var string
     */
    private $nomClient;

    /**
     * Origine.
     *
     * @var string
     */
    private $origine;

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
     * Sous rep ref guid.
     *
     * @var string
     */
    private $sousRepRefGuid;

    /**
     * Special.
     *
     * @var string
     */
    private $special;

    /**
     * Tel.
     *
     * @var string
     */
    private $tel;

    /**
     * Type message.
     *
     * @var string
     */
    private $typeMessage;

    /**
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

    /**
     * Urgent.
     *
     * @var bool
     */
    private $urgent;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avec mise en somm.
     *
     * @return bool Returns the avec mise en somm.
     */
    public function getAvecMiseEnSomm() {
        return $this->avecMiseEnSomm;
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
     * Get the code collaborateur redir.
     *
     * @return string Returns the code collaborateur redir.
     */
    public function getCodeCollaborateurRedir() {
        return $this->codeCollaborateurRedir;
    }

    /**
     * Get the code produit.
     *
     * @return string Returns the code produit.
     */
    public function getCodeProduit() {
        return $this->codeProduit;
    }

    /**
     * Get the compteur temps.
     *
     * @return int Returns the compteur temps.
     */
    public function getCompteurTemps() {
        return $this->compteurTemps;
    }

    /**
     * Get the confidentiel.
     *
     * @return bool Returns the confidentiel.
     */
    public function getConfidentiel() {
        return $this->confidentiel;
    }

    /**
     * Get the consequence.
     *
     * @return string Returns the consequence.
     */
    public function getConsequence() {
        return $this->consequence;
    }

    /**
     * Get the date creation client.
     *
     * @return DateTime|null Returns the date creation client.
     */
    public function getDateCreationClient() {
        return $this->dateCreationClient;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date message lu.
     *
     * @return DateTime|null Returns the date message lu.
     */
    public function getDateMessageLu() {
        return $this->dateMessageLu;
    }

    /**
     * Get the date redir.
     *
     * @return DateTime|null Returns the date redir.
     */
    public function getDateRedir() {
        return $this->dateRedir;
    }

    /**
     * Get the demande ar.
     *
     * @return bool Returns the demande ar.
     */
    public function getDemandeAr() {
        return $this->demandeAr;
    }

    /**
     * Get the destinataires a.
     *
     * @return string Returns the destinataires a.
     */
    public function getDestinatairesA() {
        return $this->destinatairesA;
    }

    /**
     * Get the destinataires cc.
     *
     * @return string Returns the destinataires cc.
     */
    public function getDestinatairesCc() {
        return $this->destinatairesCc;
    }

    /**
     * Get the email auteur.
     *
     * @return string Returns the email auteur.
     */
    public function getEmailAuteur() {
        return $this->emailAuteur;
    }

    /**
     * Get the groupe qualifiant.
     *
     * @return string Returns the groupe qualifiant.
     */
    public function getGroupeQualifiant() {
        return $this->groupeQualifiant;
    }

    /**
     * Get the id appel.
     *
     * @return int Returns the id appel.
     */
    public function getIdAppel() {
        return $this->idAppel;
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
     * Get the message lu.
     *
     * @return bool Returns the message lu.
     */
    public function getMessageLu() {
        return $this->messageLu;
    }

    /**
     * Get the mise en somm date heure.
     *
     * @return DateTime|null Returns the mise en somm date heure.
     */
    public function getMiseEnSommDateHeure() {
        return $this->miseEnSommDateHeure;
    }

    /**
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the nb appels en cours.
     *
     * @return int Returns the nb appels en cours.
     */
    public function getNbAppelsEnCours() {
        return $this->nbAppelsEnCours;
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
     * Get the origine.
     *
     * @return string Returns the origine.
     */
    public function getOrigine() {
        return $this->origine;
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
     * Get the sous rep ref guid.
     *
     * @return string Returns the sous rep ref guid.
     */
    public function getSousRepRefGuid() {
        return $this->sousRepRefGuid;
    }

    /**
     * Get the special.
     *
     * @return string Returns the special.
     */
    public function getSpecial() {
        return $this->special;
    }

    /**
     * Get the tel.
     *
     * @return string Returns the tel.
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Get the type message.
     *
     * @return string Returns the type message.
     */
    public function getTypeMessage() {
        return $this->typeMessage;
    }

    /**
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Get the urgent.
     *
     * @return bool Returns the urgent.
     */
    public function getUrgent() {
        return $this->urgent;
    }

    /**
     * Set the avec mise en somm.
     *
     * @param bool $avecMiseEnSomm The avec mise en somm.
     */
    public function setAvecMiseEnSomm($avecMiseEnSomm) {
        $this->avecMiseEnSomm = $avecMiseEnSomm;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur dest.
     *
     * @param string $codeCollaborateurDest The code collaborateur dest.
     */
    public function setCodeCollaborateurDest($codeCollaborateurDest) {
        $this->codeCollaborateurDest = $codeCollaborateurDest;
        return $this;
    }

    /**
     * Set the code collaborateur entrant.
     *
     * @param string $codeCollaborateurEntrant The code collaborateur entrant.
     */
    public function setCodeCollaborateurEntrant($codeCollaborateurEntrant) {
        $this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
        return $this;
    }

    /**
     * Set the code collaborateur redir.
     *
     * @param string $codeCollaborateurRedir The code collaborateur redir.
     */
    public function setCodeCollaborateurRedir($codeCollaborateurRedir) {
        $this->codeCollaborateurRedir = $codeCollaborateurRedir;
        return $this;
    }

    /**
     * Set the code produit.
     *
     * @param string $codeProduit The code produit.
     */
    public function setCodeProduit($codeProduit) {
        $this->codeProduit = $codeProduit;
        return $this;
    }

    /**
     * Set the compteur temps.
     *
     * @param int $compteurTemps The compteur temps.
     */
    public function setCompteurTemps($compteurTemps) {
        $this->compteurTemps = $compteurTemps;
        return $this;
    }

    /**
     * Set the confidentiel.
     *
     * @param bool $confidentiel The confidentiel.
     */
    public function setConfidentiel($confidentiel) {
        $this->confidentiel = $confidentiel;
        return $this;
    }

    /**
     * Set the consequence.
     *
     * @param string $consequence The consequence.
     */
    public function setConsequence($consequence) {
        $this->consequence = $consequence;
        return $this;
    }

    /**
     * Set the date creation client.
     *
     * @param DateTime|null $dateCreationClient The date creation client.
     */
    public function setDateCreationClient(DateTime $dateCreationClient = null) {
        $this->dateCreationClient = $dateCreationClient;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date message lu.
     *
     * @param DateTime|null $dateMessageLu The date message lu.
     */
    public function setDateMessageLu(DateTime $dateMessageLu = null) {
        $this->dateMessageLu = $dateMessageLu;
        return $this;
    }

    /**
     * Set the date redir.
     *
     * @param DateTime|null $dateRedir The date redir.
     */
    public function setDateRedir(DateTime $dateRedir = null) {
        $this->dateRedir = $dateRedir;
        return $this;
    }

    /**
     * Set the demande ar.
     *
     * @param bool $demandeAr The demande ar.
     */
    public function setDemandeAr($demandeAr) {
        $this->demandeAr = $demandeAr;
        return $this;
    }

    /**
     * Set the destinataires a.
     *
     * @param string $destinatairesA The destinataires a.
     */
    public function setDestinatairesA($destinatairesA) {
        $this->destinatairesA = $destinatairesA;
        return $this;
    }

    /**
     * Set the destinataires cc.
     *
     * @param string $destinatairesCc The destinataires cc.
     */
    public function setDestinatairesCc($destinatairesCc) {
        $this->destinatairesCc = $destinatairesCc;
        return $this;
    }

    /**
     * Set the email auteur.
     *
     * @param string $emailAuteur The email auteur.
     */
    public function setEmailAuteur($emailAuteur) {
        $this->emailAuteur = $emailAuteur;
        return $this;
    }

    /**
     * Set the groupe qualifiant.
     *
     * @param string $groupeQualifiant The groupe qualifiant.
     */
    public function setGroupeQualifiant($groupeQualifiant) {
        $this->groupeQualifiant = $groupeQualifiant;
        return $this;
    }

    /**
     * Set the id appel.
     *
     * @param int $idAppel The id appel.
     */
    public function setIdAppel($idAppel) {
        $this->idAppel = $idAppel;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the message lu.
     *
     * @param bool $messageLu The message lu.
     */
    public function setMessageLu($messageLu) {
        $this->messageLu = $messageLu;
        return $this;
    }

    /**
     * Set the mise en somm date heure.
     *
     * @param DateTime|null $miseEnSommDateHeure The mise en somm date heure.
     */
    public function setMiseEnSommDateHeure(DateTime $miseEnSommDateHeure = null) {
        $this->miseEnSommDateHeure = $miseEnSommDateHeure;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the nb appels en cours.
     *
     * @param int $nbAppelsEnCours The nb appels en cours.
     */
    public function setNbAppelsEnCours($nbAppelsEnCours) {
        $this->nbAppelsEnCours = $nbAppelsEnCours;
        return $this;
    }

    /**
     * Set the nom client.
     *
     * @param string $nomClient The nom client.
     */
    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param string $origine The origine.
     */
    public function setOrigine($origine) {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the piece jointe.
     *
     * @param string $pieceJointe The piece jointe.
     */
    public function setPieceJointe($pieceJointe) {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }

    /**
     * Set the reponse.
     *
     * @param string $reponse The reponse.
     */
    public function setReponse($reponse) {
        $this->reponse = $reponse;
        return $this;
    }

    /**
     * Set the sous rep ref guid.
     *
     * @param string $sousRepRefGuid The sous rep ref guid.
     */
    public function setSousRepRefGuid($sousRepRefGuid) {
        $this->sousRepRefGuid = $sousRepRefGuid;
        return $this;
    }

    /**
     * Set the special.
     *
     * @param string $special The special.
     */
    public function setSpecial($special) {
        $this->special = $special;
        return $this;
    }

    /**
     * Set the tel.
     *
     * @param string $tel The tel.
     */
    public function setTel($tel) {
        $this->tel = $tel;
        return $this;
    }

    /**
     * Set the type message.
     *
     * @param string $typeMessage The type message.
     */
    public function setTypeMessage($typeMessage) {
        $this->typeMessage = $typeMessage;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the urgent.
     *
     * @param bool $urgent The urgent.
     */
    public function setUrgent($urgent) {
        $this->urgent = $urgent;
        return $this;
    }
}
