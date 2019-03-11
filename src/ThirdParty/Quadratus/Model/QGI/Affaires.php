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
 * Affaires model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Affaires {

    /**
     * Client donneur ordre.
     *
     * @var string
     */
    private $clientDonneurOrdre;

    /**
     * Client payeur.
     *
     * @var string
     */
    private $clientPayeur;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code avenant.
     *
     * @var string
     */
    private $codeAvenant;

    /**
     * Code col creat.
     *
     * @var string
     */
    private $codeColCreat;

    /**
     * Code col modif.
     *
     * @var string
     */
    private $codeColModif;

    /**
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Cout heure theo.
     *
     * @var float
     */
    private $coutHeureTheo;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date debut prevue.
     *
     * @var DateTime
     */
    private $dateDebutPrevue;

    /**
     * Date debut reelle.
     *
     * @var DateTime
     */
    private $dateDebutReelle;

    /**
     * Date fin prevue.
     *
     * @var DateTime
     */
    private $dateFinPrevue;

    /**
     * Date fin reelle.
     *
     * @var DateTime
     */
    private $dateFinReelle;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Ech en mt.
     *
     * @var bool
     */
    private $echEnMt;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Etat1.
     *
     * @var string
     */
    private $etat1;

    /**
     * Etat2.
     *
     * @var string
     */
    private $etat2;

    /**
     * Etat3.
     *
     * @var string
     */
    private $etat3;

    /**
     * Etat4.
     *
     * @var string
     */
    private $etat4;

    /**
     * Etat5.
     *
     * @var string
     */
    private $etat5;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Liste collab acces.
     *
     * @var string
     */
    private $listeCollabAcces;

    /**
     * Mt c a prevu.
     *
     * @var float
     */
    private $mtCAPrevu;

    /**
     * Nb heures interim.
     *
     * @var float
     */
    private $nbHeuresInterim;

    /**
     * Nb heures prevues.
     *
     * @var float
     */
    private $nbHeuresPrevues;

    /**
     * Nb heures reel interim.
     *
     * @var float
     */
    private $nbHeuresReelInterim;

    /**
     * Nb heures reel sous trait.
     *
     * @var float
     */
    private $nbHeuresReelSousTrait;

    /**
     * Nb heures sous trait.
     *
     * @var float
     */
    private $nbHeuresSousTrait;

    /**
     * Nb inscrits.
     *
     * @var int
     */
    private $nbInscrits;

    /**
     * Nb jours prevus.
     *
     * @var float
     */
    private $nbJoursPrevus;

    /**
     * Nb jours reels.
     *
     * @var float
     */
    private $nbJoursReels;

    /**
     * Prochain num arr.
     *
     * @var int
     */
    private $prochainNumArr;

    /**
     * Ref devis.
     *
     * @var string
     */
    private $refDevis;

    /**
     * Responsable.
     *
     * @var string
     */
    private $responsable;

    /**
     * Responsable chantier.
     *
     * @var string
     */
    private $responsableChantier;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Type f g.
     *
     * @var string
     */
    private $typeFG;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the client donneur ordre.
     *
     * @return string Returns the client donneur ordre.
     */
    public function getClientDonneurOrdre() {
        return $this->clientDonneurOrdre;
    }

    /**
     * Get the client payeur.
     *
     * @return string Returns the client payeur.
     */
    public function getClientPayeur() {
        return $this->clientPayeur;
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
     * Get the code avenant.
     *
     * @return string Returns the code avenant.
     */
    public function getCodeAvenant() {
        return $this->codeAvenant;
    }

    /**
     * Get the code col creat.
     *
     * @return string Returns the code col creat.
     */
    public function getCodeColCreat() {
        return $this->codeColCreat;
    }

    /**
     * Get the code col modif.
     *
     * @return string Returns the code col modif.
     */
    public function getCodeColModif() {
        return $this->codeColModif;
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
     * Get the cout heure theo.
     *
     * @return float Returns the cout heure theo.
     */
    public function getCoutHeureTheo() {
        return $this->coutHeureTheo;
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
     * Get the date debut prevue.
     *
     * @return DateTime Returns the date debut prevue.
     */
    public function getDateDebutPrevue() {
        return $this->dateDebutPrevue;
    }

    /**
     * Get the date debut reelle.
     *
     * @return DateTime Returns the date debut reelle.
     */
    public function getDateDebutReelle() {
        return $this->dateDebutReelle;
    }

    /**
     * Get the date fin prevue.
     *
     * @return DateTime Returns the date fin prevue.
     */
    public function getDateFinPrevue() {
        return $this->dateFinPrevue;
    }

    /**
     * Get the date fin reelle.
     *
     * @return DateTime Returns the date fin reelle.
     */
    public function getDateFinReelle() {
        return $this->dateFinReelle;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the ech en mt.
     *
     * @return bool Returns the ech en mt.
     */
    public function getEchEnMt() {
        return $this->echEnMt;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the etat1.
     *
     * @return string Returns the etat1.
     */
    public function getEtat1() {
        return $this->etat1;
    }

    /**
     * Get the etat2.
     *
     * @return string Returns the etat2.
     */
    public function getEtat2() {
        return $this->etat2;
    }

    /**
     * Get the etat3.
     *
     * @return string Returns the etat3.
     */
    public function getEtat3() {
        return $this->etat3;
    }

    /**
     * Get the etat4.
     *
     * @return string Returns the etat4.
     */
    public function getEtat4() {
        return $this->etat4;
    }

    /**
     * Get the etat5.
     *
     * @return string Returns the etat5.
     */
    public function getEtat5() {
        return $this->etat5;
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
     * Get the liste collab acces.
     *
     * @return string Returns the liste collab acces.
     */
    public function getListeCollabAcces() {
        return $this->listeCollabAcces;
    }

    /**
     * Get the mt c a prevu.
     *
     * @return float Returns the mt c a prevu.
     */
    public function getMtCAPrevu() {
        return $this->mtCAPrevu;
    }

    /**
     * Get the nb heures interim.
     *
     * @return float Returns the nb heures interim.
     */
    public function getNbHeuresInterim() {
        return $this->nbHeuresInterim;
    }

    /**
     * Get the nb heures prevues.
     *
     * @return float Returns the nb heures prevues.
     */
    public function getNbHeuresPrevues() {
        return $this->nbHeuresPrevues;
    }

    /**
     * Get the nb heures reel interim.
     *
     * @return float Returns the nb heures reel interim.
     */
    public function getNbHeuresReelInterim() {
        return $this->nbHeuresReelInterim;
    }

    /**
     * Get the nb heures reel sous trait.
     *
     * @return float Returns the nb heures reel sous trait.
     */
    public function getNbHeuresReelSousTrait() {
        return $this->nbHeuresReelSousTrait;
    }

    /**
     * Get the nb heures sous trait.
     *
     * @return float Returns the nb heures sous trait.
     */
    public function getNbHeuresSousTrait() {
        return $this->nbHeuresSousTrait;
    }

    /**
     * Get the nb inscrits.
     *
     * @return int Returns the nb inscrits.
     */
    public function getNbInscrits() {
        return $this->nbInscrits;
    }

    /**
     * Get the nb jours prevus.
     *
     * @return float Returns the nb jours prevus.
     */
    public function getNbJoursPrevus() {
        return $this->nbJoursPrevus;
    }

    /**
     * Get the nb jours reels.
     *
     * @return float Returns the nb jours reels.
     */
    public function getNbJoursReels() {
        return $this->nbJoursReels;
    }

    /**
     * Get the prochain num arr.
     *
     * @return int Returns the prochain num arr.
     */
    public function getProchainNumArr() {
        return $this->prochainNumArr;
    }

    /**
     * Get the ref devis.
     *
     * @return string Returns the ref devis.
     */
    public function getRefDevis() {
        return $this->refDevis;
    }

    /**
     * Get the responsable.
     *
     * @return string Returns the responsable.
     */
    public function getResponsable() {
        return $this->responsable;
    }

    /**
     * Get the responsable chantier.
     *
     * @return string Returns the responsable chantier.
     */
    public function getResponsableChantier() {
        return $this->responsableChantier;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the type f g.
     *
     * @return string Returns the type f g.
     */
    public function getTypeFG() {
        return $this->typeFG;
    }

    /**
     * Set the client donneur ordre.
     *
     * @param string $clientDonneurOrdre The client donneur ordre.
     * @return Affaires Returns this affaires.
     */
    public function setClientDonneurOrdre($clientDonneurOrdre) {
        $this->clientDonneurOrdre = $clientDonneurOrdre;
        return $this;
    }

    /**
     * Set the client payeur.
     *
     * @param string $clientPayeur The client payeur.
     * @return Affaires Returns this affaires.
     */
    public function setClientPayeur($clientPayeur) {
        $this->clientPayeur = $clientPayeur;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return Affaires Returns this affaires.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string $codeAvenant The code avenant.
     * @return Affaires Returns this affaires.
     */
    public function setCodeAvenant($codeAvenant) {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code col creat.
     *
     * @param string $codeColCreat The code col creat.
     * @return Affaires Returns this affaires.
     */
    public function setCodeColCreat($codeColCreat) {
        $this->codeColCreat = $codeColCreat;
        return $this;
    }

    /**
     * Set the code col modif.
     *
     * @param string $codeColModif The code col modif.
     * @return Affaires Returns this affaires.
     */
    public function setCodeColModif($codeColModif) {
        $this->codeColModif = $codeColModif;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     * @return Affaires Returns this affaires.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the cout heure theo.
     *
     * @param float $coutHeureTheo The cout heure theo.
     * @return Affaires Returns this affaires.
     */
    public function setCoutHeureTheo($coutHeureTheo) {
        $this->coutHeureTheo = $coutHeureTheo;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Affaires Returns this affaires.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date debut prevue.
     *
     * @param DateTime $dateDebutPrevue The date debut prevue.
     * @return Affaires Returns this affaires.
     */
    public function setDateDebutPrevue(DateTime $dateDebutPrevue = null) {
        $this->dateDebutPrevue = $dateDebutPrevue;
        return $this;
    }

    /**
     * Set the date debut reelle.
     *
     * @param DateTime $dateDebutReelle The date debut reelle.
     * @return Affaires Returns this affaires.
     */
    public function setDateDebutReelle(DateTime $dateDebutReelle = null) {
        $this->dateDebutReelle = $dateDebutReelle;
        return $this;
    }

    /**
     * Set the date fin prevue.
     *
     * @param DateTime $dateFinPrevue The date fin prevue.
     * @return Affaires Returns this affaires.
     */
    public function setDateFinPrevue(DateTime $dateFinPrevue = null) {
        $this->dateFinPrevue = $dateFinPrevue;
        return $this;
    }

    /**
     * Set the date fin reelle.
     *
     * @param DateTime $dateFinReelle The date fin reelle.
     * @return Affaires Returns this affaires.
     */
    public function setDateFinReelle(DateTime $dateFinReelle = null) {
        $this->dateFinReelle = $dateFinReelle;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Affaires Returns this affaires.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the ech en mt.
     *
     * @param bool $echEnMt The ech en mt.
     * @return Affaires Returns this affaires.
     */
    public function setEchEnMt($echEnMt) {
        $this->echEnMt = $echEnMt;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return Affaires Returns this affaires.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the etat1.
     *
     * @param string $etat1 The etat1.
     * @return Affaires Returns this affaires.
     */
    public function setEtat1($etat1) {
        $this->etat1 = $etat1;
        return $this;
    }

    /**
     * Set the etat2.
     *
     * @param string $etat2 The etat2.
     * @return Affaires Returns this affaires.
     */
    public function setEtat2($etat2) {
        $this->etat2 = $etat2;
        return $this;
    }

    /**
     * Set the etat3.
     *
     * @param string $etat3 The etat3.
     * @return Affaires Returns this affaires.
     */
    public function setEtat3($etat3) {
        $this->etat3 = $etat3;
        return $this;
    }

    /**
     * Set the etat4.
     *
     * @param string $etat4 The etat4.
     * @return Affaires Returns this affaires.
     */
    public function setEtat4($etat4) {
        $this->etat4 = $etat4;
        return $this;
    }

    /**
     * Set the etat5.
     *
     * @param string $etat5 The etat5.
     * @return Affaires Returns this affaires.
     */
    public function setEtat5($etat5) {
        $this->etat5 = $etat5;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Affaires Returns this affaires.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the liste collab acces.
     *
     * @param string $listeCollabAcces The liste collab acces.
     * @return Affaires Returns this affaires.
     */
    public function setListeCollabAcces($listeCollabAcces) {
        $this->listeCollabAcces = $listeCollabAcces;
        return $this;
    }

    /**
     * Set the mt c a prevu.
     *
     * @param float $mtCAPrevu The mt c a prevu.
     * @return Affaires Returns this affaires.
     */
    public function setMtCAPrevu($mtCAPrevu) {
        $this->mtCAPrevu = $mtCAPrevu;
        return $this;
    }

    /**
     * Set the nb heures interim.
     *
     * @param float $nbHeuresInterim The nb heures interim.
     * @return Affaires Returns this affaires.
     */
    public function setNbHeuresInterim($nbHeuresInterim) {
        $this->nbHeuresInterim = $nbHeuresInterim;
        return $this;
    }

    /**
     * Set the nb heures prevues.
     *
     * @param float $nbHeuresPrevues The nb heures prevues.
     * @return Affaires Returns this affaires.
     */
    public function setNbHeuresPrevues($nbHeuresPrevues) {
        $this->nbHeuresPrevues = $nbHeuresPrevues;
        return $this;
    }

    /**
     * Set the nb heures reel interim.
     *
     * @param float $nbHeuresReelInterim The nb heures reel interim.
     * @return Affaires Returns this affaires.
     */
    public function setNbHeuresReelInterim($nbHeuresReelInterim) {
        $this->nbHeuresReelInterim = $nbHeuresReelInterim;
        return $this;
    }

    /**
     * Set the nb heures reel sous trait.
     *
     * @param float $nbHeuresReelSousTrait The nb heures reel sous trait.
     * @return Affaires Returns this affaires.
     */
    public function setNbHeuresReelSousTrait($nbHeuresReelSousTrait) {
        $this->nbHeuresReelSousTrait = $nbHeuresReelSousTrait;
        return $this;
    }

    /**
     * Set the nb heures sous trait.
     *
     * @param float $nbHeuresSousTrait The nb heures sous trait.
     * @return Affaires Returns this affaires.
     */
    public function setNbHeuresSousTrait($nbHeuresSousTrait) {
        $this->nbHeuresSousTrait = $nbHeuresSousTrait;
        return $this;
    }

    /**
     * Set the nb inscrits.
     *
     * @param int $nbInscrits The nb inscrits.
     * @return Affaires Returns this affaires.
     */
    public function setNbInscrits($nbInscrits) {
        $this->nbInscrits = $nbInscrits;
        return $this;
    }

    /**
     * Set the nb jours prevus.
     *
     * @param float $nbJoursPrevus The nb jours prevus.
     * @return Affaires Returns this affaires.
     */
    public function setNbJoursPrevus($nbJoursPrevus) {
        $this->nbJoursPrevus = $nbJoursPrevus;
        return $this;
    }

    /**
     * Set the nb jours reels.
     *
     * @param float $nbJoursReels The nb jours reels.
     * @return Affaires Returns this affaires.
     */
    public function setNbJoursReels($nbJoursReels) {
        $this->nbJoursReels = $nbJoursReels;
        return $this;
    }

    /**
     * Set the prochain num arr.
     *
     * @param int $prochainNumArr The prochain num arr.
     * @return Affaires Returns this affaires.
     */
    public function setProchainNumArr($prochainNumArr) {
        $this->prochainNumArr = $prochainNumArr;
        return $this;
    }

    /**
     * Set the ref devis.
     *
     * @param string $refDevis The ref devis.
     * @return Affaires Returns this affaires.
     */
    public function setRefDevis($refDevis) {
        $this->refDevis = $refDevis;
        return $this;
    }

    /**
     * Set the responsable.
     *
     * @param string $responsable The responsable.
     * @return Affaires Returns this affaires.
     */
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
        return $this;
    }

    /**
     * Set the responsable chantier.
     *
     * @param string $responsableChantier The responsable chantier.
     * @return Affaires Returns this affaires.
     */
    public function setResponsableChantier($responsableChantier) {
        $this->responsableChantier = $responsableChantier;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return Affaires Returns this affaires.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type f g.
     *
     * @param string $typeFG The type f g.
     * @return Affaires Returns this affaires.
     */
    public function setTypeFG($typeFG) {
        $this->typeFG = $typeFG;
        return $this;
    }
}
