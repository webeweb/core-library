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
 * Point emp tache model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpTache {

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
     * H rempl mens.
     *
     * @var float
     */
    private $hRemplMens;

    /**
     * Mensualisation.
     *
     * @var float
     */
    private $mensualisation;

    /**
     * Mt prime1 chantier.
     *
     * @var float
     */
    private $mtPrime1Chantier;

    /**
     * Mt prime2 chantier.
     *
     * @var float
     */
    private $mtPrime2Chantier;

    /**
     * Mt prime3 chantier.
     *
     * @var float
     */
    private $mtPrime3Chantier;

    /**
     * Nb heures1 r s.
     *
     * @var float
     */
    private $nbHeures1RS;

    /**
     * Nb heures1 t p.
     *
     * @var float
     */
    private $nbHeures1TP;

    /**
     * Nb heures2 r s.
     *
     * @var float
     */
    private $nbHeures2RS;

    /**
     * Nb heures2 t p.
     *
     * @var float
     */
    private $nbHeures2TP;

    /**
     * Nb paniers.
     *
     * @var float
     */
    private $nbPaniers;

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
     * Tx horaire1 r s.
     *
     * @var float
     */
    private $txHoraire1RS;

    /**
     * Tx horaire1 t p.
     *
     * @var float
     */
    private $txHoraire1TP;

    /**
     * Tx horaire2 r s.
     *
     * @var float
     */
    private $txHoraire2RS;

    /**
     * Tx horaire2 t p.
     *
     * @var float
     */
    private $txHoraire2TP;

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
     * Get the h rempl mens.
     *
     * @return float Returns the h rempl mens.
     */
    public function getHRemplMens() {
        return $this->hRemplMens;
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
     * Get the mt prime1 chantier.
     *
     * @return float Returns the mt prime1 chantier.
     */
    public function getMtPrime1Chantier() {
        return $this->mtPrime1Chantier;
    }

    /**
     * Get the mt prime2 chantier.
     *
     * @return float Returns the mt prime2 chantier.
     */
    public function getMtPrime2Chantier() {
        return $this->mtPrime2Chantier;
    }

    /**
     * Get the mt prime3 chantier.
     *
     * @return float Returns the mt prime3 chantier.
     */
    public function getMtPrime3Chantier() {
        return $this->mtPrime3Chantier;
    }

    /**
     * Get the nb heures1 r s.
     *
     * @return float Returns the nb heures1 r s.
     */
    public function getNbHeures1RS() {
        return $this->nbHeures1RS;
    }

    /**
     * Get the nb heures1 t p.
     *
     * @return float Returns the nb heures1 t p.
     */
    public function getNbHeures1TP() {
        return $this->nbHeures1TP;
    }

    /**
     * Get the nb heures2 r s.
     *
     * @return float Returns the nb heures2 r s.
     */
    public function getNbHeures2RS() {
        return $this->nbHeures2RS;
    }

    /**
     * Get the nb heures2 t p.
     *
     * @return float Returns the nb heures2 t p.
     */
    public function getNbHeures2TP() {
        return $this->nbHeures2TP;
    }

    /**
     * Get the nb paniers.
     *
     * @return float Returns the nb paniers.
     */
    public function getNbPaniers() {
        return $this->nbPaniers;
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
     * Get the tx horaire1 r s.
     *
     * @return float Returns the tx horaire1 r s.
     */
    public function getTxHoraire1RS() {
        return $this->txHoraire1RS;
    }

    /**
     * Get the tx horaire1 t p.
     *
     * @return float Returns the tx horaire1 t p.
     */
    public function getTxHoraire1TP() {
        return $this->txHoraire1TP;
    }

    /**
     * Get the tx horaire2 r s.
     *
     * @return float Returns the tx horaire2 r s.
     */
    public function getTxHoraire2RS() {
        return $this->txHoraire2RS;
    }

    /**
     * Get the tx horaire2 t p.
     *
     * @return float Returns the tx horaire2 t p.
     */
    public function getTxHoraire2TP() {
        return $this->txHoraire2TP;
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
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime $dateValidationSynchro The date validation synchro.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h rempl mens.
     *
     * @param float $hRemplMens The h rempl mens.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setHRemplMens($hRemplMens) {
        $this->hRemplMens = $hRemplMens;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float $mensualisation The mensualisation.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setMensualisation($mensualisation) {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the mt prime1 chantier.
     *
     * @param float $mtPrime1Chantier The mt prime1 chantier.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setMtPrime1Chantier($mtPrime1Chantier) {
        $this->mtPrime1Chantier = $mtPrime1Chantier;
        return $this;
    }

    /**
     * Set the mt prime2 chantier.
     *
     * @param float $mtPrime2Chantier The mt prime2 chantier.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setMtPrime2Chantier($mtPrime2Chantier) {
        $this->mtPrime2Chantier = $mtPrime2Chantier;
        return $this;
    }

    /**
     * Set the mt prime3 chantier.
     *
     * @param float $mtPrime3Chantier The mt prime3 chantier.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setMtPrime3Chantier($mtPrime3Chantier) {
        $this->mtPrime3Chantier = $mtPrime3Chantier;
        return $this;
    }

    /**
     * Set the nb heures1 r s.
     *
     * @param float $nbHeures1RS The nb heures1 r s.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setNbHeures1RS($nbHeures1RS) {
        $this->nbHeures1RS = $nbHeures1RS;
        return $this;
    }

    /**
     * Set the nb heures1 t p.
     *
     * @param float $nbHeures1TP The nb heures1 t p.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setNbHeures1TP($nbHeures1TP) {
        $this->nbHeures1TP = $nbHeures1TP;
        return $this;
    }

    /**
     * Set the nb heures2 r s.
     *
     * @param float $nbHeures2RS The nb heures2 r s.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setNbHeures2RS($nbHeures2RS) {
        $this->nbHeures2RS = $nbHeures2RS;
        return $this;
    }

    /**
     * Set the nb heures2 t p.
     *
     * @param float $nbHeures2TP The nb heures2 t p.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setNbHeures2TP($nbHeures2TP) {
        $this->nbHeures2TP = $nbHeures2TP;
        return $this;
    }

    /**
     * Set the nb paniers.
     *
     * @param float $nbPaniers The nb paniers.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setNbPaniers($nbPaniers) {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tx horaire1 r s.
     *
     * @param float $txHoraire1RS The tx horaire1 r s.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setTxHoraire1RS($txHoraire1RS) {
        $this->txHoraire1RS = $txHoraire1RS;
        return $this;
    }

    /**
     * Set the tx horaire1 t p.
     *
     * @param float $txHoraire1TP The tx horaire1 t p.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setTxHoraire1TP($txHoraire1TP) {
        $this->txHoraire1TP = $txHoraire1TP;
        return $this;
    }

    /**
     * Set the tx horaire2 r s.
     *
     * @param float $txHoraire2RS The tx horaire2 r s.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setTxHoraire2RS($txHoraire2RS) {
        $this->txHoraire2RS = $txHoraire2RS;
        return $this;
    }

    /**
     * Set the tx horaire2 t p.
     *
     * @param float $txHoraire2TP The tx horaire2 t p.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setTxHoraire2TP($txHoraire2TP) {
        $this->txHoraire2TP = $txHoraire2TP;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return PointEmpTache Returns this point emp tache.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }
}
