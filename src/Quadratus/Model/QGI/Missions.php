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
 * Missions model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Missions {

    /**
     * Article.
     *
     * @var string
     */
    private $article;

    /**
     * B m calcule.
     *
     * @var boolean
     */
    private $bMCalcule;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Cloture.
     *
     * @var boolean
     */
    private $cloture;

    /**
     * Cloture contexte.
     *
     * @var string
     */
    private $clotureContexte;

    /**
     * Cloture date.
     *
     * @var DateTime
     */
    private $clotureDate;

    /**
     * Cloture par.
     *
     * @var string
     */
    private $cloturePar;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Code mission type.
     *
     * @var string
     */
    private $codeMissionType;

    /**
     * Code responsable.
     *
     * @var string
     */
    private $codeResponsable;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date debut t p.
     *
     * @var DateTime
     */
    private $dateDebutTP;

    /**
     * Date fin t p.
     *
     * @var DateTime
     */
    private $dateFinTP;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Decalage fermeture auto.
     *
     * @var int
     */
    private $decalageFermetureAuto;

    /**
     * Decalage fermeture auto jours.
     *
     * @var int
     */
    private $decalageFermetureAutoJours;

    /**
     * Decalage ouverture auto.
     *
     * @var int
     */
    private $decalageOuvertureAuto;

    /**
     * Descriptif.
     *
     * @var string
     */
    private $descriptif;

    /**
     * Descriptif r t f.
     *
     * @var string
     */
    private $descriptifRTF;

    /**
     * Dt fermeture auto.
     *
     * @var DateTime
     */
    private $dtFermetureAuto;

    /**
     * Fermeture auto.
     *
     * @var boolean
     */
    private $fermetureAuto;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Mission millesime.
     *
     * @var boolean
     */
    private $missionMillesime;

    /**
     * Mois ouverture auto.
     *
     * @var int
     */
    private $moisOuvertureAuto;

    /**
     * Ouverture contexte.
     *
     * @var string
     */
    private $ouvertureContexte;

    /**
     * Ouverture date.
     *
     * @var DateTime
     */
    private $ouvertureDate;

    /**
     * Ouverture par.
     *
     * @var string
     */
    private $ouverturePar;

    /**
     * Societe.
     *
     * @var string
     */
    private $societe;

    /**
     * T p archive.
     *
     * @var boolean
     */
    private $tPArchive;

    /**
     * T p cloture.
     *
     * @var boolean
     */
    private $tPCloture;

    /**
     * Transfert centre.
     *
     * @var boolean
     */
    private $transfertCentre;

    /**
     * Type centre.
     *
     * @var string
     */
    private $typeCentre;

    /**
     * Type responsable.
     *
     * @var string
     */
    private $typeResponsable;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the article.
     *
     * @return string Returns the article.
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * Get the b m calcule.
     *
     * @return boolean Returns the b m calcule.
     */
    public function getBMCalcule() {
        return $this->bMCalcule;
    }

    /**
     * Get the centre analytique.
     *
     * @return string Returns the centre analytique.
     */
    public function getCentreAnalytique() {
        return $this->centreAnalytique;
    }

    /**
     * Get the cloture.
     *
     * @return boolean Returns the cloture.
     */
    public function getCloture() {
        return $this->cloture;
    }

    /**
     * Get the cloture contexte.
     *
     * @return string Returns the cloture contexte.
     */
    public function getClotureContexte() {
        return $this->clotureContexte;
    }

    /**
     * Get the cloture date.
     *
     * @return DateTime Returns the cloture date.
     */
    public function getClotureDate() {
        return $this->clotureDate;
    }

    /**
     * Get the cloture par.
     *
     * @return string Returns the cloture par.
     */
    public function getCloturePar() {
        return $this->cloturePar;
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
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Get the code mission type.
     *
     * @return string Returns the code mission type.
     */
    public function getCodeMissionType() {
        return $this->codeMissionType;
    }

    /**
     * Get the code responsable.
     *
     * @return string Returns the code responsable.
     */
    public function getCodeResponsable() {
        return $this->codeResponsable;
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
     * Get the date debut t p.
     *
     * @return DateTime Returns the date debut t p.
     */
    public function getDateDebutTP() {
        return $this->dateDebutTP;
    }

    /**
     * Get the date fin t p.
     *
     * @return DateTime Returns the date fin t p.
     */
    public function getDateFinTP() {
        return $this->dateFinTP;
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
     * Get the decalage fermeture auto.
     *
     * @return int Returns the decalage fermeture auto.
     */
    public function getDecalageFermetureAuto() {
        return $this->decalageFermetureAuto;
    }

    /**
     * Get the decalage fermeture auto jours.
     *
     * @return int Returns the decalage fermeture auto jours.
     */
    public function getDecalageFermetureAutoJours() {
        return $this->decalageFermetureAutoJours;
    }

    /**
     * Get the decalage ouverture auto.
     *
     * @return int Returns the decalage ouverture auto.
     */
    public function getDecalageOuvertureAuto() {
        return $this->decalageOuvertureAuto;
    }

    /**
     * Get the descriptif.
     *
     * @return string Returns the descriptif.
     */
    public function getDescriptif() {
        return $this->descriptif;
    }

    /**
     * Get the descriptif r t f.
     *
     * @return string Returns the descriptif r t f.
     */
    public function getDescriptifRTF() {
        return $this->descriptifRTF;
    }

    /**
     * Get the dt fermeture auto.
     *
     * @return DateTime Returns the dt fermeture auto.
     */
    public function getDtFermetureAuto() {
        return $this->dtFermetureAuto;
    }

    /**
     * Get the fermeture auto.
     *
     * @return boolean Returns the fermeture auto.
     */
    public function getFermetureAuto() {
        return $this->fermetureAuto;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the mission millesime.
     *
     * @return boolean Returns the mission millesime.
     */
    public function getMissionMillesime() {
        return $this->missionMillesime;
    }

    /**
     * Get the mois ouverture auto.
     *
     * @return int Returns the mois ouverture auto.
     */
    public function getMoisOuvertureAuto() {
        return $this->moisOuvertureAuto;
    }

    /**
     * Get the ouverture contexte.
     *
     * @return string Returns the ouverture contexte.
     */
    public function getOuvertureContexte() {
        return $this->ouvertureContexte;
    }

    /**
     * Get the ouverture date.
     *
     * @return DateTime Returns the ouverture date.
     */
    public function getOuvertureDate() {
        return $this->ouvertureDate;
    }

    /**
     * Get the ouverture par.
     *
     * @return string Returns the ouverture par.
     */
    public function getOuverturePar() {
        return $this->ouverturePar;
    }

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSociete() {
        return $this->societe;
    }

    /**
     * Get the t p archive.
     *
     * @return boolean Returns the t p archive.
     */
    public function getTPArchive() {
        return $this->tPArchive;
    }

    /**
     * Get the t p cloture.
     *
     * @return boolean Returns the t p cloture.
     */
    public function getTPCloture() {
        return $this->tPCloture;
    }

    /**
     * Get the transfert centre.
     *
     * @return boolean Returns the transfert centre.
     */
    public function getTransfertCentre() {
        return $this->transfertCentre;
    }

    /**
     * Get the type centre.
     *
     * @return string Returns the type centre.
     */
    public function getTypeCentre() {
        return $this->typeCentre;
    }

    /**
     * Get the type responsable.
     *
     * @return string Returns the type responsable.
     */
    public function getTypeResponsable() {
        return $this->typeResponsable;
    }

    /**
     * Set the article.
     *
     * @param string $article The article.
     * @return Missions Returns this missions.
     */
    public function setArticle($article) {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the b m calcule.
     *
     * @param boolean $bMCalcule The b m calcule.
     * @return Missions Returns this missions.
     */
    public function setBMCalcule($bMCalcule) {
        $this->bMCalcule = $bMCalcule;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return Missions Returns this missions.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the cloture.
     *
     * @param boolean $cloture The cloture.
     * @return Missions Returns this missions.
     */
    public function setCloture($cloture) {
        $this->cloture = $cloture;
        return $this;
    }

    /**
     * Set the cloture contexte.
     *
     * @param string $clotureContexte The cloture contexte.
     * @return Missions Returns this missions.
     */
    public function setClotureContexte($clotureContexte) {
        $this->clotureContexte = $clotureContexte;
        return $this;
    }

    /**
     * Set the cloture date.
     *
     * @param DateTime $clotureDate The cloture date.
     * @return Missions Returns this missions.
     */
    public function setClotureDate(DateTime $clotureDate = null) {
        $this->clotureDate = $clotureDate;
        return $this;
    }

    /**
     * Set the cloture par.
     *
     * @param string $cloturePar The cloture par.
     * @return Missions Returns this missions.
     */
    public function setCloturePar($cloturePar) {
        $this->cloturePar = $cloturePar;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Missions Returns this missions.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return Missions Returns this missions.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code mission type.
     *
     * @param string $codeMissionType The code mission type.
     * @return Missions Returns this missions.
     */
    public function setCodeMissionType($codeMissionType) {
        $this->codeMissionType = $codeMissionType;
        return $this;
    }

    /**
     * Set the code responsable.
     *
     * @param string $codeResponsable The code responsable.
     * @return Missions Returns this missions.
     */
    public function setCodeResponsable($codeResponsable) {
        $this->codeResponsable = $codeResponsable;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Missions Returns this missions.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date debut t p.
     *
     * @param DateTime $dateDebutTP The date debut t p.
     * @return Missions Returns this missions.
     */
    public function setDateDebutTP(DateTime $dateDebutTP = null) {
        $this->dateDebutTP = $dateDebutTP;
        return $this;
    }

    /**
     * Set the date fin t p.
     *
     * @param DateTime $dateFinTP The date fin t p.
     * @return Missions Returns this missions.
     */
    public function setDateFinTP(DateTime $dateFinTP = null) {
        $this->dateFinTP = $dateFinTP;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Missions Returns this missions.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the decalage fermeture auto.
     *
     * @param int $decalageFermetureAuto The decalage fermeture auto.
     * @return Missions Returns this missions.
     */
    public function setDecalageFermetureAuto($decalageFermetureAuto) {
        $this->decalageFermetureAuto = $decalageFermetureAuto;
        return $this;
    }

    /**
     * Set the decalage fermeture auto jours.
     *
     * @param int $decalageFermetureAutoJours The decalage fermeture auto jours.
     * @return Missions Returns this missions.
     */
    public function setDecalageFermetureAutoJours($decalageFermetureAutoJours) {
        $this->decalageFermetureAutoJours = $decalageFermetureAutoJours;
        return $this;
    }

    /**
     * Set the decalage ouverture auto.
     *
     * @param int $decalageOuvertureAuto The decalage ouverture auto.
     * @return Missions Returns this missions.
     */
    public function setDecalageOuvertureAuto($decalageOuvertureAuto) {
        $this->decalageOuvertureAuto = $decalageOuvertureAuto;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string $descriptif The descriptif.
     * @return Missions Returns this missions.
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the descriptif r t f.
     *
     * @param string $descriptifRTF The descriptif r t f.
     * @return Missions Returns this missions.
     */
    public function setDescriptifRTF($descriptifRTF) {
        $this->descriptifRTF = $descriptifRTF;
        return $this;
    }

    /**
     * Set the dt fermeture auto.
     *
     * @param DateTime $dtFermetureAuto The dt fermeture auto.
     * @return Missions Returns this missions.
     */
    public function setDtFermetureAuto(DateTime $dtFermetureAuto = null) {
        $this->dtFermetureAuto = $dtFermetureAuto;
        return $this;
    }

    /**
     * Set the fermeture auto.
     *
     * @param boolean $fermetureAuto The fermeture auto.
     * @return Missions Returns this missions.
     */
    public function setFermetureAuto($fermetureAuto) {
        $this->fermetureAuto = $fermetureAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Missions Returns this missions.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the mission millesime.
     *
     * @param boolean $missionMillesime The mission millesime.
     * @return Missions Returns this missions.
     */
    public function setMissionMillesime($missionMillesime) {
        $this->missionMillesime = $missionMillesime;
        return $this;
    }

    /**
     * Set the mois ouverture auto.
     *
     * @param int $moisOuvertureAuto The mois ouverture auto.
     * @return Missions Returns this missions.
     */
    public function setMoisOuvertureAuto($moisOuvertureAuto) {
        $this->moisOuvertureAuto = $moisOuvertureAuto;
        return $this;
    }

    /**
     * Set the ouverture contexte.
     *
     * @param string $ouvertureContexte The ouverture contexte.
     * @return Missions Returns this missions.
     */
    public function setOuvertureContexte($ouvertureContexte) {
        $this->ouvertureContexte = $ouvertureContexte;
        return $this;
    }

    /**
     * Set the ouverture date.
     *
     * @param DateTime $ouvertureDate The ouverture date.
     * @return Missions Returns this missions.
     */
    public function setOuvertureDate(DateTime $ouvertureDate = null) {
        $this->ouvertureDate = $ouvertureDate;
        return $this;
    }

    /**
     * Set the ouverture par.
     *
     * @param string $ouverturePar The ouverture par.
     * @return Missions Returns this missions.
     */
    public function setOuverturePar($ouverturePar) {
        $this->ouverturePar = $ouverturePar;
        return $this;
    }

    /**
     * Set the societe.
     *
     * @param string $societe The societe.
     * @return Missions Returns this missions.
     */
    public function setSociete($societe) {
        $this->societe = $societe;
        return $this;
    }

    /**
     * Set the t p archive.
     *
     * @param boolean $tPArchive The t p archive.
     * @return Missions Returns this missions.
     */
    public function setTPArchive($tPArchive) {
        $this->tPArchive = $tPArchive;
        return $this;
    }

    /**
     * Set the t p cloture.
     *
     * @param boolean $tPCloture The t p cloture.
     * @return Missions Returns this missions.
     */
    public function setTPCloture($tPCloture) {
        $this->tPCloture = $tPCloture;
        return $this;
    }

    /**
     * Set the transfert centre.
     *
     * @param boolean $transfertCentre The transfert centre.
     * @return Missions Returns this missions.
     */
    public function setTransfertCentre($transfertCentre) {
        $this->transfertCentre = $transfertCentre;
        return $this;
    }

    /**
     * Set the type centre.
     *
     * @param string $typeCentre The type centre.
     * @return Missions Returns this missions.
     */
    public function setTypeCentre($typeCentre) {
        $this->typeCentre = $typeCentre;
        return $this;
    }

    /**
     * Set the type responsable.
     *
     * @param string $typeResponsable The type responsable.
     * @return Missions Returns this missions.
     */
    public function setTypeResponsable($typeResponsable) {
        $this->typeResponsable = $typeResponsable;
        return $this;
    }

}
