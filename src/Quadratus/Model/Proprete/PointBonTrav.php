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
 * Point bon trav model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PointBonTrav {

    /**
     * Avenant signe.
     *
     * @var boolean
     */
    private $avenantSigne;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code equipe.
     *
     * @var string
     */
    private $codeEquipe;

    /**
     * Code tache type.
     *
     * @var string
     */
    private $codeTacheType;

    /**
     * Date passage.
     *
     * @var DateTime
     */
    private $datePassage;

    /**
     * Date ref b t.
     *
     * @var DateTime
     */
    private $dateRefBT;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * From gen b t.
     *
     * @var boolean
     */
    private $fromGenBT;

    /**
     * Heure deb.
     *
     * @var DateTime
     */
    private $heureDeb;

    /**
     * Heure deb mob.
     *
     * @var DateTime
     */
    private $heureDebMob;

    /**
     * Heure fin mob.
     *
     * @var DateTime
     */
    private $heureFinMob;

    /**
     * Heures jour.
     *
     * @var DateTime
     */
    private $heuresJour;

    /**
     * Heures nuit.
     *
     * @var DateTime
     */
    private $heuresNuit;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Nom prenom.
     *
     * @var string
     */
    private $nomPrenom;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Num chrono.
     *
     * @var int
     */
    private $numChrono;

    /**
     * Numero avenant.
     *
     * @var int
     */
    private $numeroAvenant;

    /**
     * Paniers.
     *
     * @var float
     */
    private $paniers;

    /**
     * Prime1.
     *
     * @var float
     */
    private $prime1;

    /**
     * Prime2.
     *
     * @var float
     */
    private $prime2;

    /**
     * Prime3.
     *
     * @var float
     */
    private $prime3;

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * Transfert paie.
     *
     * @var string
     */
    private $transfertPaie;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

    /**
     * Valide mob.
     *
     * @var boolean
     */
    private $valideMob;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avenant signe.
     *
     * @return boolean Returns the avenant signe.
     */
    public function getAvenantSigne() {
        return $this->avenantSigne;
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
     * Get the code equipe.
     *
     * @return string Returns the code equipe.
     */
    public function getCodeEquipe() {
        return $this->codeEquipe;
    }

    /**
     * Get the code tache type.
     *
     * @return string Returns the code tache type.
     */
    public function getCodeTacheType() {
        return $this->codeTacheType;
    }

    /**
     * Get the date passage.
     *
     * @return DateTime Returns the date passage.
     */
    public function getDatePassage() {
        return $this->datePassage;
    }

    /**
     * Get the date ref b t.
     *
     * @return DateTime Returns the date ref b t.
     */
    public function getDateRefBT() {
        return $this->dateRefBT;
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
     * Get the from gen b t.
     *
     * @return boolean Returns the from gen b t.
     */
    public function getFromGenBT() {
        return $this->fromGenBT;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime Returns the heure deb.
     */
    public function getHeureDeb() {
        return $this->heureDeb;
    }

    /**
     * Get the heure deb mob.
     *
     * @return DateTime Returns the heure deb mob.
     */
    public function getHeureDebMob() {
        return $this->heureDebMob;
    }

    /**
     * Get the heure fin mob.
     *
     * @return DateTime Returns the heure fin mob.
     */
    public function getHeureFinMob() {
        return $this->heureFinMob;
    }

    /**
     * Get the heures jour.
     *
     * @return DateTime Returns the heures jour.
     */
    public function getHeuresJour() {
        return $this->heuresJour;
    }

    /**
     * Get the heures nuit.
     *
     * @return DateTime Returns the heures nuit.
     */
    public function getHeuresNuit() {
        return $this->heuresNuit;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the nom prenom.
     *
     * @return string Returns the nom prenom.
     */
    public function getNomPrenom() {
        return $this->nomPrenom;
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
     * Get the num chrono.
     *
     * @return int Returns the num chrono.
     */
    public function getNumChrono() {
        return $this->numChrono;
    }

    /**
     * Get the numero avenant.
     *
     * @return int Returns the numero avenant.
     */
    public function getNumeroAvenant() {
        return $this->numeroAvenant;
    }

    /**
     * Get the paniers.
     *
     * @return float Returns the paniers.
     */
    public function getPaniers() {
        return $this->paniers;
    }

    /**
     * Get the prime1.
     *
     * @return float Returns the prime1.
     */
    public function getPrime1() {
        return $this->prime1;
    }

    /**
     * Get the prime2.
     *
     * @return float Returns the prime2.
     */
    public function getPrime2() {
        return $this->prime2;
    }

    /**
     * Get the prime3.
     *
     * @return float Returns the prime3.
     */
    public function getPrime3() {
        return $this->prime3;
    }

    /**
     * Get the qualification.
     *
     * @return string Returns the qualification.
     */
    public function getQualification() {
        return $this->qualification;
    }

    /**
     * Get the transfert paie.
     *
     * @return string Returns the transfert paie.
     */
    public function getTransfertPaie() {
        return $this->transfertPaie;
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
     * Get the valide mob.
     *
     * @return boolean Returns the valide mob.
     */
    public function getValideMob() {
        return $this->valideMob;
    }

    /**
     * Set the avenant signe.
     *
     * @param boolean $avenantSigne The avenant signe.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setAvenantSigne($avenantSigne) {
        $this->avenantSigne = $avenantSigne;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string $codeEquipe The code equipe.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setCodeEquipe($codeEquipe) {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }

    /**
     * Set the code tache type.
     *
     * @param string $codeTacheType The code tache type.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setCodeTacheType($codeTacheType) {
        $this->codeTacheType = $codeTacheType;
        return $this;
    }

    /**
     * Set the date passage.
     *
     * @param DateTime $datePassage The date passage.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setDatePassage(DateTime $datePassage = null) {
        $this->datePassage = $datePassage;
        return $this;
    }

    /**
     * Set the date ref b t.
     *
     * @param DateTime $dateRefBT The date ref b t.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setDateRefBT(DateTime $dateRefBT = null) {
        $this->dateRefBT = $dateRefBT;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the from gen b t.
     *
     * @param boolean $fromGenBT The from gen b t.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setFromGenBT($fromGenBT) {
        $this->fromGenBT = $fromGenBT;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime $heureDeb The heure deb.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setHeureDeb(DateTime $heureDeb = null) {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the heure deb mob.
     *
     * @param DateTime $heureDebMob The heure deb mob.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setHeureDebMob(DateTime $heureDebMob = null) {
        $this->heureDebMob = $heureDebMob;
        return $this;
    }

    /**
     * Set the heure fin mob.
     *
     * @param DateTime $heureFinMob The heure fin mob.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setHeureFinMob(DateTime $heureFinMob = null) {
        $this->heureFinMob = $heureFinMob;
        return $this;
    }

    /**
     * Set the heures jour.
     *
     * @param DateTime $heuresJour The heures jour.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setHeuresJour(DateTime $heuresJour = null) {
        $this->heuresJour = $heuresJour;
        return $this;
    }

    /**
     * Set the heures nuit.
     *
     * @param DateTime $heuresNuit The heures nuit.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setHeuresNuit(DateTime $heuresNuit = null) {
        $this->heuresNuit = $heuresNuit;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nom prenom.
     *
     * @param string $nomPrenom The nom prenom.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setNomPrenom($nomPrenom) {
        $this->nomPrenom = $nomPrenom;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the num chrono.
     *
     * @param int $numChrono The num chrono.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setNumChrono($numChrono) {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the paniers.
     *
     * @param float $paniers The paniers.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setPaniers($paniers) {
        $this->paniers = $paniers;
        return $this;
    }

    /**
     * Set the prime1.
     *
     * @param float $prime1 The prime1.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setPrime1($prime1) {
        $this->prime1 = $prime1;
        return $this;
    }

    /**
     * Set the prime2.
     *
     * @param float $prime2 The prime2.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setPrime2($prime2) {
        $this->prime2 = $prime2;
        return $this;
    }

    /**
     * Set the prime3.
     *
     * @param float $prime3 The prime3.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setPrime3($prime3) {
        $this->prime3 = $prime3;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the transfert paie.
     *
     * @param string $transfertPaie The transfert paie.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setTransfertPaie($transfertPaie) {
        $this->transfertPaie = $transfertPaie;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }

    /**
     * Set the valide mob.
     *
     * @param boolean $valideMob The valide mob.
     * @return PointBonTrav Returns this point bon trav.
     */
    public function setValideMob($valideMob) {
        $this->valideMob = $valideMob;
        return $this;
    }

}
