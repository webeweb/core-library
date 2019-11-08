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
 * Missions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Missions {

    /**
     * Article.
     *
     * @var string
     */
    private $article;

    /**
     * Bm calcule.
     *
     * @var bool
     */
    private $bmCalcule;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Cloture.
     *
     * @var bool
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
     * @var DateTime|null
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
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date debut tp.
     *
     * @var DateTime|null
     */
    private $dateDebutTp;

    /**
     * Date fin tp.
     *
     * @var DateTime|null
     */
    private $dateFinTp;

    /**
     * Date modification.
     *
     * @var DateTime|null
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
     * Descriptif rtf.
     *
     * @var string
     */
    private $descriptifRtf;

    /**
     * Dt fermeture auto.
     *
     * @var DateTime|null
     */
    private $dtFermetureAuto;

    /**
     * Fermeture auto.
     *
     * @var bool
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
     * @var bool
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
     * @var DateTime|null
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
     * Tp archive.
     *
     * @var bool
     */
    private $tpArchive;

    /**
     * Tp cloture.
     *
     * @var bool
     */
    private $tpCloture;

    /**
     * Transfert centre.
     *
     * @var bool
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
     * Get the bm calcule.
     *
     * @return bool Returns the bm calcule.
     */
    public function getBmCalcule() {
        return $this->bmCalcule;
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
     * @return bool Returns the cloture.
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
     * @return DateTime|null Returns the cloture date.
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
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date debut tp.
     *
     * @return DateTime|null Returns the date debut tp.
     */
    public function getDateDebutTp() {
        return $this->dateDebutTp;
    }

    /**
     * Get the date fin tp.
     *
     * @return DateTime|null Returns the date fin tp.
     */
    public function getDateFinTp() {
        return $this->dateFinTp;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
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
     * Get the descriptif rtf.
     *
     * @return string Returns the descriptif rtf.
     */
    public function getDescriptifRtf() {
        return $this->descriptifRtf;
    }

    /**
     * Get the dt fermeture auto.
     *
     * @return DateTime|null Returns the dt fermeture auto.
     */
    public function getDtFermetureAuto() {
        return $this->dtFermetureAuto;
    }

    /**
     * Get the fermeture auto.
     *
     * @return bool Returns the fermeture auto.
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
     * @return bool Returns the mission millesime.
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
     * @return DateTime|null Returns the ouverture date.
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
     * Get the tp archive.
     *
     * @return bool Returns the tp archive.
     */
    public function getTpArchive() {
        return $this->tpArchive;
    }

    /**
     * Get the tp cloture.
     *
     * @return bool Returns the tp cloture.
     */
    public function getTpCloture() {
        return $this->tpCloture;
    }

    /**
     * Get the transfert centre.
     *
     * @return bool Returns the transfert centre.
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
     */
    public function setArticle($article) {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the bm calcule.
     *
     * @param bool $bmCalcule The bm calcule.
     */
    public function setBmCalcule($bmCalcule) {
        $this->bmCalcule = $bmCalcule;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the cloture.
     *
     * @param bool $cloture The cloture.
     */
    public function setCloture($cloture) {
        $this->cloture = $cloture;
        return $this;
    }

    /**
     * Set the cloture contexte.
     *
     * @param string $clotureContexte The cloture contexte.
     */
    public function setClotureContexte($clotureContexte) {
        $this->clotureContexte = $clotureContexte;
        return $this;
    }

    /**
     * Set the cloture date.
     *
     * @param DateTime|null $clotureDate The cloture date.
     */
    public function setClotureDate(DateTime $clotureDate = null) {
        $this->clotureDate = $clotureDate;
        return $this;
    }

    /**
     * Set the cloture par.
     *
     * @param string $cloturePar The cloture par.
     */
    public function setCloturePar($cloturePar) {
        $this->cloturePar = $cloturePar;
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
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code mission type.
     *
     * @param string $codeMissionType The code mission type.
     */
    public function setCodeMissionType($codeMissionType) {
        $this->codeMissionType = $codeMissionType;
        return $this;
    }

    /**
     * Set the code responsable.
     *
     * @param string $codeResponsable The code responsable.
     */
    public function setCodeResponsable($codeResponsable) {
        $this->codeResponsable = $codeResponsable;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date debut tp.
     *
     * @param DateTime|null $dateDebutTp The date debut tp.
     */
    public function setDateDebutTp(DateTime $dateDebutTp = null) {
        $this->dateDebutTp = $dateDebutTp;
        return $this;
    }

    /**
     * Set the date fin tp.
     *
     * @param DateTime|null $dateFinTp The date fin tp.
     */
    public function setDateFinTp(DateTime $dateFinTp = null) {
        $this->dateFinTp = $dateFinTp;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the decalage fermeture auto.
     *
     * @param int $decalageFermetureAuto The decalage fermeture auto.
     */
    public function setDecalageFermetureAuto($decalageFermetureAuto) {
        $this->decalageFermetureAuto = $decalageFermetureAuto;
        return $this;
    }

    /**
     * Set the decalage fermeture auto jours.
     *
     * @param int $decalageFermetureAutoJours The decalage fermeture auto jours.
     */
    public function setDecalageFermetureAutoJours($decalageFermetureAutoJours) {
        $this->decalageFermetureAutoJours = $decalageFermetureAutoJours;
        return $this;
    }

    /**
     * Set the decalage ouverture auto.
     *
     * @param int $decalageOuvertureAuto The decalage ouverture auto.
     */
    public function setDecalageOuvertureAuto($decalageOuvertureAuto) {
        $this->decalageOuvertureAuto = $decalageOuvertureAuto;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string $descriptif The descriptif.
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the descriptif rtf.
     *
     * @param string $descriptifRtf The descriptif rtf.
     */
    public function setDescriptifRtf($descriptifRtf) {
        $this->descriptifRtf = $descriptifRtf;
        return $this;
    }

    /**
     * Set the dt fermeture auto.
     *
     * @param DateTime|null $dtFermetureAuto The dt fermeture auto.
     */
    public function setDtFermetureAuto(DateTime $dtFermetureAuto = null) {
        $this->dtFermetureAuto = $dtFermetureAuto;
        return $this;
    }

    /**
     * Set the fermeture auto.
     *
     * @param bool $fermetureAuto The fermeture auto.
     */
    public function setFermetureAuto($fermetureAuto) {
        $this->fermetureAuto = $fermetureAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the mission millesime.
     *
     * @param bool $missionMillesime The mission millesime.
     */
    public function setMissionMillesime($missionMillesime) {
        $this->missionMillesime = $missionMillesime;
        return $this;
    }

    /**
     * Set the mois ouverture auto.
     *
     * @param int $moisOuvertureAuto The mois ouverture auto.
     */
    public function setMoisOuvertureAuto($moisOuvertureAuto) {
        $this->moisOuvertureAuto = $moisOuvertureAuto;
        return $this;
    }

    /**
     * Set the ouverture contexte.
     *
     * @param string $ouvertureContexte The ouverture contexte.
     */
    public function setOuvertureContexte($ouvertureContexte) {
        $this->ouvertureContexte = $ouvertureContexte;
        return $this;
    }

    /**
     * Set the ouverture date.
     *
     * @param DateTime|null $ouvertureDate The ouverture date.
     */
    public function setOuvertureDate(DateTime $ouvertureDate = null) {
        $this->ouvertureDate = $ouvertureDate;
        return $this;
    }

    /**
     * Set the ouverture par.
     *
     * @param string $ouverturePar The ouverture par.
     */
    public function setOuverturePar($ouverturePar) {
        $this->ouverturePar = $ouverturePar;
        return $this;
    }

    /**
     * Set the societe.
     *
     * @param string $societe The societe.
     */
    public function setSociete($societe) {
        $this->societe = $societe;
        return $this;
    }

    /**
     * Set the tp archive.
     *
     * @param bool $tpArchive The tp archive.
     */
    public function setTpArchive($tpArchive) {
        $this->tpArchive = $tpArchive;
        return $this;
    }

    /**
     * Set the tp cloture.
     *
     * @param bool $tpCloture The tp cloture.
     */
    public function setTpCloture($tpCloture) {
        $this->tpCloture = $tpCloture;
        return $this;
    }

    /**
     * Set the transfert centre.
     *
     * @param bool $transfertCentre The transfert centre.
     */
    public function setTransfertCentre($transfertCentre) {
        $this->transfertCentre = $transfertCentre;
        return $this;
    }

    /**
     * Set the type centre.
     *
     * @param string $typeCentre The type centre.
     */
    public function setTypeCentre($typeCentre) {
        $this->typeCentre = $typeCentre;
        return $this;
    }

    /**
     * Set the type responsable.
     *
     * @param string $typeResponsable The type responsable.
     */
    public function setTypeResponsable($typeResponsable) {
        $this->typeResponsable = $typeResponsable;
        return $this;
    }
}
