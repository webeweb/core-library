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
 * Temps passes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
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
     * @var DateTime
     */
    private $dateSaisie;

    /**
     * Date sys saisie.
     *
     * @var DateTime
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
     * @var boolean
     */
    private $facturable;

    /**
     * G uniq i d.
     *
     * @var string
     */
    private $gUniqID;

    /**
     * Heure debut.
     *
     * @var DateTime
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var DateTime
     */
    private $heureFin;

    /**
     * I d tps.
     *
     * @var int
     */
    private $iDTps;

    /**
     * Is transf.
     *
     * @var boolean
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
     * Montant c r t.
     *
     * @var float
     */
    private $montantCRT;

    /**
     * Montant t v a.
     *
     * @var float
     */
    private $montantTVA;

    /**
     * Nb km.
     *
     * @var float
     */
    private $nbKm;

    /**
     * Nb u o.
     *
     * @var float
     */
    private $nbUO;

    /**
     * P u.
     *
     * @var float
     */
    private $pU;

    /**
     * P v1.
     *
     * @var float
     */
    private $pV1;

    /**
     * P v2.
     *
     * @var float
     */
    private $pV2;

    /**
     * P v3.
     *
     * @var float
     */
    private $pV3;

    /**
     * Periode edition nd f.
     *
     * @var DateTime
     */
    private $periodeEditionNdF;

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
     * @var boolean
     */
    private $tauxRemiseIci;

    /**
     * Uniq i d facture.
     *
     * @var string
     */
    private $uniqIDFacture;

    /**
     * Valide.
     *
     * @var boolean
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
     * @var DateTime
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
     * @return DateTime Returns the date saisie.
     */
    public function getDateSaisie() {
        return $this->dateSaisie;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime Returns the date sys saisie.
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
     * @return boolean Returns the facturable.
     */
    public function getFacturable() {
        return $this->facturable;
    }

    /**
     * Get the g uniq i d.
     *
     * @return string Returns the g uniq i d.
     */
    public function getGUniqID() {
        return $this->gUniqID;
    }

    /**
     * Get the heure debut.
     *
     * @return DateTime Returns the heure debut.
     */
    public function getHeureDebut() {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime Returns the heure fin.
     */
    public function getHeureFin() {
        return $this->heureFin;
    }

    /**
     * Get the i d tps.
     *
     * @return int Returns the i d tps.
     */
    public function getIDTps() {
        return $this->iDTps;
    }

    /**
     * Get the is transf.
     *
     * @return boolean Returns the is transf.
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
     * Get the montant c r t.
     *
     * @return float Returns the montant c r t.
     */
    public function getMontantCRT() {
        return $this->montantCRT;
    }

    /**
     * Get the montant t v a.
     *
     * @return float Returns the montant t v a.
     */
    public function getMontantTVA() {
        return $this->montantTVA;
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
     * Get the nb u o.
     *
     * @return float Returns the nb u o.
     */
    public function getNbUO() {
        return $this->nbUO;
    }

    /**
     * Get the p u.
     *
     * @return float Returns the p u.
     */
    public function getPU() {
        return $this->pU;
    }

    /**
     * Get the p v1.
     *
     * @return float Returns the p v1.
     */
    public function getPV1() {
        return $this->pV1;
    }

    /**
     * Get the p v2.
     *
     * @return float Returns the p v2.
     */
    public function getPV2() {
        return $this->pV2;
    }

    /**
     * Get the p v3.
     *
     * @return float Returns the p v3.
     */
    public function getPV3() {
        return $this->pV3;
    }

    /**
     * Get the periode edition nd f.
     *
     * @return DateTime Returns the periode edition nd f.
     */
    public function getPeriodeEditionNdF() {
        return $this->periodeEditionNdF;
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
     * @return boolean Returns the taux remise ici.
     */
    public function getTauxRemiseIci() {
        return $this->tauxRemiseIci;
    }

    /**
     * Get the uniq i d facture.
     *
     * @return string Returns the uniq i d facture.
     */
    public function getUniqIDFacture() {
        return $this->uniqIDFacture;
    }

    /**
     * Get the valide.
     *
     * @return boolean Returns the valide.
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
     * @return DateTime Returns the valide date.
     */
    public function getValideDate() {
        return $this->valideDate;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return TempsPasses Returns this temps passes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return TempsPasses Returns this temps passes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return TempsPasses Returns this temps passes.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     * @return TempsPasses Returns this temps passes.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return TempsPasses Returns this temps passes.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code vehicule.
     *
     * @param string $codeVehicule The code vehicule.
     * @return TempsPasses Returns this temps passes.
     */
    public function setCodeVehicule($codeVehicule) {
        $this->codeVehicule = $codeVehicule;
        return $this;
    }

    /**
     * Set the cout km.
     *
     * @param float $coutKm The cout km.
     * @return TempsPasses Returns this temps passes.
     */
    public function setCoutKm($coutKm) {
        $this->coutKm = $coutKm;
        return $this;
    }

    /**
     * Set the date saisie.
     *
     * @param DateTime $dateSaisie The date saisie.
     * @return TempsPasses Returns this temps passes.
     */
    public function setDateSaisie(DateTime $dateSaisie = null) {
        $this->dateSaisie = $dateSaisie;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime $dateSysSaisie The date sys saisie.
     * @return TempsPasses Returns this temps passes.
     */
    public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param int $etat The etat.
     * @return TempsPasses Returns this temps passes.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param boolean $facturable The facturable.
     * @return TempsPasses Returns this temps passes.
     */
    public function setFacturable($facturable) {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the g uniq i d.
     *
     * @param string $gUniqID The g uniq i d.
     * @return TempsPasses Returns this temps passes.
     */
    public function setGUniqID($gUniqID) {
        $this->gUniqID = $gUniqID;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param DateTime $heureDebut The heure debut.
     * @return TempsPasses Returns this temps passes.
     */
    public function setHeureDebut(DateTime $heureDebut = null) {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime $heureFin The heure fin.
     * @return TempsPasses Returns this temps passes.
     */
    public function setHeureFin(DateTime $heureFin = null) {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the i d tps.
     *
     * @param int $iDTps The i d tps.
     * @return TempsPasses Returns this temps passes.
     */
    public function setIDTps($iDTps) {
        $this->iDTps = $iDTps;
        return $this;
    }

    /**
     * Set the is transf.
     *
     * @param boolean $isTransf The is transf.
     * @return TempsPasses Returns this temps passes.
     */
    public function setIsTransf($isTransf) {
        $this->isTransf = $isTransf;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return TempsPasses Returns this temps passes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     * @return TempsPasses Returns this temps passes.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the montant c r t.
     *
     * @param float $montantCRT The montant c r t.
     * @return TempsPasses Returns this temps passes.
     */
    public function setMontantCRT($montantCRT) {
        $this->montantCRT = $montantCRT;
        return $this;
    }

    /**
     * Set the montant t v a.
     *
     * @param float $montantTVA The montant t v a.
     * @return TempsPasses Returns this temps passes.
     */
    public function setMontantTVA($montantTVA) {
        $this->montantTVA = $montantTVA;
        return $this;
    }

    /**
     * Set the nb km.
     *
     * @param float $nbKm The nb km.
     * @return TempsPasses Returns this temps passes.
     */
    public function setNbKm($nbKm) {
        $this->nbKm = $nbKm;
        return $this;
    }

    /**
     * Set the nb u o.
     *
     * @param float $nbUO The nb u o.
     * @return TempsPasses Returns this temps passes.
     */
    public function setNbUO($nbUO) {
        $this->nbUO = $nbUO;
        return $this;
    }

    /**
     * Set the p u.
     *
     * @param float $pU The p u.
     * @return TempsPasses Returns this temps passes.
     */
    public function setPU($pU) {
        $this->pU = $pU;
        return $this;
    }

    /**
     * Set the p v1.
     *
     * @param float $pV1 The p v1.
     * @return TempsPasses Returns this temps passes.
     */
    public function setPV1($pV1) {
        $this->pV1 = $pV1;
        return $this;
    }

    /**
     * Set the p v2.
     *
     * @param float $pV2 The p v2.
     * @return TempsPasses Returns this temps passes.
     */
    public function setPV2($pV2) {
        $this->pV2 = $pV2;
        return $this;
    }

    /**
     * Set the p v3.
     *
     * @param float $pV3 The p v3.
     * @return TempsPasses Returns this temps passes.
     */
    public function setPV3($pV3) {
        $this->pV3 = $pV3;
        return $this;
    }

    /**
     * Set the periode edition nd f.
     *
     * @param DateTime $periodeEditionNdF The periode edition nd f.
     * @return TempsPasses Returns this temps passes.
     */
    public function setPeriodeEditionNdF(DateTime $periodeEditionNdF = null) {
        $this->periodeEditionNdF = $periodeEditionNdF;
        return $this;
    }

    /**
     * Set the qte.
     *
     * @param float $qte The qte.
     * @return TempsPasses Returns this temps passes.
     */
    public function setQte($qte) {
        $this->qte = $qte;
        return $this;
    }

    /**
     * Set the taux remise.
     *
     * @param float $tauxRemise The taux remise.
     * @return TempsPasses Returns this temps passes.
     */
    public function setTauxRemise($tauxRemise) {
        $this->tauxRemise = $tauxRemise;
        return $this;
    }

    /**
     * Set the taux remise ici.
     *
     * @param boolean $tauxRemiseIci The taux remise ici.
     * @return TempsPasses Returns this temps passes.
     */
    public function setTauxRemiseIci($tauxRemiseIci) {
        $this->tauxRemiseIci = $tauxRemiseIci;
        return $this;
    }

    /**
     * Set the uniq i d facture.
     *
     * @param string $uniqIDFacture The uniq i d facture.
     * @return TempsPasses Returns this temps passes.
     */
    public function setUniqIDFacture($uniqIDFacture) {
        $this->uniqIDFacture = $uniqIDFacture;
        return $this;
    }

    /**
     * Set the valide.
     *
     * @param boolean $valide The valide.
     * @return TempsPasses Returns this temps passes.
     */
    public function setValide($valide) {
        $this->valide = $valide;
        return $this;
    }

    /**
     * Set the valide collab.
     *
     * @param string $valideCollab The valide collab.
     * @return TempsPasses Returns this temps passes.
     */
    public function setValideCollab($valideCollab) {
        $this->valideCollab = $valideCollab;
        return $this;
    }

    /**
     * Set the valide date.
     *
     * @param DateTime $valideDate The valide date.
     * @return TempsPasses Returns this temps passes.
     */
    public function setValideDate(DateTime $valideDate = null) {
        $this->valideDate = $valideDate;
        return $this;
    }

}
