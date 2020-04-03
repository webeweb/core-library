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
 * Compteur.
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
     * Nb attes ijss at.
     *
     * @var int
     */
    private $nbAttesIjssAt;

    /**
     * Nb attes ijss at fact.
     *
     * @var int
     */
    private $nbAttesIjssAtFact;

    /**
     * Nb attes ijss ata deduire.
     *
     * @var int
     */
    private $nbAttesIjssAtaDeduire;

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
     * Nb dads editees.
     *
     * @var int
     */
    private $nbDadsEditees;

    /**
     * Nb dads editees a deduire.
     *
     * @var int
     */
    private $nbDadsEditeesADeduire;

    /**
     * Nb dads editees fact.
     *
     * @var int
     */
    private $nbDadsEditeesFact;

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
     * Nb dsn evt arret.
     *
     * @var int
     */
    private $nbDsnEvtArret;

    /**
     * Nb dsn evt arret a deduire.
     *
     * @var int
     */
    private $nbDsnEvtArretADeduire;

    /**
     * Nb dsn evt arret fact.
     *
     * @var int
     */
    private $nbDsnEvtArretFact;

    /**
     * Nb dsn evt fin contrat.
     *
     * @var int
     */
    private $nbDsnEvtFinContrat;

    /**
     * Nb dsn evt fin contrat a deduire.
     *
     * @var int
     */
    private $nbDsnEvtFinContratADeduire;

    /**
     * Nb dsn evt fin contrat fact.
     *
     * @var int
     */
    private $nbDsnEvtFinContratFact;

    /**
     * Nb dsn mensuelle.
     *
     * @var int
     */
    private $nbDsnMensuelle;

    /**
     * Nb dsn mensuelle a deduire.
     *
     * @var int
     */
    private $nbDsnMensuelleADeduire;

    /**
     * Nb dsn mensuelle fact.
     *
     * @var int
     */
    private $nbDsnMensuelleFact;

    /**
     * Nb due.
     *
     * @var int
     */
    private $nbDue;

    /**
     * Nb due fact.
     *
     * @var int
     */
    private $nbDueFact;

    /**
     * Nb duea deduire.
     *
     * @var int
     */
    private $nbDueaDeduire;

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
     * Nb tds realisees.
     *
     * @var int
     */
    private $nbTdsRealisees;

    /**
     * Nb tds realisees a deduire.
     *
     * @var int
     */
    private $nbTdsRealiseesADeduire;

    /**
     * Nb tds realisees fact.
     *
     * @var int
     */
    private $nbTdsRealiseesFact;

    /**
     * Periode.
     *
     * @var DateTime|null
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
     * Get the nb attes ijss at.
     *
     * @return int Returns the nb attes ijss at.
     */
    public function getNbAttesIjssAt() {
        return $this->nbAttesIjssAt;
    }

    /**
     * Get the nb attes ijss at fact.
     *
     * @return int Returns the nb attes ijss at fact.
     */
    public function getNbAttesIjssAtFact() {
        return $this->nbAttesIjssAtFact;
    }

    /**
     * Get the nb attes ijss ata deduire.
     *
     * @return int Returns the nb attes ijss ata deduire.
     */
    public function getNbAttesIjssAtaDeduire() {
        return $this->nbAttesIjssAtaDeduire;
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
     * Get the nb dads editees.
     *
     * @return int Returns the nb dads editees.
     */
    public function getNbDadsEditees() {
        return $this->nbDadsEditees;
    }

    /**
     * Get the nb dads editees a deduire.
     *
     * @return int Returns the nb dads editees a deduire.
     */
    public function getNbDadsEditeesADeduire() {
        return $this->nbDadsEditeesADeduire;
    }

    /**
     * Get the nb dads editees fact.
     *
     * @return int Returns the nb dads editees fact.
     */
    public function getNbDadsEditeesFact() {
        return $this->nbDadsEditeesFact;
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
     * Get the nb dsn evt arret.
     *
     * @return int Returns the nb dsn evt arret.
     */
    public function getNbDsnEvtArret() {
        return $this->nbDsnEvtArret;
    }

    /**
     * Get the nb dsn evt arret a deduire.
     *
     * @return int Returns the nb dsn evt arret a deduire.
     */
    public function getNbDsnEvtArretADeduire() {
        return $this->nbDsnEvtArretADeduire;
    }

    /**
     * Get the nb dsn evt arret fact.
     *
     * @return int Returns the nb dsn evt arret fact.
     */
    public function getNbDsnEvtArretFact() {
        return $this->nbDsnEvtArretFact;
    }

    /**
     * Get the nb dsn evt fin contrat.
     *
     * @return int Returns the nb dsn evt fin contrat.
     */
    public function getNbDsnEvtFinContrat() {
        return $this->nbDsnEvtFinContrat;
    }

    /**
     * Get the nb dsn evt fin contrat a deduire.
     *
     * @return int Returns the nb dsn evt fin contrat a deduire.
     */
    public function getNbDsnEvtFinContratADeduire() {
        return $this->nbDsnEvtFinContratADeduire;
    }

    /**
     * Get the nb dsn evt fin contrat fact.
     *
     * @return int Returns the nb dsn evt fin contrat fact.
     */
    public function getNbDsnEvtFinContratFact() {
        return $this->nbDsnEvtFinContratFact;
    }

    /**
     * Get the nb dsn mensuelle.
     *
     * @return int Returns the nb dsn mensuelle.
     */
    public function getNbDsnMensuelle() {
        return $this->nbDsnMensuelle;
    }

    /**
     * Get the nb dsn mensuelle a deduire.
     *
     * @return int Returns the nb dsn mensuelle a deduire.
     */
    public function getNbDsnMensuelleADeduire() {
        return $this->nbDsnMensuelleADeduire;
    }

    /**
     * Get the nb dsn mensuelle fact.
     *
     * @return int Returns the nb dsn mensuelle fact.
     */
    public function getNbDsnMensuelleFact() {
        return $this->nbDsnMensuelleFact;
    }

    /**
     * Get the nb due.
     *
     * @return int Returns the nb due.
     */
    public function getNbDue() {
        return $this->nbDue;
    }

    /**
     * Get the nb due fact.
     *
     * @return int Returns the nb due fact.
     */
    public function getNbDueFact() {
        return $this->nbDueFact;
    }

    /**
     * Get the nb duea deduire.
     *
     * @return int Returns the nb duea deduire.
     */
    public function getNbDueaDeduire() {
        return $this->nbDueaDeduire;
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
     * Get the nb tds realisees.
     *
     * @return int Returns the nb tds realisees.
     */
    public function getNbTdsRealisees() {
        return $this->nbTdsRealisees;
    }

    /**
     * Get the nb tds realisees a deduire.
     *
     * @return int Returns the nb tds realisees a deduire.
     */
    public function getNbTdsRealiseesADeduire() {
        return $this->nbTdsRealiseesADeduire;
    }

    /**
     * Get the nb tds realisees fact.
     *
     * @return int Returns the nb tds realisees fact.
     */
    public function getNbTdsRealiseesFact() {
        return $this->nbTdsRealiseesFact;
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
     * Set the nb attes assedic.
     *
     * @param int $nbAttesAssedic The nb attes assedic.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesAssedic($nbAttesAssedic) {
        $this->nbAttesAssedic = $nbAttesAssedic;
        return $this;
    }

    /**
     * Set the nb attes assedic a deduire.
     *
     * @param int $nbAttesAssedicADeduire The nb attes assedic a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesAssedicADeduire($nbAttesAssedicADeduire) {
        $this->nbAttesAssedicADeduire = $nbAttesAssedicADeduire;
        return $this;
    }

    /**
     * Set the nb attes assedic fact.
     *
     * @param int $nbAttesAssedicFact The nb attes assedic fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesAssedicFact($nbAttesAssedicFact) {
        $this->nbAttesAssedicFact = $nbAttesAssedicFact;
        return $this;
    }

    /**
     * Set the nb attes ijss.
     *
     * @param int $nbAttesIjss The nb attes ijss.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjss($nbAttesIjss) {
        $this->nbAttesIjss = $nbAttesIjss;
        return $this;
    }

    /**
     * Set the nb attes ijss a deduire.
     *
     * @param int $nbAttesIjssADeduire The nb attes ijss a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssADeduire($nbAttesIjssADeduire) {
        $this->nbAttesIjssADeduire = $nbAttesIjssADeduire;
        return $this;
    }

    /**
     * Set the nb attes ijss at.
     *
     * @param int $nbAttesIjssAt The nb attes ijss at.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssAt($nbAttesIjssAt) {
        $this->nbAttesIjssAt = $nbAttesIjssAt;
        return $this;
    }

    /**
     * Set the nb attes ijss at fact.
     *
     * @param int $nbAttesIjssAtFact The nb attes ijss at fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssAtFact($nbAttesIjssAtFact) {
        $this->nbAttesIjssAtFact = $nbAttesIjssAtFact;
        return $this;
    }

    /**
     * Set the nb attes ijss ata deduire.
     *
     * @param int $nbAttesIjssAtaDeduire The nb attes ijss ata deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssAtaDeduire($nbAttesIjssAtaDeduire) {
        $this->nbAttesIjssAtaDeduire = $nbAttesIjssAtaDeduire;
        return $this;
    }

    /**
     * Set the nb attes ijss fact.
     *
     * @param int $nbAttesIjssFact The nb attes ijss fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttesIjssFact($nbAttesIjssFact) {
        $this->nbAttesIjssFact = $nbAttesIjssFact;
        return $this;
    }

    /**
     * Set the nb attest emploi.
     *
     * @param int $nbAttestEmploi The nb attest emploi.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttestEmploi($nbAttestEmploi) {
        $this->nbAttestEmploi = $nbAttestEmploi;
        return $this;
    }

    /**
     * Set the nb attest emploi a deduire.
     *
     * @param int $nbAttestEmploiADeduire The nb attest emploi a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttestEmploiADeduire($nbAttestEmploiADeduire) {
        $this->nbAttestEmploiADeduire = $nbAttestEmploiADeduire;
        return $this;
    }

    /**
     * Set the nb attest emploi fact.
     *
     * @param int $nbAttestEmploiFact The nb attest emploi fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbAttestEmploiFact($nbAttestEmploiFact) {
        $this->nbAttestEmploiFact = $nbAttestEmploiFact;
        return $this;
    }

    /**
     * Set the nb bul edites.
     *
     * @param int $nbBulEdites The nb bul edites.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulEdites($nbBulEdites) {
        $this->nbBulEdites = $nbBulEdites;
        return $this;
    }

    /**
     * Set the nb bul edites a deduire.
     *
     * @param int $nbBulEditesADeduire The nb bul edites a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulEditesADeduire($nbBulEditesADeduire) {
        $this->nbBulEditesADeduire = $nbBulEditesADeduire;
        return $this;
    }

    /**
     * Set the nb bul edites fact.
     *
     * @param int $nbBulEditesFact The nb bul edites fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulEditesFact($nbBulEditesFact) {
        $this->nbBulEditesFact = $nbBulEditesFact;
        return $this;
    }

    /**
     * Set the nb bul valides.
     *
     * @param int $nbBulValides The nb bul valides.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulValides($nbBulValides) {
        $this->nbBulValides = $nbBulValides;
        return $this;
    }

    /**
     * Set the nb bul valides a deduire.
     *
     * @param int $nbBulValidesADeduire The nb bul valides a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulValidesADeduire($nbBulValidesADeduire) {
        $this->nbBulValidesADeduire = $nbBulValidesADeduire;
        return $this;
    }

    /**
     * Set the nb bul valides fact.
     *
     * @param int $nbBulValidesFact The nb bul valides fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbBulValidesFact($nbBulValidesFact) {
        $this->nbBulValidesFact = $nbBulValidesFact;
        return $this;
    }

    /**
     * Set the nb certif travail.
     *
     * @param int $nbCertifTravail The nb certif travail.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCertifTravail($nbCertifTravail) {
        $this->nbCertifTravail = $nbCertifTravail;
        return $this;
    }

    /**
     * Set the nb certif travail a deduire.
     *
     * @param int $nbCertifTravailADeduire The nb certif travail a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCertifTravailADeduire($nbCertifTravailADeduire) {
        $this->nbCertifTravailADeduire = $nbCertifTravailADeduire;
        return $this;
    }

    /**
     * Set the nb certif travail fact.
     *
     * @param int $nbCertifTravailFact The nb certif travail fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbCertifTravailFact($nbCertifTravailFact) {
        $this->nbCertifTravailFact = $nbCertifTravailFact;
        return $this;
    }

    /**
     * Set the nb dads editees.
     *
     * @param int $nbDadsEditees The nb dads editees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDadsEditees($nbDadsEditees) {
        $this->nbDadsEditees = $nbDadsEditees;
        return $this;
    }

    /**
     * Set the nb dads editees a deduire.
     *
     * @param int $nbDadsEditeesADeduire The nb dads editees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDadsEditeesADeduire($nbDadsEditeesADeduire) {
        $this->nbDadsEditeesADeduire = $nbDadsEditeesADeduire;
        return $this;
    }

    /**
     * Set the nb dads editees fact.
     *
     * @param int $nbDadsEditeesFact The nb dads editees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDadsEditeesFact($nbDadsEditeesFact) {
        $this->nbDadsEditeesFact = $nbDadsEditeesFact;
        return $this;
    }

    /**
     * Set the nb disquettes virements.
     *
     * @param int $nbDisquettesVirements The nb disquettes virements.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDisquettesVirements($nbDisquettesVirements) {
        $this->nbDisquettesVirements = $nbDisquettesVirements;
        return $this;
    }

    /**
     * Set the nb disquettes virements a deduire.
     *
     * @param int $nbDisquettesVirementsADeduire The nb disquettes virements a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDisquettesVirementsADeduire($nbDisquettesVirementsADeduire) {
        $this->nbDisquettesVirementsADeduire = $nbDisquettesVirementsADeduire;
        return $this;
    }

    /**
     * Set the nb disquettes virements fact.
     *
     * @param int $nbDisquettesVirementsFact The nb disquettes virements fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDisquettesVirementsFact($nbDisquettesVirementsFact) {
        $this->nbDisquettesVirementsFact = $nbDisquettesVirementsFact;
        return $this;
    }

    /**
     * Set the nb dsn evt arret.
     *
     * @param int $nbDsnEvtArret The nb dsn evt arret.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtArret($nbDsnEvtArret) {
        $this->nbDsnEvtArret = $nbDsnEvtArret;
        return $this;
    }

    /**
     * Set the nb dsn evt arret a deduire.
     *
     * @param int $nbDsnEvtArretADeduire The nb dsn evt arret a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtArretADeduire($nbDsnEvtArretADeduire) {
        $this->nbDsnEvtArretADeduire = $nbDsnEvtArretADeduire;
        return $this;
    }

    /**
     * Set the nb dsn evt arret fact.
     *
     * @param int $nbDsnEvtArretFact The nb dsn evt arret fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtArretFact($nbDsnEvtArretFact) {
        $this->nbDsnEvtArretFact = $nbDsnEvtArretFact;
        return $this;
    }

    /**
     * Set the nb dsn evt fin contrat.
     *
     * @param int $nbDsnEvtFinContrat The nb dsn evt fin contrat.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtFinContrat($nbDsnEvtFinContrat) {
        $this->nbDsnEvtFinContrat = $nbDsnEvtFinContrat;
        return $this;
    }

    /**
     * Set the nb dsn evt fin contrat a deduire.
     *
     * @param int $nbDsnEvtFinContratADeduire The nb dsn evt fin contrat a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtFinContratADeduire($nbDsnEvtFinContratADeduire) {
        $this->nbDsnEvtFinContratADeduire = $nbDsnEvtFinContratADeduire;
        return $this;
    }

    /**
     * Set the nb dsn evt fin contrat fact.
     *
     * @param int $nbDsnEvtFinContratFact The nb dsn evt fin contrat fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnEvtFinContratFact($nbDsnEvtFinContratFact) {
        $this->nbDsnEvtFinContratFact = $nbDsnEvtFinContratFact;
        return $this;
    }

    /**
     * Set the nb dsn mensuelle.
     *
     * @param int $nbDsnMensuelle The nb dsn mensuelle.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnMensuelle($nbDsnMensuelle) {
        $this->nbDsnMensuelle = $nbDsnMensuelle;
        return $this;
    }

    /**
     * Set the nb dsn mensuelle a deduire.
     *
     * @param int $nbDsnMensuelleADeduire The nb dsn mensuelle a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnMensuelleADeduire($nbDsnMensuelleADeduire) {
        $this->nbDsnMensuelleADeduire = $nbDsnMensuelleADeduire;
        return $this;
    }

    /**
     * Set the nb dsn mensuelle fact.
     *
     * @param int $nbDsnMensuelleFact The nb dsn mensuelle fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDsnMensuelleFact($nbDsnMensuelleFact) {
        $this->nbDsnMensuelleFact = $nbDsnMensuelleFact;
        return $this;
    }

    /**
     * Set the nb due.
     *
     * @param int $nbDue The nb due.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDue($nbDue) {
        $this->nbDue = $nbDue;
        return $this;
    }

    /**
     * Set the nb due fact.
     *
     * @param int $nbDueFact The nb due fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDueFact($nbDueFact) {
        $this->nbDueFact = $nbDueFact;
        return $this;
    }

    /**
     * Set the nb duea deduire.
     *
     * @param int $nbDueaDeduire The nb duea deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbDueaDeduire($nbDueaDeduire) {
        $this->nbDueaDeduire = $nbDueaDeduire;
        return $this;
    }

    /**
     * Set the nb solde tout compte.
     *
     * @param int $nbSoldeToutCompte The nb solde tout compte.
     * @return Compteur Returns this Compteur.
     */
    public function setNbSoldeToutCompte($nbSoldeToutCompte) {
        $this->nbSoldeToutCompte = $nbSoldeToutCompte;
        return $this;
    }

    /**
     * Set the nb solde tout compte a deduire.
     *
     * @param int $nbSoldeToutCompteADeduire The nb solde tout compte a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbSoldeToutCompteADeduire($nbSoldeToutCompteADeduire) {
        $this->nbSoldeToutCompteADeduire = $nbSoldeToutCompteADeduire;
        return $this;
    }

    /**
     * Set the nb solde tout compte fact.
     *
     * @param int $nbSoldeToutCompteFact The nb solde tout compte fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbSoldeToutCompteFact($nbSoldeToutCompteFact) {
        $this->nbSoldeToutCompteFact = $nbSoldeToutCompteFact;
        return $this;
    }

    /**
     * Set the nb tds realisees.
     *
     * @param int $nbTdsRealisees The nb tds realisees.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTdsRealisees($nbTdsRealisees) {
        $this->nbTdsRealisees = $nbTdsRealisees;
        return $this;
    }

    /**
     * Set the nb tds realisees a deduire.
     *
     * @param int $nbTdsRealiseesADeduire The nb tds realisees a deduire.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTdsRealiseesADeduire($nbTdsRealiseesADeduire) {
        $this->nbTdsRealiseesADeduire = $nbTdsRealiseesADeduire;
        return $this;
    }

    /**
     * Set the nb tds realisees fact.
     *
     * @param int $nbTdsRealiseesFact The nb tds realisees fact.
     * @return Compteur Returns this Compteur.
     */
    public function setNbTdsRealiseesFact($nbTdsRealiseesFact) {
        $this->nbTdsRealiseesFact = $nbTdsRealiseesFact;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Compteur Returns this Compteur.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }
}
