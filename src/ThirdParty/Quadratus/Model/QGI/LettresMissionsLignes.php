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
 * Lettres missions lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LettresMissionsLignes {

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
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code travail.
     *
     * @var string
     */
    private $codeTravail;

    /**
     * Date debut.
     *
     * @var DateTime
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime
     */
    private $dateFin;

    /**
     * Declaration a rediger.
     *
     * @var bool
     */
    private $declarationARediger;

    /**
     * Frequence.
     *
     * @var string
     */
    private $frequence;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Nbr heures.
     *
     * @var float
     */
    private $nbrHeures;

    /**
     * Nbr operations.
     *
     * @var string
     */
    private $nbrOperations;

    /**
     * Niveau.
     *
     * @var int
     */
    private $niveau;

    /**
     * Niveau ligne.
     *
     * @var string
     */
    private $niveauLigne;

    /**
     * Numero lettre.
     *
     * @var string
     */
    private $numeroLettre;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Observations.
     *
     * @var string
     */
    private $observations;

    /**
     * Police.
     *
     * @var string
     */
    private $police;

    /**
     * Realise par.
     *
     * @var string
     */
    private $realisePar;

    /**
     * Type affectation.
     *
     * @var string
     */
    private $typeAffectation;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the code travail.
     *
     * @return string Returns the code travail.
     */
    public function getCodeTravail() {
        return $this->codeTravail;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the declaration a rediger.
     *
     * @return bool Returns the declaration a rediger.
     */
    public function getDeclarationARediger() {
        return $this->declarationARediger;
    }

    /**
     * Get the frequence.
     *
     * @return string Returns the frequence.
     */
    public function getFrequence() {
        return $this->frequence;
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
     * Get the nbr heures.
     *
     * @return float Returns the nbr heures.
     */
    public function getNbrHeures() {
        return $this->nbrHeures;
    }

    /**
     * Get the nbr operations.
     *
     * @return string Returns the nbr operations.
     */
    public function getNbrOperations() {
        return $this->nbrOperations;
    }

    /**
     * Get the niveau.
     *
     * @return int Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the niveau ligne.
     *
     * @return string Returns the niveau ligne.
     */
    public function getNiveauLigne() {
        return $this->niveauLigne;
    }

    /**
     * Get the numero lettre.
     *
     * @return string Returns the numero lettre.
     */
    public function getNumeroLettre() {
        return $this->numeroLettre;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
    }

    /**
     * Get the observations.
     *
     * @return string Returns the observations.
     */
    public function getObservations() {
        return $this->observations;
    }

    /**
     * Get the police.
     *
     * @return string Returns the police.
     */
    public function getPolice() {
        return $this->police;
    }

    /**
     * Get the realise par.
     *
     * @return string Returns the realise par.
     */
    public function getRealisePar() {
        return $this->realisePar;
    }

    /**
     * Get the type affectation.
     *
     * @return string Returns the type affectation.
     */
    public function getTypeAffectation() {
        return $this->typeAffectation;
    }

    /**
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string $codeTravail The code travail.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setCodeTravail($codeTravail) {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime $dateDebut The date debut.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime $dateFin The date fin.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the declaration a rediger.
     *
     * @param bool $declarationARediger The declaration a rediger.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setDeclarationARediger($declarationARediger) {
        $this->declarationARediger = $declarationARediger;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string $frequence The frequence.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setFrequence($frequence) {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the nbr heures.
     *
     * @param float $nbrHeures The nbr heures.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setNbrHeures($nbrHeures) {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }

    /**
     * Set the nbr operations.
     *
     * @param string $nbrOperations The nbr operations.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setNbrOperations($nbrOperations) {
        $this->nbrOperations = $nbrOperations;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau ligne.
     *
     * @param string $niveauLigne The niveau ligne.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setNiveauLigne($niveauLigne) {
        $this->niveauLigne = $niveauLigne;
        return $this;
    }

    /**
     * Set the numero lettre.
     *
     * @param string $numeroLettre The numero lettre.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setNumeroLettre($numeroLettre) {
        $this->numeroLettre = $numeroLettre;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string $observations The observations.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the police.
     *
     * @param string $police The police.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setPolice($police) {
        $this->police = $police;
        return $this;
    }

    /**
     * Set the realise par.
     *
     * @param string $realisePar The realise par.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setRealisePar($realisePar) {
        $this->realisePar = $realisePar;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string $typeAffectation The type affectation.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setTypeAffectation($typeAffectation) {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return LettresMissionsLignes Returns this lettres missions lignes.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }
}
