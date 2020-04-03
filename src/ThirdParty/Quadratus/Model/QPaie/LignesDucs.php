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
 * Lignes ducs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesDucs {

    /**
     * Code at.
     *
     * @var int
     */
    private $codeAt;

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
     * @var DateTime|null
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
     * @var DateTime|null
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
     * Taux at.
     *
     * @var float
     */
    private $tauxAt;

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
     * Get the code at.
     *
     * @return int Returns the code at.
     */
    public function getCodeAt() {
        return $this->codeAt;
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
     * @return DateTime|null Returns the date application.
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
     * @return DateTime|null Returns the periode decla.
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
     * Get the taux at.
     *
     * @return float Returns the taux at.
     */
    public function getTauxAt() {
        return $this->tauxAt;
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
     * Set the code at.
     *
     * @param int $codeAt The code at.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeAt($codeAt) {
        $this->codeAt = $codeAt;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string $codeDucs The code ducs.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeDucs($codeDucs) {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the exclure fusion.
     *
     * @param bool $exclureFusion The exclure fusion.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setExclureFusion($exclureFusion) {
        $this->exclureFusion = $exclureFusion;
        return $this;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the is taux.
     *
     * @param bool $isTaux The is taux.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setIsTaux($isTaux) {
        $this->isTaux = $isTaux;
        return $this;
    }

    /**
     * Set the marque.
     *
     * @param bool $marque The marque.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMarque($marque) {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the mt patronal.
     *
     * @param float $mtPatronal The mt patronal.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMtPatronal($mtPatronal) {
        $this->mtPatronal = $mtPatronal;
        return $this;
    }

    /**
     * Set the mt salarial.
     *
     * @param float $mtSalarial The mt salarial.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setMtSalarial($mtSalarial) {
        $this->mtSalarial = $mtSalarial;
        return $this;
    }

    /**
     * Set the nb cot.
     *
     * @param float $nbCot The nb cot.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setNbCot($nbCot) {
        $this->nbCot = $nbCot;
        return $this;
    }

    /**
     * Set the nb patronal.
     *
     * @param float $nbPatronal The nb patronal.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setNbPatronal($nbPatronal) {
        $this->nbPatronal = $nbPatronal;
        return $this;
    }

    /**
     * Set the nb salarial.
     *
     * @param float $nbSalarial The nb salarial.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setNbSalarial($nbSalarial) {
        $this->nbSalarial = $nbSalarial;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string $qualifiantCotis The qualifiant cotis.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setQualifiantCotis($qualifiantCotis) {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the somme base.
     *
     * @param float $sommeBase The somme base.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setSommeBase($sommeBase) {
        $this->sommeBase = $sommeBase;
        return $this;
    }

    /**
     * Set the taux at.
     *
     * @param float $tauxAt The taux at.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTauxAt($tauxAt) {
        $this->tauxAt = $tauxAt;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float $tauxPatronal The taux patronal.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTauxPatronal($tauxPatronal) {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float $tauxSalarial The taux salarial.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTauxSalarial($tauxSalarial) {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }

    /**
     * Set the type base unique.
     *
     * @param bool $typeBaseUnique The type base unique.
     * @return LignesDucs Returns this Lignes ducs.
     */
    public function setTypeBaseUnique($typeBaseUnique) {
        $this->typeBaseUnique = $typeBaseUnique;
        return $this;
    }
}
