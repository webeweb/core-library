<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Chantiers reclamations model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ChantiersReclamations {

    /**
     * Alerte.
     *
     * @var boolean
     */
    private $alerte;

    /**
     * Archivee.
     *
     * @var boolean
     */
    private $archivee;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

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
     * Critere liste1.
     *
     * @var string
     */
    private $critereListe1;

    /**
     * Critere liste2.
     *
     * @var string
     */
    private $critereListe2;

    /**
     * Date debut doc.
     *
     * @var DateTime
     */
    private $dateDebutDoc;

    /**
     * Date fin doc.
     *
     * @var DateTime
     */
    private $dateFinDoc;

    /**
     * Date reclam.
     *
     * @var DateTime
     */
    private $dateReclam;

    /**
     * Date traitement.
     *
     * @var DateTime
     */
    private $dateTraitement;

    /**
     * Niveau.
     *
     * @var string
     */
    private $niveau;

    /**
     * Niveau reclam.
     *
     * @var string
     */
    private $niveauReclam;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

    /**
     * Numero reclam.
     *
     * @var int
     */
    private $numeroReclam;

    /**
     * Reclamation.
     *
     * @var string
     */
    private $reclamation;

    /**
     * Resultat.
     *
     * @var string
     */
    private $resultat;

    /**
     * Type reclam.
     *
     * @var string
     */
    private $typeReclam;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the alerte.
     *
     * @return boolean Returns the alerte.
     */
    public function getAlerte() {
        return $this->alerte;
    }

    /**
     * Get the archivee.
     *
     * @return boolean Returns the archivee.
     */
    public function getArchivee() {
        return $this->archivee;
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
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
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
     * Get the critere liste1.
     *
     * @return string Returns the critere liste1.
     */
    public function getCritereListe1() {
        return $this->critereListe1;
    }

    /**
     * Get the critere liste2.
     *
     * @return string Returns the critere liste2.
     */
    public function getCritereListe2() {
        return $this->critereListe2;
    }

    /**
     * Get the date debut doc.
     *
     * @return DateTime Returns the date debut doc.
     */
    public function getDateDebutDoc() {
        return $this->dateDebutDoc;
    }

    /**
     * Get the date fin doc.
     *
     * @return DateTime Returns the date fin doc.
     */
    public function getDateFinDoc() {
        return $this->dateFinDoc;
    }

    /**
     * Get the date reclam.
     *
     * @return DateTime Returns the date reclam.
     */
    public function getDateReclam() {
        return $this->dateReclam;
    }

    /**
     * Get the date traitement.
     *
     * @return DateTime Returns the date traitement.
     */
    public function getDateTraitement() {
        return $this->dateTraitement;
    }

    /**
     * Get the niveau.
     *
     * @return string Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the niveau reclam.
     *
     * @return string Returns the niveau reclam.
     */
    public function getNiveauReclam() {
        return $this->niveauReclam;
    }

    /**
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
    }

    /**
     * Get the numero reclam.
     *
     * @return int Returns the numero reclam.
     */
    public function getNumeroReclam() {
        return $this->numeroReclam;
    }

    /**
     * Get the reclamation.
     *
     * @return string Returns the reclamation.
     */
    public function getReclamation() {
        return $this->reclamation;
    }

    /**
     * Get the resultat.
     *
     * @return string Returns the resultat.
     */
    public function getResultat() {
        return $this->resultat;
    }

    /**
     * Get the type reclam.
     *
     * @return string Returns the type reclam.
     */
    public function getTypeReclam() {
        return $this->typeReclam;
    }

    /**
     * Set the alerte.
     *
     * @param boolean $alerte The alerte.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setAlerte($alerte) {
        $this->alerte = $alerte;
        return $this;
    }

    /**
     * Set the archivee.
     *
     * @param boolean $archivee The archivee.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setArchivee($archivee) {
        $this->archivee = $archivee;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the critere liste1.
     *
     * @param string $critereListe1 The critere liste1.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setCritereListe1($critereListe1) {
        $this->critereListe1 = $critereListe1;
        return $this;
    }

    /**
     * Set the critere liste2.
     *
     * @param string $critereListe2 The critere liste2.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setCritereListe2($critereListe2) {
        $this->critereListe2 = $critereListe2;
        return $this;
    }

    /**
     * Set the date debut doc.
     *
     * @param DateTime $dateDebutDoc The date debut doc.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setDateDebutDoc(DateTime $dateDebutDoc = null) {
        $this->dateDebutDoc = $dateDebutDoc;
        return $this;
    }

    /**
     * Set the date fin doc.
     *
     * @param DateTime $dateFinDoc The date fin doc.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setDateFinDoc(DateTime $dateFinDoc = null) {
        $this->dateFinDoc = $dateFinDoc;
        return $this;
    }

    /**
     * Set the date reclam.
     *
     * @param DateTime $dateReclam The date reclam.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setDateReclam(DateTime $dateReclam = null) {
        $this->dateReclam = $dateReclam;
        return $this;
    }

    /**
     * Set the date traitement.
     *
     * @param DateTime $dateTraitement The date traitement.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setDateTraitement(DateTime $dateTraitement = null) {
        $this->dateTraitement = $dateTraitement;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the niveau reclam.
     *
     * @param string $niveauReclam The niveau reclam.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setNiveauReclam($niveauReclam) {
        $this->niveauReclam = $niveauReclam;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the numero reclam.
     *
     * @param int $numeroReclam The numero reclam.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setNumeroReclam($numeroReclam) {
        $this->numeroReclam = $numeroReclam;
        return $this;
    }

    /**
     * Set the reclamation.
     *
     * @param string $reclamation The reclamation.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setReclamation($reclamation) {
        $this->reclamation = $reclamation;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param string $resultat The resultat.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setResultat($resultat) {
        $this->resultat = $resultat;
        return $this;
    }

    /**
     * Set the type reclam.
     *
     * @param string $typeReclam The type reclam.
     * @return ChantiersReclamations Returns this chantiers reclamations.
     */
    public function setTypeReclam($typeReclam) {
        $this->typeReclam = $typeReclam;
        return $this;
    }

}
