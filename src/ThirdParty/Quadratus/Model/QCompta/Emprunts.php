<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Emprunts model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Emprunts {

    /**
     * A echoir echu.
     *
     * @var string
     */
    private $aEchoirEchu;

    /**
     * Categorie.
     *
     * @var string
     */
    private $categorie;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Cpt assurance emprunt.
     *
     * @var string
     */
    private $cptAssuranceEmprunt;

    /**
     * Cpt emprunt.
     *
     * @var string
     */
    private $cptEmprunt;

    /**
     * Cpt interet emprunt.
     *
     * @var string
     */
    private $cptInteretEmprunt;

    /**
     * Date ouverture.
     *
     * @var DateTime
     */
    private $dateOuverture;

    /**
     * Date premiere echeance.
     *
     * @var DateTime
     */
    private $datePremiereEcheance;

    /**
     * Differe.
     *
     * @var bool
     */
    private $differe;

    /**
     * Duree.
     *
     * @var int
     */
    private $duree;

    /**
     * Emprunt en francs.
     *
     * @var bool
     */
    private $empruntEnFrancs;

    /**
     * Identification.
     *
     * @var string
     */
    private $identification;

    /**
     * Mois annee.
     *
     * @var string
     */
    private $moisAnnee;

    /**
     * Montant assurance.
     *
     * @var float
     */
    private $montantAssurance;

    /**
     * Montant emprunte.
     *
     * @var float
     */
    private $montantEmprunte;

    /**
     * Mt capital fixe remb.
     *
     * @var float
     */
    private $mtCapitalFixeRemb;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * Nature analytique.
     *
     * @var string
     */
    private $natureAnalytique;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Numero p j.
     *
     * @var int
     */
    private $numeroPJ;

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Taux assurance.
     *
     * @var float
     */
    private $tauxAssurance;

    /**
     * Taux interet.
     *
     * @var float
     */
    private $tauxInteret;

    /**
     * Type in fine.
     *
     * @var bool
     */
    private $typeInFine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a echoir echu.
     *
     * @return string Returns the a echoir echu.
     */
    public function getAEchoirEchu() {
        return $this->aEchoirEchu;
    }

    /**
     * Get the categorie.
     *
     * @return string Returns the categorie.
     */
    public function getCategorie() {
        return $this->categorie;
    }

    /**
     * Get the centre analytique.
     *
     * @return string Returns the centre analytique.
     */
    public function getCentreAnalytique() {
        return $this->centreAnalytique;
    }

    /**
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
    }

    /**
     * Get the cpt assurance emprunt.
     *
     * @return string Returns the cpt assurance emprunt.
     */
    public function getCptAssuranceEmprunt() {
        return $this->cptAssuranceEmprunt;
    }

    /**
     * Get the cpt emprunt.
     *
     * @return string Returns the cpt emprunt.
     */
    public function getCptEmprunt() {
        return $this->cptEmprunt;
    }

    /**
     * Get the cpt interet emprunt.
     *
     * @return string Returns the cpt interet emprunt.
     */
    public function getCptInteretEmprunt() {
        return $this->cptInteretEmprunt;
    }

    /**
     * Get the date ouverture.
     *
     * @return DateTime Returns the date ouverture.
     */
    public function getDateOuverture() {
        return $this->dateOuverture;
    }

    /**
     * Get the date premiere echeance.
     *
     * @return DateTime Returns the date premiere echeance.
     */
    public function getDatePremiereEcheance() {
        return $this->datePremiereEcheance;
    }

    /**
     * Get the differe.
     *
     * @return bool Returns the differe.
     */
    public function getDiffere() {
        return $this->differe;
    }

    /**
     * Get the duree.
     *
     * @return int Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Get the emprunt en francs.
     *
     * @return bool Returns the emprunt en francs.
     */
    public function getEmpruntEnFrancs() {
        return $this->empruntEnFrancs;
    }

    /**
     * Get the identification.
     *
     * @return string Returns the identification.
     */
    public function getIdentification() {
        return $this->identification;
    }

    /**
     * Get the mois annee.
     *
     * @return string Returns the mois annee.
     */
    public function getMoisAnnee() {
        return $this->moisAnnee;
    }

    /**
     * Get the montant assurance.
     *
     * @return float Returns the montant assurance.
     */
    public function getMontantAssurance() {
        return $this->montantAssurance;
    }

    /**
     * Get the montant emprunte.
     *
     * @return float Returns the montant emprunte.
     */
    public function getMontantEmprunte() {
        return $this->montantEmprunte;
    }

    /**
     * Get the mt capital fixe remb.
     *
     * @return float Returns the mt capital fixe remb.
     */
    public function getMtCapitalFixeRemb() {
        return $this->mtCapitalFixeRemb;
    }

    /**
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the nature analytique.
     *
     * @return string Returns the nature analytique.
     */
    public function getNatureAnalytique() {
        return $this->natureAnalytique;
    }

    /**
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero p j.
     *
     * @return int Returns the numero p j.
     */
    public function getNumeroPJ() {
        return $this->numeroPJ;
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
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the taux assurance.
     *
     * @return float Returns the taux assurance.
     */
    public function getTauxAssurance() {
        return $this->tauxAssurance;
    }

    /**
     * Get the taux interet.
     *
     * @return float Returns the taux interet.
     */
    public function getTauxInteret() {
        return $this->tauxInteret;
    }

    /**
     * Get the type in fine.
     *
     * @return bool Returns the type in fine.
     */
    public function getTypeInFine() {
        return $this->typeInFine;
    }

    /**
     * Set the a echoir echu.
     *
     * @param string $aEchoirEchu The a echoir echu.
     * @return Emprunts Returns this emprunts.
     */
    public function setAEchoirEchu($aEchoirEchu) {
        $this->aEchoirEchu = $aEchoirEchu;
        return $this;
    }

    /**
     * Set the categorie.
     *
     * @param string $categorie The categorie.
     * @return Emprunts Returns this emprunts.
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return Emprunts Returns this emprunts.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return Emprunts Returns this emprunts.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the cpt assurance emprunt.
     *
     * @param string $cptAssuranceEmprunt The cpt assurance emprunt.
     * @return Emprunts Returns this emprunts.
     */
    public function setCptAssuranceEmprunt($cptAssuranceEmprunt) {
        $this->cptAssuranceEmprunt = $cptAssuranceEmprunt;
        return $this;
    }

    /**
     * Set the cpt emprunt.
     *
     * @param string $cptEmprunt The cpt emprunt.
     * @return Emprunts Returns this emprunts.
     */
    public function setCptEmprunt($cptEmprunt) {
        $this->cptEmprunt = $cptEmprunt;
        return $this;
    }

    /**
     * Set the cpt interet emprunt.
     *
     * @param string $cptInteretEmprunt The cpt interet emprunt.
     * @return Emprunts Returns this emprunts.
     */
    public function setCptInteretEmprunt($cptInteretEmprunt) {
        $this->cptInteretEmprunt = $cptInteretEmprunt;
        return $this;
    }

    /**
     * Set the date ouverture.
     *
     * @param DateTime $dateOuverture The date ouverture.
     * @return Emprunts Returns this emprunts.
     */
    public function setDateOuverture(DateTime $dateOuverture = null) {
        $this->dateOuverture = $dateOuverture;
        return $this;
    }

    /**
     * Set the date premiere echeance.
     *
     * @param DateTime $datePremiereEcheance The date premiere echeance.
     * @return Emprunts Returns this emprunts.
     */
    public function setDatePremiereEcheance(DateTime $datePremiereEcheance = null) {
        $this->datePremiereEcheance = $datePremiereEcheance;
        return $this;
    }

    /**
     * Set the differe.
     *
     * @param bool $differe The differe.
     * @return Emprunts Returns this emprunts.
     */
    public function setDiffere($differe) {
        $this->differe = $differe;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     * @return Emprunts Returns this emprunts.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the emprunt en francs.
     *
     * @param bool $empruntEnFrancs The emprunt en francs.
     * @return Emprunts Returns this emprunts.
     */
    public function setEmpruntEnFrancs($empruntEnFrancs) {
        $this->empruntEnFrancs = $empruntEnFrancs;
        return $this;
    }

    /**
     * Set the identification.
     *
     * @param string $identification The identification.
     * @return Emprunts Returns this emprunts.
     */
    public function setIdentification($identification) {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Set the mois annee.
     *
     * @param string $moisAnnee The mois annee.
     * @return Emprunts Returns this emprunts.
     */
    public function setMoisAnnee($moisAnnee) {
        $this->moisAnnee = $moisAnnee;
        return $this;
    }

    /**
     * Set the montant assurance.
     *
     * @param float $montantAssurance The montant assurance.
     * @return Emprunts Returns this emprunts.
     */
    public function setMontantAssurance($montantAssurance) {
        $this->montantAssurance = $montantAssurance;
        return $this;
    }

    /**
     * Set the montant emprunte.
     *
     * @param float $montantEmprunte The montant emprunte.
     * @return Emprunts Returns this emprunts.
     */
    public function setMontantEmprunte($montantEmprunte) {
        $this->montantEmprunte = $montantEmprunte;
        return $this;
    }

    /**
     * Set the mt capital fixe remb.
     *
     * @param float $mtCapitalFixeRemb The mt capital fixe remb.
     * @return Emprunts Returns this emprunts.
     */
    public function setMtCapitalFixeRemb($mtCapitalFixeRemb) {
        $this->mtCapitalFixeRemb = $mtCapitalFixeRemb;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return Emprunts Returns this emprunts.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     * @return Emprunts Returns this emprunts.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return Emprunts Returns this emprunts.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero p j.
     *
     * @param int $numeroPJ The numero p j.
     * @return Emprunts Returns this emprunts.
     */
    public function setNumeroPJ($numeroPJ) {
        $this->numeroPJ = $numeroPJ;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return Emprunts Returns this emprunts.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return Emprunts Returns this emprunts.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the taux assurance.
     *
     * @param float $tauxAssurance The taux assurance.
     * @return Emprunts Returns this emprunts.
     */
    public function setTauxAssurance($tauxAssurance) {
        $this->tauxAssurance = $tauxAssurance;
        return $this;
    }

    /**
     * Set the taux interet.
     *
     * @param float $tauxInteret The taux interet.
     * @return Emprunts Returns this emprunts.
     */
    public function setTauxInteret($tauxInteret) {
        $this->tauxInteret = $tauxInteret;
        return $this;
    }

    /**
     * Set the type in fine.
     *
     * @param bool $typeInFine The type in fine.
     * @return Emprunts Returns this emprunts.
     */
    public function setTypeInFine($typeInFine) {
        $this->typeInFine = $typeInFine;
        return $this;
    }
}
