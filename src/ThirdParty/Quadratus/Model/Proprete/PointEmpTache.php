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
 * Point emp tache.
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
     * @var DateTime|null
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
     * Nb heures1 rs.
     *
     * @var float
     */
    private $nbHeures1Rs;

    /**
     * Nb heures1 tp.
     *
     * @var float
     */
    private $nbHeures1Tp;

    /**
     * Nb heures2 rs.
     *
     * @var float
     */
    private $nbHeures2Rs;

    /**
     * Nb heures2 tp.
     *
     * @var float
     */
    private $nbHeures2Tp;

    /**
     * Nb paniers.
     *
     * @var float
     */
    private $nbPaniers;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Tx horaire1 rs.
     *
     * @var float
     */
    private $txHoraire1Rs;

    /**
     * Tx horaire1 tp.
     *
     * @var float
     */
    private $txHoraire1Tp;

    /**
     * Tx horaire2 rs.
     *
     * @var float
     */
    private $txHoraire2Rs;

    /**
     * Tx horaire2 tp.
     *
     * @var float
     */
    private $txHoraire2Tp;

    /**
     * Uniq id synchro.
     *
     * @var string
     */
    private $uniqIdSynchro;

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
     * @return DateTime|null Returns the date validation synchro.
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
     * Get the nb heures1 rs.
     *
     * @return float Returns the nb heures1 rs.
     */
    public function getNbHeures1Rs() {
        return $this->nbHeures1Rs;
    }

    /**
     * Get the nb heures1 tp.
     *
     * @return float Returns the nb heures1 tp.
     */
    public function getNbHeures1Tp() {
        return $this->nbHeures1Tp;
    }

    /**
     * Get the nb heures2 rs.
     *
     * @return float Returns the nb heures2 rs.
     */
    public function getNbHeures2Rs() {
        return $this->nbHeures2Rs;
    }

    /**
     * Get the nb heures2 tp.
     *
     * @return float Returns the nb heures2 tp.
     */
    public function getNbHeures2Tp() {
        return $this->nbHeures2Tp;
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
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the tx horaire1 rs.
     *
     * @return float Returns the tx horaire1 rs.
     */
    public function getTxHoraire1Rs() {
        return $this->txHoraire1Rs;
    }

    /**
     * Get the tx horaire1 tp.
     *
     * @return float Returns the tx horaire1 tp.
     */
    public function getTxHoraire1Tp() {
        return $this->txHoraire1Tp;
    }

    /**
     * Get the tx horaire2 rs.
     *
     * @return float Returns the tx horaire2 rs.
     */
    public function getTxHoraire2Rs() {
        return $this->txHoraire2Rs;
    }

    /**
     * Get the tx horaire2 tp.
     *
     * @return float Returns the tx horaire2 tp.
     */
    public function getTxHoraire2Tp() {
        return $this->txHoraire2Tp;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string Returns the uniq id synchro.
     */
    public function getUniqIdSynchro() {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the h rempl mens.
     *
     * @param float $hRemplMens The h rempl mens.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setHRemplMens($hRemplMens) {
        $this->hRemplMens = $hRemplMens;
        return $this;
    }

    /**
     * Set the mensualisation.
     *
     * @param float $mensualisation The mensualisation.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMensualisation($mensualisation) {
        $this->mensualisation = $mensualisation;
        return $this;
    }

    /**
     * Set the mt prime1 chantier.
     *
     * @param float $mtPrime1Chantier The mt prime1 chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMtPrime1Chantier($mtPrime1Chantier) {
        $this->mtPrime1Chantier = $mtPrime1Chantier;
        return $this;
    }

    /**
     * Set the mt prime2 chantier.
     *
     * @param float $mtPrime2Chantier The mt prime2 chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMtPrime2Chantier($mtPrime2Chantier) {
        $this->mtPrime2Chantier = $mtPrime2Chantier;
        return $this;
    }

    /**
     * Set the mt prime3 chantier.
     *
     * @param float $mtPrime3Chantier The mt prime3 chantier.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setMtPrime3Chantier($mtPrime3Chantier) {
        $this->mtPrime3Chantier = $mtPrime3Chantier;
        return $this;
    }

    /**
     * Set the nb heures1 rs.
     *
     * @param float $nbHeures1Rs The nb heures1 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures1Rs($nbHeures1Rs) {
        $this->nbHeures1Rs = $nbHeures1Rs;
        return $this;
    }

    /**
     * Set the nb heures1 tp.
     *
     * @param float $nbHeures1Tp The nb heures1 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures1Tp($nbHeures1Tp) {
        $this->nbHeures1Tp = $nbHeures1Tp;
        return $this;
    }

    /**
     * Set the nb heures2 rs.
     *
     * @param float $nbHeures2Rs The nb heures2 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures2Rs($nbHeures2Rs) {
        $this->nbHeures2Rs = $nbHeures2Rs;
        return $this;
    }

    /**
     * Set the nb heures2 tp.
     *
     * @param float $nbHeures2Tp The nb heures2 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbHeures2Tp($nbHeures2Tp) {
        $this->nbHeures2Tp = $nbHeures2Tp;
        return $this;
    }

    /**
     * Set the nb paniers.
     *
     * @param float $nbPaniers The nb paniers.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNbPaniers($nbPaniers) {
        $this->nbPaniers = $nbPaniers;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tx horaire1 rs.
     *
     * @param float $txHoraire1Rs The tx horaire1 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire1Rs($txHoraire1Rs) {
        $this->txHoraire1Rs = $txHoraire1Rs;
        return $this;
    }

    /**
     * Set the tx horaire1 tp.
     *
     * @param float $txHoraire1Tp The tx horaire1 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire1Tp($txHoraire1Tp) {
        $this->txHoraire1Tp = $txHoraire1Tp;
        return $this;
    }

    /**
     * Set the tx horaire2 rs.
     *
     * @param float $txHoraire2Rs The tx horaire2 rs.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire2Rs($txHoraire2Rs) {
        $this->txHoraire2Rs = $txHoraire2Rs;
        return $this;
    }

    /**
     * Set the tx horaire2 tp.
     *
     * @param float $txHoraire2Tp The tx horaire2 tp.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setTxHoraire2Tp($txHoraire2Tp) {
        $this->txHoraire2Tp = $txHoraire2Tp;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     * @return PointEmpTache Returns this Point emp tache.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
