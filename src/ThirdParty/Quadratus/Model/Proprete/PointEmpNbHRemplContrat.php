<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Point emp nb h rempl contrat model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpNbHRemplContrat {

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
     * Code collabo valid.
     *
     * @var string
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code remplacant.
     *
     * @var string
     */
    private $codeRemplacant;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Date validation synchro.
     *
     * @var DateTime
     */
    private $dateValidationSynchro;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Mensualisation.
     *
     * @var float
     */
    private $mensualisation;

    /**
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Uniq i d synchro.
     *
     * @var string
     */
    private $uniqIDSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code collabo valid.
     *
     * @return string Returns the code collabo valid.
     */
    public function getCodeCollaboValid() {
        return $this->codeCollaboValid;
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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code remplacant.
     *
     * @return string Returns the code remplacant.
     */
    public function getCodeRemplacant() {
        return $this->codeRemplacant;
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
     * Get the date validation synchro.
     *
     * @return DateTime Returns the date validation synchro.
     */
    public function getDateValidationSynchro() {
        return $this->dateValidationSynchro;
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
     * Get the mensualisation.
     *
     * @return float Returns the mensualisation.
     */
    public function getMensualisation() {
        return $this->mensualisation;
    }

    /**
     * Get the nb heures.
     *
     * @return float Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
    }

    /**
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the uniq i d synchro.
     *
     * @return string Returns the uniq i d synchro.
     */
    public function getUniqIDSynchro() {
        return $this->uniqIDSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string $codeRemplacant The code remplacant.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeRemplacant($codeRemplacant) {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime $dateValidationSynchro The date validation synchro.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float $mensualisation The mensualisation.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setMensualisation($mensualisation) {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return PointEmpNbHRemplContrat Returns this point emp nb h rempl contrat.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }
}
