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
 * Abs emp remplacants model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AbsEmpRemplacants {

    /**
     * Ajouter en h compl.
     *
     * @var boolean
     */
    private $ajouterEnHCompl;

    /**
     * Avenant h rempl.
     *
     * @var boolean
     */
    private $avenantHRempl;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code affaire rempl.
     *
     * @var string
     */
    private $codeAffaireRempl;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code chantier rempl.
     *
     * @var string
     */
    private $codeChantierRempl;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code client rempl.
     *
     * @var string
     */
    private $codeClientRempl;

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
     * Code tache rempl.
     *
     * @var string
     */
    private $codeTacheRempl;

    /**
     * Date abs decalee.
     *
     * @var DateTime
     */
    private $dateAbsDecalee;

    /**
     * Date debut abs.
     *
     * @var DateTime
     */
    private $dateDebutAbs;

    /**
     * Date debut rempl.
     *
     * @var DateTime
     */
    private $dateDebutRempl;

    /**
     * Date fin rempl.
     *
     * @var DateTime
     */
    private $dateFinRempl;

    /**
     * Date validation synchro.
     *
     * @var DateTime
     */
    private $dateValidationSynchro;

    /**
     * Duree remplacement.
     *
     * @var float
     */
    private $dureeRemplacement;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Num b t rempl.
     *
     * @var int
     */
    private $numBTRempl;

    /**
     * Num rempl.
     *
     * @var int
     */
    private $numRempl;

    /**
     * Numero avenant.
     *
     * @var int
     */
    private $numeroAvenant;

    /**
     * Remplacant travaille j f.
     *
     * @var boolean
     */
    private $remplacantTravailleJF;

    /**
     * Remplacement complet.
     *
     * @var boolean
     */
    private $remplacementComplet;

    /**
     * Remplacement modifie.
     *
     * @var boolean
     */
    private $remplacementModifie;

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
     * Get the ajouter en h compl.
     *
     * @return boolean Returns the ajouter en h compl.
     */
    public function getAjouterEnHCompl() {
        return $this->ajouterEnHCompl;
    }

    /**
     * Get the avenant h rempl.
     *
     * @return boolean Returns the avenant h rempl.
     */
    public function getAvenantHRempl() {
        return $this->avenantHRempl;
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
     * Get the code affaire rempl.
     *
     * @return string Returns the code affaire rempl.
     */
    public function getCodeAffaireRempl() {
        return $this->codeAffaireRempl;
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
     * Get the code chantier rempl.
     *
     * @return string Returns the code chantier rempl.
     */
    public function getCodeChantierRempl() {
        return $this->codeChantierRempl;
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
     * Get the code client rempl.
     *
     * @return string Returns the code client rempl.
     */
    public function getCodeClientRempl() {
        return $this->codeClientRempl;
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
     * Get the code tache rempl.
     *
     * @return string Returns the code tache rempl.
     */
    public function getCodeTacheRempl() {
        return $this->codeTacheRempl;
    }

    /**
     * Get the date abs decalee.
     *
     * @return DateTime Returns the date abs decalee.
     */
    public function getDateAbsDecalee() {
        return $this->dateAbsDecalee;
    }

    /**
     * Get the date debut abs.
     *
     * @return DateTime Returns the date debut abs.
     */
    public function getDateDebutAbs() {
        return $this->dateDebutAbs;
    }

    /**
     * Get the date debut rempl.
     *
     * @return DateTime Returns the date debut rempl.
     */
    public function getDateDebutRempl() {
        return $this->dateDebutRempl;
    }

    /**
     * Get the date fin rempl.
     *
     * @return DateTime Returns the date fin rempl.
     */
    public function getDateFinRempl() {
        return $this->dateFinRempl;
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
     * Get the duree remplacement.
     *
     * @return float Returns the duree remplacement.
     */
    public function getDureeRemplacement() {
        return $this->dureeRemplacement;
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
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
    }

    /**
     * Get the num b t rempl.
     *
     * @return int Returns the num b t rempl.
     */
    public function getNumBTRempl() {
        return $this->numBTRempl;
    }

    /**
     * Get the num rempl.
     *
     * @return int Returns the num rempl.
     */
    public function getNumRempl() {
        return $this->numRempl;
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
     * Get the remplacant travaille j f.
     *
     * @return boolean Returns the remplacant travaille j f.
     */
    public function getRemplacantTravailleJF() {
        return $this->remplacantTravailleJF;
    }

    /**
     * Get the remplacement complet.
     *
     * @return boolean Returns the remplacement complet.
     */
    public function getRemplacementComplet() {
        return $this->remplacementComplet;
    }

    /**
     * Get the remplacement modifie.
     *
     * @return boolean Returns the remplacement modifie.
     */
    public function getRemplacementModifie() {
        return $this->remplacementModifie;
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
     * Set the ajouter en h compl.
     *
     * @param boolean $ajouterEnHCompl The ajouter en h compl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setAjouterEnHCompl($ajouterEnHCompl) {
        $this->ajouterEnHCompl = $ajouterEnHCompl;
        return $this;
    }

    /**
     * Set the avenant h rempl.
     *
     * @param boolean $avenantHRempl The avenant h rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setAvenantHRempl($avenantHRempl) {
        $this->avenantHRempl = $avenantHRempl;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code affaire rempl.
     *
     * @param string $codeAffaireRempl The code affaire rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeAffaireRempl($codeAffaireRempl) {
        $this->codeAffaireRempl = $codeAffaireRempl;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code chantier rempl.
     *
     * @param string $codeChantierRempl The code chantier rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeChantierRempl($codeChantierRempl) {
        $this->codeChantierRempl = $codeChantierRempl;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code client rempl.
     *
     * @param string $codeClientRempl The code client rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeClientRempl($codeClientRempl) {
        $this->codeClientRempl = $codeClientRempl;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string $codeRemplacant The code remplacant.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeRemplacant($codeRemplacant) {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tache rempl.
     *
     * @param string $codeTacheRempl The code tache rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setCodeTacheRempl($codeTacheRempl) {
        $this->codeTacheRempl = $codeTacheRempl;
        return $this;
    }

    /**
     * Set the date abs decalee.
     *
     * @param DateTime $dateAbsDecalee The date abs decalee.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setDateAbsDecalee(DateTime $dateAbsDecalee = null) {
        $this->dateAbsDecalee = $dateAbsDecalee;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime $dateDebutAbs The date debut abs.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setDateDebutAbs(DateTime $dateDebutAbs = null) {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date debut rempl.
     *
     * @param DateTime $dateDebutRempl The date debut rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setDateDebutRempl(DateTime $dateDebutRempl = null) {
        $this->dateDebutRempl = $dateDebutRempl;
        return $this;
    }

    /**
     * Set the date fin rempl.
     *
     * @param DateTime $dateFinRempl The date fin rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setDateFinRempl(DateTime $dateFinRempl = null) {
        $this->dateFinRempl = $dateFinRempl;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime $dateValidationSynchro The date validation synchro.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the duree remplacement.
     *
     * @param float $dureeRemplacement The duree remplacement.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setDureeRemplacement($dureeRemplacement) {
        $this->dureeRemplacement = $dureeRemplacement;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the num b t rempl.
     *
     * @param int $numBTRempl The num b t rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setNumBTRempl($numBTRempl) {
        $this->numBTRempl = $numBTRempl;
        return $this;
    }

    /**
     * Set the num rempl.
     *
     * @param int $numRempl The num rempl.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setNumRempl($numRempl) {
        $this->numRempl = $numRempl;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the remplacant travaille j f.
     *
     * @param boolean $remplacantTravailleJF The remplacant travaille j f.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setRemplacantTravailleJF($remplacantTravailleJF) {
        $this->remplacantTravailleJF = $remplacantTravailleJF;
        return $this;
    }

    /**
     * Set the remplacement complet.
     *
     * @param boolean $remplacementComplet The remplacement complet.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setRemplacementComplet($remplacementComplet) {
        $this->remplacementComplet = $remplacementComplet;
        return $this;
    }

    /**
     * Set the remplacement modifie.
     *
     * @param boolean $remplacementModifie The remplacement modifie.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setRemplacementModifie($remplacementModifie) {
        $this->remplacementModifie = $remplacementModifie;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return AbsEmpRemplacants Returns this abs emp remplacants.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }

}
