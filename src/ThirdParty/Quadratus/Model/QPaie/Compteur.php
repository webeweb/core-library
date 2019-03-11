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
 * Compteur model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Compteur {

    /**
     * Nb attes assedic.
     *
     * @var int
     */
    private $nbAttesAssedic;

    /**
     * Nb attes assedic a deduire.
     *
     * @var int
     */
    private $nbAttesAssedicADeduire;

    /**
     * Nb attes assedic fact.
     *
     * @var int
     */
    private $nbAttesAssedicFact;

    /**
     * Nb attes ijss.
     *
     * @var int
     */
    private $nbAttesIjss;

    /**
     * Nb attes ijss a deduire.
     *
     * @var int
     */
    private $nbAttesIjssADeduire;

    /**
     * Nb attes ijss a t.
     *
     * @var int
     */
    private $nbAttesIjssAT;

    /**
     * Nb attes ijss a t a deduire.
     *
     * @var int
     */
    private $nbAttesIjssATADeduire;

    /**
     * Nb attes ijss a t fact.
     *
     * @var int
     */
    private $nbAttesIjssATFact;

    /**
     * Nb attes ijss fact.
     *
     * @var int
     */
    private $nbAttesIjssFact;

    /**
     * Nb attest emploi.
     *
     * @var int
     */
    private $nbAttestEmploi;

    /**
     * Nb attest emploi a deduire.
     *
     * @var int
     */
    private $nbAttestEmploiADeduire;

    /**
     * Nb attest emploi fact.
     *
     * @var int
     */
    private $nbAttestEmploiFact;

    /**
     * Nb bul edites.
     *
     * @var int
     */
    private $nbBulEdites;

    /**
     * Nb bul edites a deduire.
     *
     * @var int
     */
    private $nbBulEditesADeduire;

    /**
     * Nb bul edites fact.
     *
     * @var int
     */
    private $nbBulEditesFact;

    /**
     * Nb bul valides.
     *
     * @var int
     */
    private $nbBulValides;

    /**
     * Nb bul valides a deduire.
     *
     * @var int
     */
    private $nbBulValidesADeduire;

    /**
     * Nb bul valides fact.
     *
     * @var int
     */
    private $nbBulValidesFact;

    /**
     * Nb certif travail.
     *
     * @var int
     */
    private $nbCertifTravail;

    /**
     * Nb certif travail a deduire.
     *
     * @var int
     */
    private $nbCertifTravailADeduire;

    /**
     * Nb certif travail fact.
     *
     * @var int
     */
    private $nbCertifTravailFact;

    /**
     * Nb d a d s editees.
     *
     * @var int
     */
    private $nbDADSEditees;

    /**
     * Nb d a d s editees a deduire.
     *
     * @var int
     */
    private $nbDADSEditeesADeduire;

    /**
     * Nb d a d s editees fact.
     *
     * @var int
     */
    private $nbDADSEditeesFact;

    /**
     * Nb d s n evt arret.
     *
     * @var int
     */
    private $nbDSNEvtArret;

    /**
     * Nb d s n evt arret a deduire.
     *
     * @var int
     */
    private $nbDSNEvtArretADeduire;

    /**
     * Nb d s n evt arret fact.
     *
     * @var int
     */
    private $nbDSNEvtArretFact;

    /**
     * Nb d s n evt fin contrat.
     *
     * @var int
     */
    private $nbDSNEvtFinContrat;

    /**
     * Nb d s n evt fin contrat a deduire.
     *
     * @var int
     */
    private $nbDSNEvtFinContratADeduire;

    /**
     * Nb d s n evt fin contrat fact.
     *
     * @var int
     */
    private $nbDSNEvtFinContratFact;

    /**
     * Nb d s n mensuelle.
     *
     * @var int
     */
    private $nbDSNMensuelle;

    /**
     * Nb d s n mensuelle a deduire.
     *
     * @var int
     */
    private $nbDSNMensuelleADeduire;

    /**
     * Nb d s n mensuelle fact.
     *
     * @var int
     */
    private $nbDSNMensuelleFact;

    /**
     * Nb d u e.
     *
     * @var int
     */
    private $nbDUE;

    /**
     * Nb d u e a deduire.
     *
     * @var int
     */
    private $nbDUEADeduire;

    /**
     * Nb d u e fact.
     *
     * @var int
     */
    private $nbDUEFact;

    /**
     * Nb disquettes virements.
     *
     * @var int
     */
    private $nbDisquettesVirements;

    /**
     * Nb disquettes virements a deduire.
     *
     * @var int
     */
    private $nbDisquettesVirementsADeduire;

    /**
     * Nb disquettes virements fact.
     *
     * @var int
     */
    private $nbDisquettesVirementsFact;

    /**
     * Nb solde tout compte.
     *
     * @var int
     */
    private $nbSoldeToutCompte;

    /**
     * Nb solde tout compte a deduire.
     *
     * @var int
     */
    private $nbSoldeToutCompteADeduire;

    /**
     * Nb solde tout compte fact.
     *
     * @var int
     */
    private $nbSoldeToutCompteFact;

    /**
     * Nb t d s realisees.
     *
     * @var int
     */
    private $nbTDSRealisees;

    /**
     * Nb t d s realisees a deduire.
     *
     * @var int
     */
    private $nbTDSRealiseesADeduire;

    /**
     * Nb t d s realisees fact.
     *
     * @var int
     */
    private $nbTDSRealiseesFact;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the nb attes assedic.
     *
     * @return int Returns the nb attes assedic.
     */
    public function getNbAttesAssedic() {
        return $this->nbAttesAssedic;
    }

    /**
     * Get the nb attes assedic a deduire.
     *
     * @return int Returns the nb attes assedic a deduire.
     */
    public function getNbAttesAssedicADeduire() {
        return $this->nbAttesAssedicADeduire;
    }

    /**
     * Get the nb attes assedic fact.
     *
     * @return int Returns the nb attes assedic fact.
     */
    public function getNbAttesAssedicFact() {
        return $this->nbAttesAssedicFact;
    }

    /**
     * Get the nb attes ijss.
     *
     * @return int Returns the nb attes ijss.
     */
    public function getNbAttesIjss() {
        return $this->nbAttesIjss;
    }

    /**
     * Get the nb attes ijss a deduire.
     *
     * @return int Returns the nb attes ijss a deduire.
     */
    public function getNbAttesIjssADeduire() {
        return $this->nbAttesIjssADeduire;
    }

    /**
     * Get the nb attes ijss a t.
     *
     * @return int Returns the nb attes ijss a t.
     */
    public function getNbAttesIjssAT() {
        return $this->nbAttesIjssAT;
    }

    /**
     * Get the nb attes ijss a t a deduire.
     *
     * @return int Returns the nb attes ijss a t a deduire.
     */
    public function getNbAttesIjssATADeduire() {
        return $this->nbAttesIjssATADeduire;
    }

    /**
     * Get the nb attes ijss a t fact.
     *
     * @return int Returns the nb attes ijss a t fact.
     */
    public function getNbAttesIjssATFact() {
        return $this->nbAttesIjssATFact;
    }

    /**
     * Get the nb attes ijss fact.
     *
     * @return int Returns the nb attes ijss fact.
     */
    public function getNbAttesIjssFact() {
        return $this->nbAttesIjssFact;
    }

    /**
     * Get the nb attest emploi.
     *
     * @return int Returns the nb attest emploi.
     */
    public function getNbAttestEmploi() {
        return $this->nbAttestEmploi;
    }

    /**
     * Get the nb attest emploi a deduire.
     *
     * @return int Returns the nb attest emploi a deduire.
     */
    public function getNbAttestEmploiADeduire() {
        return $this->nbAttestEmploiADeduire;
    }

    /**
     * Get the nb attest emploi fact.
     *
     * @return int Returns the nb attest emploi fact.
     */
    public function getNbAttestEmploiFact() {
        return $this->nbAttestEmploiFact;
    }

    /**
     * Get the nb bul edites.
     *
     * @return int Returns the nb bul edites.
     */
    public function getNbBulEdites() {
        return $this->nbBulEdites;
    }

    /**
     * Get the nb bul edites a deduire.
     *
     * @return int Returns the nb bul edites a deduire.
     */
    public function getNbBulEditesADeduire() {
        return $this->nbBulEditesADeduire;
    }

    /**
     * Get the nb bul edites fact.
     *
     * @return int Returns the nb bul edites fact.
     */
    public function getNbBulEditesFact() {
        return $this->nbBulEditesFact;
    }

    /**
     * Get the nb bul valides.
     *
     * @return int Returns the nb bul valides.
     */
    public function getNbBulValides() {
        return $this->nbBulValides;
    }

    /**
     * Get the nb bul valides a deduire.
     *
     * @return int Returns the nb bul valides a deduire.
     */
    public function getNbBulValidesADeduire() {
        return $this->nbBulValidesADeduire;
    }

    /**
     * Get the nb bul valides fact.
     *
     * @return int Returns the nb bul valides fact.
     */
    public function getNbBulValidesFact() {
        return $this->nbBulValidesFact;
    }

    /**
     * Get the nb certif travail.
     *
     * @return int Returns the nb certif travail.
     */
    public function getNbCertifTravail() {
        return $this->nbCertifTravail;
    }

    /**
     * Get the nb certif travail a deduire.
     *
     * @return int Returns the nb certif travail a deduire.
     */
    public function getNbCertifTravailADeduire() {
        return $this->nbCertifTravailADeduire;
    }

    /**
     * Get the nb certif travail fact.
     *
     * @return int Returns the nb certif travail fact.
     */
    public function getNbCertifTravailFact() {
        return $this->nbCertifTravailFact;
    }

    /**
     * Get the nb d a d s editees.
     *
     * @return int Returns the nb d a d s editees.
     */
    public function getNbDADSEditees() {
        return $this->nbDADSEditees;
    }

    /**
     * Get the nb d a d s editees a deduire.
     *
     * @return int Returns the nb d a d s editees a deduire.
     */
    public function getNbDADSEditeesADeduire() {
        return $this->nbDADSEditeesADeduire;
    }

    /**
     * Get the nb d a d s editees fact.
     *
     * @return int Returns the nb d a d s editees fact.
     */
    public function getNbDADSEditeesFact() {
        return $this->nbDADSEditeesFact;
    }

    /**
     * Get the nb d s n evt arret.
     *
     * @return int Returns the nb d s n evt arret.
     */
    public function getNbDSNEvtArret() {
        return $this->nbDSNEvtArret;
    }

    /**
     * Get the nb d s n evt arret a deduire.
     *
     * @return int Returns the nb d s n evt arret a deduire.
     */
    public function getNbDSNEvtArretADeduire() {
        return $this->nbDSNEvtArretADeduire;
    }

    /**
     * Get the nb d s n evt arret fact.
     *
     * @return int Returns the nb d s n evt arret fact.
     */
    public function getNbDSNEvtArretFact() {
        return $this->nbDSNEvtArretFact;
    }

    /**
     * Get the nb d s n evt fin contrat.
     *
     * @return int Returns the nb d s n evt fin contrat.
     */
    public function getNbDSNEvtFinContrat() {
        return $this->nbDSNEvtFinContrat;
    }

    /**
     * Get the nb d s n evt fin contrat a deduire.
     *
     * @return int Returns the nb d s n evt fin contrat a deduire.
     */
    public function getNbDSNEvtFinContratADeduire() {
        return $this->nbDSNEvtFinContratADeduire;
    }

    /**
     * Get the nb d s n evt fin contrat fact.
     *
     * @return int Returns the nb d s n evt fin contrat fact.
     */
    public function getNbDSNEvtFinContratFact() {
        return $this->nbDSNEvtFinContratFact;
    }

    /**
     * Get the nb d s n mensuelle.
     *
     * @return int Returns the nb d s n mensuelle.
     */
    public function getNbDSNMensuelle() {
        return $this->nbDSNMensuelle;
    }

    /**
     * Get the nb d s n mensuelle a deduire.
     *
     * @return int Returns the nb d s n mensuelle a deduire.
     */
    public function getNbDSNMensuelleADeduire() {
        return $this->nbDSNMensuelleADeduire;
    }

    /**
     * Get the nb d s n mensuelle fact.
     *
     * @return int Returns the nb d s n mensuelle fact.
     */
    public function getNbDSNMensuelleFact() {
        return $this->nbDSNMensuelleFact;
    }

    /**
     * Get the nb d u e.
     *
     * @return int Returns the nb d u e.
     */
    public function getNbDUE() {
        return $this->nbDUE;
    }

    /**
     * Get the nb d u e a deduire.
     *
     * @return int Returns the nb d u e a deduire.
     */
    public function getNbDUEADeduire() {
        return $this->nbDUEADeduire;
    }

    /**
     * Get the nb d u e fact.
     *
     * @return int Returns the nb d u e fact.
     */
    public function getNbDUEFact() {
        return $this->nbDUEFact;
    }

    /**
     * Get the nb disquettes virements.
     *
     * @return int Returns the nb disquettes virements.
     */
    public function getNbDisquettesVirements() {
        return $this->nbDisquettesVirements;
    }

    /**
     * Get the nb disquettes virements a deduire.
     *
     * @return int Returns the nb disquettes virements a deduire.
     */
    public function getNbDisquettesVirementsADeduire() {
        return $this->nbDisquettesVirementsADeduire;
    }

    /**
     * Get the nb disquettes virements fact.
     *
     * @return int Returns the nb disquettes virements fact.
     */
    public function getNbDisquettesVirementsFact() {
        return $this->nbDisquettesVirementsFact;
    }

    /**
     * Get the nb solde tout compte.
     *
     * @return int Returns the nb solde tout compte.
     */
    public function getNbSoldeToutCompte() {
        return $this->nbSoldeToutCompte;
    }

    /**
     * Get the nb solde tout compte a deduire.
     *
     * @return int Returns the nb solde tout compte a deduire.
     */
    public function getNbSoldeToutCompteADeduire() {
        return $this->nbSoldeToutCompteADeduire;
    }

    /**
     * Get the nb solde tout compte fact.
     *
     * @return int Returns the nb solde tout compte fact.
     */
    public function getNbSoldeToutCompteFact() {
        return $this->nbSoldeToutCompteFact;
    }

    /**
     * Get the nb t d s realisees.
     *
     * @return int Returns the nb t d s realisees.
     */
    public function getNbTDSRealisees() {
        return $this->nbTDSRealisees;
    }

    /**
     * Get the nb t d s realisees a deduire.
     *
     * @return int Returns the nb t d s realisees a deduire.
     */
    public function getNbTDSRealiseesADeduire() {
        return $this->nbTDSRealiseesADeduire;
    }

    /**
     * Get the nb t d s realisees fact.
     *
     * @return int Returns the nb t d s realisees fact.
     */
    public function getNbTDSRealiseesFact() {
        return $this->nbTDSRealiseesFact;
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
     * Set the nb attes assedic.
     *
     * @param int $nbAttesAssedic The nb attes assedic.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesAssedic($nbAttesAssedic) {
        $this->nbAttesAssedic = $nbAttesAssedic;
        return $this;
    }

    /**
     * Set the nb attes assedic a deduire.
     *
     * @param int $nbAttesAssedicADeduire The nb attes assedic a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesAssedicADeduire($nbAttesAssedicADeduire) {
        $this->nbAttesAssedicADeduire = $nbAttesAssedicADeduire;
        return $this;
    }

    /**
     * Set the nb attes assedic fact.
     *
     * @param int $nbAttesAssedicFact The nb attes assedic fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesAssedicFact($nbAttesAssedicFact) {
        $this->nbAttesAssedicFact = $nbAttesAssedicFact;
        return $this;
    }

    /**
     * Set the nb attes ijss.
     *
     * @param int $nbAttesIjss The nb attes ijss.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesIjss($nbAttesIjss) {
        $this->nbAttesIjss = $nbAttesIjss;
        return $this;
    }

    /**
     * Set the nb attes ijss a deduire.
     *
     * @param int $nbAttesIjssADeduire The nb attes ijss a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesIjssADeduire($nbAttesIjssADeduire) {
        $this->nbAttesIjssADeduire = $nbAttesIjssADeduire;
        return $this;
    }

    /**
     * Set the nb attes ijss a t.
     *
     * @param int $nbAttesIjssAT The nb attes ijss a t.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesIjssAT($nbAttesIjssAT) {
        $this->nbAttesIjssAT = $nbAttesIjssAT;
        return $this;
    }

    /**
     * Set the nb attes ijss a t a deduire.
     *
     * @param int $nbAttesIjssATADeduire The nb attes ijss a t a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesIjssATADeduire($nbAttesIjssATADeduire) {
        $this->nbAttesIjssATADeduire = $nbAttesIjssATADeduire;
        return $this;
    }

    /**
     * Set the nb attes ijss a t fact.
     *
     * @param int $nbAttesIjssATFact The nb attes ijss a t fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesIjssATFact($nbAttesIjssATFact) {
        $this->nbAttesIjssATFact = $nbAttesIjssATFact;
        return $this;
    }

    /**
     * Set the nb attes ijss fact.
     *
     * @param int $nbAttesIjssFact The nb attes ijss fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttesIjssFact($nbAttesIjssFact) {
        $this->nbAttesIjssFact = $nbAttesIjssFact;
        return $this;
    }

    /**
     * Set the nb attest emploi.
     *
     * @param int $nbAttestEmploi The nb attest emploi.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttestEmploi($nbAttestEmploi) {
        $this->nbAttestEmploi = $nbAttestEmploi;
        return $this;
    }

    /**
     * Set the nb attest emploi a deduire.
     *
     * @param int $nbAttestEmploiADeduire The nb attest emploi a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttestEmploiADeduire($nbAttestEmploiADeduire) {
        $this->nbAttestEmploiADeduire = $nbAttestEmploiADeduire;
        return $this;
    }

    /**
     * Set the nb attest emploi fact.
     *
     * @param int $nbAttestEmploiFact The nb attest emploi fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbAttestEmploiFact($nbAttestEmploiFact) {
        $this->nbAttestEmploiFact = $nbAttestEmploiFact;
        return $this;
    }

    /**
     * Set the nb bul edites.
     *
     * @param int $nbBulEdites The nb bul edites.
     * @return Compteur Returns this compteur.
     */
    public function setNbBulEdites($nbBulEdites) {
        $this->nbBulEdites = $nbBulEdites;
        return $this;
    }

    /**
     * Set the nb bul edites a deduire.
     *
     * @param int $nbBulEditesADeduire The nb bul edites a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbBulEditesADeduire($nbBulEditesADeduire) {
        $this->nbBulEditesADeduire = $nbBulEditesADeduire;
        return $this;
    }

    /**
     * Set the nb bul edites fact.
     *
     * @param int $nbBulEditesFact The nb bul edites fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbBulEditesFact($nbBulEditesFact) {
        $this->nbBulEditesFact = $nbBulEditesFact;
        return $this;
    }

    /**
     * Set the nb bul valides.
     *
     * @param int $nbBulValides The nb bul valides.
     * @return Compteur Returns this compteur.
     */
    public function setNbBulValides($nbBulValides) {
        $this->nbBulValides = $nbBulValides;
        return $this;
    }

    /**
     * Set the nb bul valides a deduire.
     *
     * @param int $nbBulValidesADeduire The nb bul valides a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbBulValidesADeduire($nbBulValidesADeduire) {
        $this->nbBulValidesADeduire = $nbBulValidesADeduire;
        return $this;
    }

    /**
     * Set the nb bul valides fact.
     *
     * @param int $nbBulValidesFact The nb bul valides fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbBulValidesFact($nbBulValidesFact) {
        $this->nbBulValidesFact = $nbBulValidesFact;
        return $this;
    }

    /**
     * Set the nb certif travail.
     *
     * @param int $nbCertifTravail The nb certif travail.
     * @return Compteur Returns this compteur.
     */
    public function setNbCertifTravail($nbCertifTravail) {
        $this->nbCertifTravail = $nbCertifTravail;
        return $this;
    }

    /**
     * Set the nb certif travail a deduire.
     *
     * @param int $nbCertifTravailADeduire The nb certif travail a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbCertifTravailADeduire($nbCertifTravailADeduire) {
        $this->nbCertifTravailADeduire = $nbCertifTravailADeduire;
        return $this;
    }

    /**
     * Set the nb certif travail fact.
     *
     * @param int $nbCertifTravailFact The nb certif travail fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbCertifTravailFact($nbCertifTravailFact) {
        $this->nbCertifTravailFact = $nbCertifTravailFact;
        return $this;
    }

    /**
     * Set the nb d a d s editees.
     *
     * @param int $nbDADSEditees The nb d a d s editees.
     * @return Compteur Returns this compteur.
     */
    public function setNbDADSEditees($nbDADSEditees) {
        $this->nbDADSEditees = $nbDADSEditees;
        return $this;
    }

    /**
     * Set the nb d a d s editees a deduire.
     *
     * @param int $nbDADSEditeesADeduire The nb d a d s editees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbDADSEditeesADeduire($nbDADSEditeesADeduire) {
        $this->nbDADSEditeesADeduire = $nbDADSEditeesADeduire;
        return $this;
    }

    /**
     * Set the nb d a d s editees fact.
     *
     * @param int $nbDADSEditeesFact The nb d a d s editees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbDADSEditeesFact($nbDADSEditeesFact) {
        $this->nbDADSEditeesFact = $nbDADSEditeesFact;
        return $this;
    }

    /**
     * Set the nb d s n evt arret.
     *
     * @param int $nbDSNEvtArret The nb d s n evt arret.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNEvtArret($nbDSNEvtArret) {
        $this->nbDSNEvtArret = $nbDSNEvtArret;
        return $this;
    }

    /**
     * Set the nb d s n evt arret a deduire.
     *
     * @param int $nbDSNEvtArretADeduire The nb d s n evt arret a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNEvtArretADeduire($nbDSNEvtArretADeduire) {
        $this->nbDSNEvtArretADeduire = $nbDSNEvtArretADeduire;
        return $this;
    }

    /**
     * Set the nb d s n evt arret fact.
     *
     * @param int $nbDSNEvtArretFact The nb d s n evt arret fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNEvtArretFact($nbDSNEvtArretFact) {
        $this->nbDSNEvtArretFact = $nbDSNEvtArretFact;
        return $this;
    }

    /**
     * Set the nb d s n evt fin contrat.
     *
     * @param int $nbDSNEvtFinContrat The nb d s n evt fin contrat.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNEvtFinContrat($nbDSNEvtFinContrat) {
        $this->nbDSNEvtFinContrat = $nbDSNEvtFinContrat;
        return $this;
    }

    /**
     * Set the nb d s n evt fin contrat a deduire.
     *
     * @param int $nbDSNEvtFinContratADeduire The nb d s n evt fin contrat a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNEvtFinContratADeduire($nbDSNEvtFinContratADeduire) {
        $this->nbDSNEvtFinContratADeduire = $nbDSNEvtFinContratADeduire;
        return $this;
    }

    /**
     * Set the nb d s n evt fin contrat fact.
     *
     * @param int $nbDSNEvtFinContratFact The nb d s n evt fin contrat fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNEvtFinContratFact($nbDSNEvtFinContratFact) {
        $this->nbDSNEvtFinContratFact = $nbDSNEvtFinContratFact;
        return $this;
    }

    /**
     * Set the nb d s n mensuelle.
     *
     * @param int $nbDSNMensuelle The nb d s n mensuelle.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNMensuelle($nbDSNMensuelle) {
        $this->nbDSNMensuelle = $nbDSNMensuelle;
        return $this;
    }

    /**
     * Set the nb d s n mensuelle a deduire.
     *
     * @param int $nbDSNMensuelleADeduire The nb d s n mensuelle a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNMensuelleADeduire($nbDSNMensuelleADeduire) {
        $this->nbDSNMensuelleADeduire = $nbDSNMensuelleADeduire;
        return $this;
    }

    /**
     * Set the nb d s n mensuelle fact.
     *
     * @param int $nbDSNMensuelleFact The nb d s n mensuelle fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbDSNMensuelleFact($nbDSNMensuelleFact) {
        $this->nbDSNMensuelleFact = $nbDSNMensuelleFact;
        return $this;
    }

    /**
     * Set the nb d u e.
     *
     * @param int $nbDUE The nb d u e.
     * @return Compteur Returns this compteur.
     */
    public function setNbDUE($nbDUE) {
        $this->nbDUE = $nbDUE;
        return $this;
    }

    /**
     * Set the nb d u e a deduire.
     *
     * @param int $nbDUEADeduire The nb d u e a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbDUEADeduire($nbDUEADeduire) {
        $this->nbDUEADeduire = $nbDUEADeduire;
        return $this;
    }

    /**
     * Set the nb d u e fact.
     *
     * @param int $nbDUEFact The nb d u e fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbDUEFact($nbDUEFact) {
        $this->nbDUEFact = $nbDUEFact;
        return $this;
    }

    /**
     * Set the nb disquettes virements.
     *
     * @param int $nbDisquettesVirements The nb disquettes virements.
     * @return Compteur Returns this compteur.
     */
    public function setNbDisquettesVirements($nbDisquettesVirements) {
        $this->nbDisquettesVirements = $nbDisquettesVirements;
        return $this;
    }

    /**
     * Set the nb disquettes virements a deduire.
     *
     * @param int $nbDisquettesVirementsADeduire The nb disquettes virements a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbDisquettesVirementsADeduire($nbDisquettesVirementsADeduire) {
        $this->nbDisquettesVirementsADeduire = $nbDisquettesVirementsADeduire;
        return $this;
    }

    /**
     * Set the nb disquettes virements fact.
     *
     * @param int $nbDisquettesVirementsFact The nb disquettes virements fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbDisquettesVirementsFact($nbDisquettesVirementsFact) {
        $this->nbDisquettesVirementsFact = $nbDisquettesVirementsFact;
        return $this;
    }

    /**
     * Set the nb solde tout compte.
     *
     * @param int $nbSoldeToutCompte The nb solde tout compte.
     * @return Compteur Returns this compteur.
     */
    public function setNbSoldeToutCompte($nbSoldeToutCompte) {
        $this->nbSoldeToutCompte = $nbSoldeToutCompte;
        return $this;
    }

    /**
     * Set the nb solde tout compte a deduire.
     *
     * @param int $nbSoldeToutCompteADeduire The nb solde tout compte a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbSoldeToutCompteADeduire($nbSoldeToutCompteADeduire) {
        $this->nbSoldeToutCompteADeduire = $nbSoldeToutCompteADeduire;
        return $this;
    }

    /**
     * Set the nb solde tout compte fact.
     *
     * @param int $nbSoldeToutCompteFact The nb solde tout compte fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbSoldeToutCompteFact($nbSoldeToutCompteFact) {
        $this->nbSoldeToutCompteFact = $nbSoldeToutCompteFact;
        return $this;
    }

    /**
     * Set the nb t d s realisees.
     *
     * @param int $nbTDSRealisees The nb t d s realisees.
     * @return Compteur Returns this compteur.
     */
    public function setNbTDSRealisees($nbTDSRealisees) {
        $this->nbTDSRealisees = $nbTDSRealisees;
        return $this;
    }

    /**
     * Set the nb t d s realisees a deduire.
     *
     * @param int $nbTDSRealiseesADeduire The nb t d s realisees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbTDSRealiseesADeduire($nbTDSRealiseesADeduire) {
        $this->nbTDSRealiseesADeduire = $nbTDSRealiseesADeduire;
        return $this;
    }

    /**
     * Set the nb t d s realisees fact.
     *
     * @param int $nbTDSRealiseesFact The nb t d s realisees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbTDSRealiseesFact($nbTDSRealiseesFact) {
        $this->nbTDSRealiseesFact = $nbTDSRealiseesFact;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return Compteur Returns this compteur.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }
}
