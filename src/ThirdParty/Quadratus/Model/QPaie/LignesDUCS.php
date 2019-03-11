<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes d u c s model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesDUCS {

    /**
     * Code a t.
     *
     * @var int
     */
    private $codeAT;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code ducs.
     *
     * @var string
     */
    private $codeDucs;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code insee.
     *
     * @var string
     */
    private $codeInsee;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Condition spec.
     *
     * @var string
     */
    private $conditionSpec;

    /**
     * Date application.
     *
     * @var DateTime
     */
    private $dateApplication;

    /**
     * Exclure fusion.
     *
     * @var bool
     */
    private $exclureFusion;

    /**
     * Id institution.
     *
     * @var string
     */
    private $idInstitution;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Is taux.
     *
     * @var bool
     */
    private $isTaux;

    /**
     * Marque.
     *
     * @var bool
     */
    private $marque;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Mt patronal.
     *
     * @var float
     */
    private $mtPatronal;

    /**
     * Mt salarial.
     *
     * @var float
     */
    private $mtSalarial;

    /**
     * Nb cot.
     *
     * @var float
     */
    private $nbCot;

    /**
     * Nb patronal.
     *
     * @var float
     */
    private $nbPatronal;

    /**
     * Nb salarial.
     *
     * @var float
     */
    private $nbSalarial;

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Periode decla.
     *
     * @var DateTime
     */
    private $periodeDecla;

    /**
     * Qualifiant cotis.
     *
     * @var string
     */
    private $qualifiantCotis;

    /**
     * Somme base.
     *
     * @var float
     */
    private $sommeBase;

    /**
     * Taux a t.
     *
     * @var float
     */
    private $tauxAT;

    /**
     * Taux patronal.
     *
     * @var float
     */
    private $tauxPatronal;

    /**
     * Taux salarial.
     *
     * @var float
     */
    private $tauxSalarial;

    /**
     * Type base unique.
     *
     * @var bool
     */
    private $typeBaseUnique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code a t.
     *
     * @return int Returns the code a t.
     */
    public function getCodeAT() {
        return $this->codeAT;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code ducs.
     *
     * @return string Returns the code ducs.
     */
    public function getCodeDucs() {
        return $this->codeDucs;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code insee.
     *
     * @return string Returns the code insee.
     */
    public function getCodeInsee() {
        return $this->codeInsee;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the condition spec.
     *
     * @return string Returns the condition spec.
     */
    public function getConditionSpec() {
        return $this->conditionSpec;
    }

    /**
     * Get the date application.
     *
     * @return DateTime Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the exclure fusion.
     *
     * @return bool Returns the exclure fusion.
     */
    public function getExclureFusion() {
        return $this->exclureFusion;
    }

    /**
     * Get the id institution.
     *
     * @return string Returns the id institution.
     */
    public function getIdInstitution() {
        return $this->idInstitution;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the is taux.
     *
     * @return bool Returns the is taux.
     */
    public function getIsTaux() {
        return $this->isTaux;
    }

    /**
     * Get the marque.
     *
     * @return bool Returns the marque.
     */
    public function getMarque() {
        return $this->marque;
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
     * Get the mt patronal.
     *
     * @return float Returns the mt patronal.
     */
    public function getMtPatronal() {
        return $this->mtPatronal;
    }

    /**
     * Get the mt salarial.
     *
     * @return float Returns the mt salarial.
     */
    public function getMtSalarial() {
        return $this->mtSalarial;
    }

    /**
     * Get the nb cot.
     *
     * @return float Returns the nb cot.
     */
    public function getNbCot() {
        return $this->nbCot;
    }

    /**
     * Get the nb patronal.
     *
     * @return float Returns the nb patronal.
     */
    public function getNbPatronal() {
        return $this->nbPatronal;
    }

    /**
     * Get the nb salarial.
     *
     * @return float Returns the nb salarial.
     */
    public function getNbSalarial() {
        return $this->nbSalarial;
    }

    /**
     * Get the organisme.
     *
     * @return string Returns the organisme.
     */
    public function getOrganisme() {
        return $this->organisme;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime Returns the periode decla.
     */
    public function getPeriodeDecla() {
        return $this->periodeDecla;
    }

    /**
     * Get the qualifiant cotis.
     *
     * @return string Returns the qualifiant cotis.
     */
    public function getQualifiantCotis() {
        return $this->qualifiantCotis;
    }

    /**
     * Get the somme base.
     *
     * @return float Returns the somme base.
     */
    public function getSommeBase() {
        return $this->sommeBase;
    }

    /**
     * Get the taux a t.
     *
     * @return float Returns the taux a t.
     */
    public function getTauxAT() {
        return $this->tauxAT;
    }

    /**
     * Get the taux patronal.
     *
     * @return float Returns the taux patronal.
     */
    public function getTauxPatronal() {
        return $this->tauxPatronal;
    }

    /**
     * Get the taux salarial.
     *
     * @return float Returns the taux salarial.
     */
    public function getTauxSalarial() {
        return $this->tauxSalarial;
    }

    /**
     * Get the type base unique.
     *
     * @return bool Returns the type base unique.
     */
    public function getTypeBaseUnique() {
        return $this->typeBaseUnique;
    }

    /**
     * Set the code a t.
     *
     * @param int $codeAT The code a t.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setCodeAT($codeAT) {
        $this->codeAT = $codeAT;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string $codeDucs The code ducs.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setCodeDucs($codeDucs) {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime $dateApplication The date application.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the exclure fusion.
     *
     * @param bool $exclureFusion The exclure fusion.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setExclureFusion($exclureFusion) {
        $this->exclureFusion = $exclureFusion;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the is taux.
     *
     * @param bool $isTaux The is taux.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setIsTaux($isTaux) {
        $this->isTaux = $isTaux;
        return $this;
    }

    /**
     * Set the marque.
     *
     * @param bool $marque The marque.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setMarque($marque) {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the mt patronal.
     *
     * @param float $mtPatronal The mt patronal.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setMtPatronal($mtPatronal) {
        $this->mtPatronal = $mtPatronal;
        return $this;
    }

    /**
     * Set the mt salarial.
     *
     * @param float $mtSalarial The mt salarial.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setMtSalarial($mtSalarial) {
        $this->mtSalarial = $mtSalarial;
        return $this;
    }

    /**
     * Set the nb cot.
     *
     * @param float $nbCot The nb cot.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setNbCot($nbCot) {
        $this->nbCot = $nbCot;
        return $this;
    }

    /**
     * Set the nb patronal.
     *
     * @param float $nbPatronal The nb patronal.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setNbPatronal($nbPatronal) {
        $this->nbPatronal = $nbPatronal;
        return $this;
    }

    /**
     * Set the nb salarial.
     *
     * @param float $nbSalarial The nb salarial.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setNbSalarial($nbSalarial) {
        $this->nbSalarial = $nbSalarial;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime $periodeDecla The periode decla.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string $qualifiantCotis The qualifiant cotis.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setQualifiantCotis($qualifiantCotis) {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the somme base.
     *
     * @param float $sommeBase The somme base.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setSommeBase($sommeBase) {
        $this->sommeBase = $sommeBase;
        return $this;
    }

    /**
     * Set the taux a t.
     *
     * @param float $tauxAT The taux a t.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setTauxAT($tauxAT) {
        $this->tauxAT = $tauxAT;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float $tauxPatronal The taux patronal.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setTauxPatronal($tauxPatronal) {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float $tauxSalarial The taux salarial.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setTauxSalarial($tauxSalarial) {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }

    /**
     * Set the type base unique.
     *
     * @param bool $typeBaseUnique The type base unique.
     * @return LignesDUCS Returns this lignes d u c s.
     */
    public function setTypeBaseUnique($typeBaseUnique) {
        $this->typeBaseUnique = $typeBaseUnique;
        return $this;
    }
}
