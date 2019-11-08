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
 * Temps passes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TempsPasses {

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
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Code vehicule.
     *
     * @var string
     */
    private $codeVehicule;

    /**
     * Cout km.
     *
     * @var float
     */
    private $coutKm;

    /**
     * Date saisie.
     *
     * @var DateTime|null
     */
    private $dateSaisie;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Etat.
     *
     * @var int
     */
    private $etat;

    /**
     * Facturable.
     *
     * @var bool
     */
    private $facturable;

    /**
     * G uniq id.
     *
     * @var string
     */
    private $gUniqId;

    /**
     * Heure debut.
     *
     * @var DateTime|null
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var DateTime|null
     */
    private $heureFin;

    /**
     * Id tps.
     *
     * @var int
     */
    private $idTps;

    /**
     * Is transf.
     *
     * @var bool
     */
    private $isTransf;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Monnaie.
     *
     * @var string
     */
    private $monnaie;

    /**
     * Montant crt.
     *
     * @var float
     */
    private $montantCrt;

    /**
     * Montant tva.
     *
     * @var float
     */
    private $montantTva;

    /**
     * Nb km.
     *
     * @var float
     */
    private $nbKm;

    /**
     * Nb uo.
     *
     * @var float
     */
    private $nbUo;

    /**
     * Periode edition nd f.
     *
     * @var DateTime|null
     */
    private $periodeEditionNdF;

    /**
     * Pu.
     *
     * @var float
     */
    private $pu;

    /**
     * Pv1.
     *
     * @var float
     */
    private $pv1;

    /**
     * Pv2.
     *
     * @var float
     */
    private $pv2;

    /**
     * Pv3.
     *
     * @var float
     */
    private $pv3;

    /**
     * Qte.
     *
     * @var float
     */
    private $qte;

    /**
     * Taux remise.
     *
     * @var float
     */
    private $tauxRemise;

    /**
     * Taux remise ici.
     *
     * @var bool
     */
    private $tauxRemiseIci;

    /**
     * Uniq id facture.
     *
     * @var string
     */
    private $uniqIdFacture;

    /**
     * Valide.
     *
     * @var bool
     */
    private $valide;

    /**
     * Valide collab.
     *
     * @var string
     */
    private $valideCollab;

    /**
     * Valide date.
     *
     * @var DateTime|null
     */
    private $valideDate;

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
     * Get the code phase.
     *
     * @return string Returns the code phase.
     */
    public function getCodePhase() {
        return $this->codePhase;
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
     * Get the code vehicule.
     *
     * @return string Returns the code vehicule.
     */
    public function getCodeVehicule() {
        return $this->codeVehicule;
    }

    /**
     * Get the cout km.
     *
     * @return float Returns the cout km.
     */
    public function getCoutKm() {
        return $this->coutKm;
    }

    /**
     * Get the date saisie.
     *
     * @return DateTime|null Returns the date saisie.
     */
    public function getDateSaisie() {
        return $this->dateSaisie;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
     */
    public function getDateSysSaisie() {
        return $this->dateSysSaisie;
    }

    /**
     * Get the etat.
     *
     * @return int Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the facturable.
     *
     * @return bool Returns the facturable.
     */
    public function getFacturable() {
        return $this->facturable;
    }

    /**
     * Get the g uniq id.
     *
     * @return string Returns the g uniq id.
     */
    public function getGUniqId() {
        return $this->gUniqId;
    }

    /**
     * Get the heure debut.
     *
     * @return DateTime|null Returns the heure debut.
     */
    public function getHeureDebut() {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime|null Returns the heure fin.
     */
    public function getHeureFin() {
        return $this->heureFin;
    }

    /**
     * Get the id tps.
     *
     * @return int Returns the id tps.
     */
    public function getIdTps() {
        return $this->idTps;
    }

    /**
     * Get the is transf.
     *
     * @return bool Returns the is transf.
     */
    public function getIsTransf() {
        return $this->isTransf;
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
     * Get the monnaie.
     *
     * @return string Returns the monnaie.
     */
    public function getMonnaie() {
        return $this->monnaie;
    }

    /**
     * Get the montant crt.
     *
     * @return float Returns the montant crt.
     */
    public function getMontantCrt() {
        return $this->montantCrt;
    }

    /**
     * Get the montant tva.
     *
     * @return float Returns the montant tva.
     */
    public function getMontantTva() {
        return $this->montantTva;
    }

    /**
     * Get the nb km.
     *
     * @return float Returns the nb km.
     */
    public function getNbKm() {
        return $this->nbKm;
    }

    /**
     * Get the nb uo.
     *
     * @return float Returns the nb uo.
     */
    public function getNbUo() {
        return $this->nbUo;
    }

    /**
     * Get the periode edition nd f.
     *
     * @return DateTime|null Returns the periode edition nd f.
     */
    public function getPeriodeEditionNdF() {
        return $this->periodeEditionNdF;
    }

    /**
     * Get the pu.
     *
     * @return float Returns the pu.
     */
    public function getPu() {
        return $this->pu;
    }

    /**
     * Get the pv1.
     *
     * @return float Returns the pv1.
     */
    public function getPv1() {
        return $this->pv1;
    }

    /**
     * Get the pv2.
     *
     * @return float Returns the pv2.
     */
    public function getPv2() {
        return $this->pv2;
    }

    /**
     * Get the pv3.
     *
     * @return float Returns the pv3.
     */
    public function getPv3() {
        return $this->pv3;
    }

    /**
     * Get the qte.
     *
     * @return float Returns the qte.
     */
    public function getQte() {
        return $this->qte;
    }

    /**
     * Get the taux remise.
     *
     * @return float Returns the taux remise.
     */
    public function getTauxRemise() {
        return $this->tauxRemise;
    }

    /**
     * Get the taux remise ici.
     *
     * @return bool Returns the taux remise ici.
     */
    public function getTauxRemiseIci() {
        return $this->tauxRemiseIci;
    }

    /**
     * Get the uniq id facture.
     *
     * @return string Returns the uniq id facture.
     */
    public function getUniqIdFacture() {
        return $this->uniqIdFacture;
    }

    /**
     * Get the valide.
     *
     * @return bool Returns the valide.
     */
    public function getValide() {
        return $this->valide;
    }

    /**
     * Get the valide collab.
     *
     * @return string Returns the valide collab.
     */
    public function getValideCollab() {
        return $this->valideCollab;
    }

    /**
     * Get the valide date.
     *
     * @return DateTime|null Returns the valide date.
     */
    public function getValideDate() {
        return $this->valideDate;
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
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
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
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code vehicule.
     *
     * @param string $codeVehicule The code vehicule.
     */
    public function setCodeVehicule($codeVehicule) {
        $this->codeVehicule = $codeVehicule;
        return $this;
    }

    /**
     * Set the cout km.
     *
     * @param float $coutKm The cout km.
     */
    public function setCoutKm($coutKm) {
        $this->coutKm = $coutKm;
        return $this;
    }

    /**
     * Set the date saisie.
     *
     * @param DateTime|null $dateSaisie The date saisie.
     */
    public function setDateSaisie(DateTime $dateSaisie = null) {
        $this->dateSaisie = $dateSaisie;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     */
    public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param int $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param bool $facturable The facturable.
     */
    public function setFacturable($facturable) {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the g uniq id.
     *
     * @param string $gUniqId The g uniq id.
     */
    public function setGUniqId($gUniqId) {
        $this->gUniqId = $gUniqId;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param DateTime|null $heureDebut The heure debut.
     */
    public function setHeureDebut(DateTime $heureDebut = null) {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime|null $heureFin The heure fin.
     */
    public function setHeureFin(DateTime $heureFin = null) {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the id tps.
     *
     * @param int $idTps The id tps.
     */
    public function setIdTps($idTps) {
        $this->idTps = $idTps;
        return $this;
    }

    /**
     * Set the is transf.
     *
     * @param bool $isTransf The is transf.
     */
    public function setIsTransf($isTransf) {
        $this->isTransf = $isTransf;
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
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the montant crt.
     *
     * @param float $montantCrt The montant crt.
     */
    public function setMontantCrt($montantCrt) {
        $this->montantCrt = $montantCrt;
        return $this;
    }

    /**
     * Set the montant tva.
     *
     * @param float $montantTva The montant tva.
     */
    public function setMontantTva($montantTva) {
        $this->montantTva = $montantTva;
        return $this;
    }

    /**
     * Set the nb km.
     *
     * @param float $nbKm The nb km.
     */
    public function setNbKm($nbKm) {
        $this->nbKm = $nbKm;
        return $this;
    }

    /**
     * Set the nb uo.
     *
     * @param float $nbUo The nb uo.
     */
    public function setNbUo($nbUo) {
        $this->nbUo = $nbUo;
        return $this;
    }

    /**
     * Set the periode edition nd f.
     *
     * @param DateTime|null $periodeEditionNdF The periode edition nd f.
     */
    public function setPeriodeEditionNdF(DateTime $periodeEditionNdF = null) {
        $this->periodeEditionNdF = $periodeEditionNdF;
        return $this;
    }

    /**
     * Set the pu.
     *
     * @param float $pu The pu.
     */
    public function setPu($pu) {
        $this->pu = $pu;
        return $this;
    }

    /**
     * Set the pv1.
     *
     * @param float $pv1 The pv1.
     */
    public function setPv1($pv1) {
        $this->pv1 = $pv1;
        return $this;
    }

    /**
     * Set the pv2.
     *
     * @param float $pv2 The pv2.
     */
    public function setPv2($pv2) {
        $this->pv2 = $pv2;
        return $this;
    }

    /**
     * Set the pv3.
     *
     * @param float $pv3 The pv3.
     */
    public function setPv3($pv3) {
        $this->pv3 = $pv3;
        return $this;
    }

    /**
     * Set the qte.
     *
     * @param float $qte The qte.
     */
    public function setQte($qte) {
        $this->qte = $qte;
        return $this;
    }

    /**
     * Set the taux remise.
     *
     * @param float $tauxRemise The taux remise.
     */
    public function setTauxRemise($tauxRemise) {
        $this->tauxRemise = $tauxRemise;
        return $this;
    }

    /**
     * Set the taux remise ici.
     *
     * @param bool $tauxRemiseIci The taux remise ici.
     */
    public function setTauxRemiseIci($tauxRemiseIci) {
        $this->tauxRemiseIci = $tauxRemiseIci;
        return $this;
    }

    /**
     * Set the uniq id facture.
     *
     * @param string $uniqIdFacture The uniq id facture.
     */
    public function setUniqIdFacture($uniqIdFacture) {
        $this->uniqIdFacture = $uniqIdFacture;
        return $this;
    }

    /**
     * Set the valide.
     *
     * @param bool $valide The valide.
     */
    public function setValide($valide) {
        $this->valide = $valide;
        return $this;
    }

    /**
     * Set the valide collab.
     *
     * @param string $valideCollab The valide collab.
     */
    public function setValideCollab($valideCollab) {
        $this->valideCollab = $valideCollab;
        return $this;
    }

    /**
     * Set the valide date.
     *
     * @param DateTime|null $valideDate The valide date.
     */
    public function setValideDate(DateTime $valideDate = null) {
        $this->valideDate = $valideDate;
        return $this;
    }
}
