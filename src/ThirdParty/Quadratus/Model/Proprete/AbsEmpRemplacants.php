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
 * Abs emp remplacants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsEmpRemplacants {

    /**
     * Ajouter en h compl.
     *
     * @var bool
     */
    private $ajouterEnHCompl;

    /**
     * Avenant h rempl.
     *
     * @var bool
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
     * @var DateTime|null
     */
    private $dateAbsDecalee;

    /**
     * Date debut abs.
     *
     * @var DateTime|null
     */
    private $dateDebutAbs;

    /**
     * Date debut rempl.
     *
     * @var DateTime|null
     */
    private $dateDebutRempl;

    /**
     * Date fin rempl.
     *
     * @var DateTime|null
     */
    private $dateFinRempl;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
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
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Num bt rempl.
     *
     * @var int
     */
    private $numBtRempl;

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
     * Remplacant travaille jf.
     *
     * @var bool
     */
    private $remplacantTravailleJf;

    /**
     * Remplacement complet.
     *
     * @var bool
     */
    private $remplacementComplet;

    /**
     * Remplacement modifie.
     *
     * @var bool
     */
    private $remplacementModifie;

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
     * Get the ajouter en h compl.
     *
     * @return bool Returns the ajouter en h compl.
     */
    public function getAjouterEnHCompl() {
        return $this->ajouterEnHCompl;
    }

    /**
     * Get the avenant h rempl.
     *
     * @return bool Returns the avenant h rempl.
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
     * @return DateTime|null Returns the date abs decalee.
     */
    public function getDateAbsDecalee() {
        return $this->dateAbsDecalee;
    }

    /**
     * Get the date debut abs.
     *
     * @return DateTime|null Returns the date debut abs.
     */
    public function getDateDebutAbs() {
        return $this->dateDebutAbs;
    }

    /**
     * Get the date debut rempl.
     *
     * @return DateTime|null Returns the date debut rempl.
     */
    public function getDateDebutRempl() {
        return $this->dateDebutRempl;
    }

    /**
     * Get the date fin rempl.
     *
     * @return DateTime|null Returns the date fin rempl.
     */
    public function getDateFinRempl() {
        return $this->dateFinRempl;
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
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the num bt rempl.
     *
     * @return int Returns the num bt rempl.
     */
    public function getNumBtRempl() {
        return $this->numBtRempl;
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
     * Get the remplacant travaille jf.
     *
     * @return bool Returns the remplacant travaille jf.
     */
    public function getRemplacantTravailleJf() {
        return $this->remplacantTravailleJf;
    }

    /**
     * Get the remplacement complet.
     *
     * @return bool Returns the remplacement complet.
     */
    public function getRemplacementComplet() {
        return $this->remplacementComplet;
    }

    /**
     * Get the remplacement modifie.
     *
     * @return bool Returns the remplacement modifie.
     */
    public function getRemplacementModifie() {
        return $this->remplacementModifie;
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
     * Set the ajouter en h compl.
     *
     * @param bool $ajouterEnHCompl The ajouter en h compl.
     */
    public function setAjouterEnHCompl($ajouterEnHCompl) {
        $this->ajouterEnHCompl = $ajouterEnHCompl;
        return $this;
    }

    /**
     * Set the avenant h rempl.
     *
     * @param bool $avenantHRempl The avenant h rempl.
     */
    public function setAvenantHRempl($avenantHRempl) {
        $this->avenantHRempl = $avenantHRempl;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code affaire rempl.
     *
     * @param string $codeAffaireRempl The code affaire rempl.
     */
    public function setCodeAffaireRempl($codeAffaireRempl) {
        $this->codeAffaireRempl = $codeAffaireRempl;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code chantier rempl.
     *
     * @param string $codeChantierRempl The code chantier rempl.
     */
    public function setCodeChantierRempl($codeChantierRempl) {
        $this->codeChantierRempl = $codeChantierRempl;
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
     * Set the code client rempl.
     *
     * @param string $codeClientRempl The code client rempl.
     */
    public function setCodeClientRempl($codeClientRempl) {
        $this->codeClientRempl = $codeClientRempl;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
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
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string $codeRemplacant The code remplacant.
     */
    public function setCodeRemplacant($codeRemplacant) {
        $this->codeRemplacant = $codeRemplacant;
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
     * Set the code tache rempl.
     *
     * @param string $codeTacheRempl The code tache rempl.
     */
    public function setCodeTacheRempl($codeTacheRempl) {
        $this->codeTacheRempl = $codeTacheRempl;
        return $this;
    }

    /**
     * Set the date abs decalee.
     *
     * @param DateTime|null $dateAbsDecalee The date abs decalee.
     */
    public function setDateAbsDecalee(DateTime $dateAbsDecalee = null) {
        $this->dateAbsDecalee = $dateAbsDecalee;
        return $this;
    }

    /**
     * Set the date debut abs.
     *
     * @param DateTime|null $dateDebutAbs The date debut abs.
     */
    public function setDateDebutAbs(DateTime $dateDebutAbs = null) {
        $this->dateDebutAbs = $dateDebutAbs;
        return $this;
    }

    /**
     * Set the date debut rempl.
     *
     * @param DateTime|null $dateDebutRempl The date debut rempl.
     */
    public function setDateDebutRempl(DateTime $dateDebutRempl = null) {
        $this->dateDebutRempl = $dateDebutRempl;
        return $this;
    }

    /**
     * Set the date fin rempl.
     *
     * @param DateTime|null $dateFinRempl The date fin rempl.
     */
    public function setDateFinRempl(DateTime $dateFinRempl = null) {
        $this->dateFinRempl = $dateFinRempl;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the duree remplacement.
     *
     * @param float $dureeRemplacement The duree remplacement.
     */
    public function setDureeRemplacement($dureeRemplacement) {
        $this->dureeRemplacement = $dureeRemplacement;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num bt rempl.
     *
     * @param int $numBtRempl The num bt rempl.
     */
    public function setNumBtRempl($numBtRempl) {
        $this->numBtRempl = $numBtRempl;
        return $this;
    }

    /**
     * Set the num rempl.
     *
     * @param int $numRempl The num rempl.
     */
    public function setNumRempl($numRempl) {
        $this->numRempl = $numRempl;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the remplacant travaille jf.
     *
     * @param bool $remplacantTravailleJf The remplacant travaille jf.
     */
    public function setRemplacantTravailleJf($remplacantTravailleJf) {
        $this->remplacantTravailleJf = $remplacantTravailleJf;
        return $this;
    }

    /**
     * Set the remplacement complet.
     *
     * @param bool $remplacementComplet The remplacement complet.
     */
    public function setRemplacementComplet($remplacementComplet) {
        $this->remplacementComplet = $remplacementComplet;
        return $this;
    }

    /**
     * Set the remplacement modifie.
     *
     * @param bool $remplacementModifie The remplacement modifie.
     */
    public function setRemplacementModifie($remplacementModifie) {
        $this->remplacementModifie = $remplacementModifie;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
