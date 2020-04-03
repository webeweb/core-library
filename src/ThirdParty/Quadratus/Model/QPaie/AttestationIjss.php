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
 * Attestation ijss.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationIjss {

    /**
     * Adresse1.
     *
     * @var string
     */
    private $adresse1;

    /**
     * Adresse2.
     *
     * @var string
     */
    private $adresse2;

    /**
     * Adresse3.
     *
     * @var string
     */
    private $adresse3;

    /**
     * Cas general.
     *
     * @var bool
     */
    private $casGeneral;

    /**
     * Cas particulier.
     *
     * @var bool
     */
    private $casParticulier;

    /**
     * Categorie sal.
     *
     * @var string
     */
    private $categorieSal;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Date debut paternite.
     *
     * @var DateTime|null
     */
    private $dateDebutPaternite;

    /**
     * Date dern j mens.
     *
     * @var DateTime|null
     */
    private $dateDernJMens;

    /**
     * Date naissance employe.
     *
     * @var DateTime|null
     */
    private $dateNaissanceEmploye;

    /**
     * Date naissance enfant.
     *
     * @var DateTime|null
     */
    private $dateNaissanceEnfant;

    /**
     * Dern j.
     *
     * @var DateTime|null
     */
    private $dernJ;

    /**
     * Dispense travail.
     *
     * @var bool
     */
    private $dispenseTravail;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Etbl adresse1.
     *
     * @var string
     */
    private $etblAdresse1;

    /**
     * Etbl adresse2.
     *
     * @var string
     */
    private $etblAdresse2;

    /**
     * Etbl adresse3.
     *
     * @var string
     */
    private $etblAdresse3;

    /**
     * Etbl raison sociale.
     *
     * @var string
     */
    private $etblRaisonSociale;

    /**
     * Etbl tel.
     *
     * @var string
     */
    private $etblTel;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Intitule compte.
     *
     * @var string
     */
    private $intituleCompte;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Maladie.
     *
     * @var bool
     */
    private $maladie;

    /**
     * Maternite.
     *
     * @var bool
     */
    private $maternite;

    /**
     * Matricule.
     *
     * @var string
     */
    private $matricule;

    /**
     * Montant general.
     *
     * @var float
     */
    private $montantGeneral;

    /**
     * Montant particulier.
     *
     * @var float
     */
    private $montantParticulier;

    /**
     * Mt cg euro ou franc.
     *
     * @var string
     */
    private $mtCgEuroOuFranc;

    /**
     * Mt cp euro ou franc.
     *
     * @var string
     */
    private $mtCpEuroOuFranc;

    /**
     * Mt sal brut moins150 h.
     *
     * @var float
     */
    private $mtSalBrutMoins150H;

    /**
     * Mt sal brut moins600 h.
     *
     * @var float
     */
    private $mtSalBrutMoins600H;

    /**
     * Nb enfants a charge.
     *
     * @var string
     */
    private $nbEnfantsACharge;

    /**
     * Nb h cas part.
     *
     * @var float
     */
    private $nbHCasPart;

    /**
     * Nb h general.
     *
     * @var float
     */
    private $nbHGeneral;

    /**
     * Nir.
     *
     * @var string
     */
    private $nir;

    /**
     * Nom employe.
     *
     * @var string
     */
    private $nomEmploye;

    /**
     * Nom marital.
     *
     * @var string
     */
    private $nomMarital;

    /**
     * Non repris.
     *
     * @var bool
     */
    private $nonRepris;

    /**
     * Numero attestation.
     *
     * @var string
     */
    private $numeroAttestation;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Paiement en euro.
     *
     * @var bool
     */
    private $paiementEnEuro;

    /**
     * Paternite.
     *
     * @var bool
     */
    private $paternite;

    /**
     * Periode au.
     *
     * @var DateTime|null
     */
    private $periodeAu;

    /**
     * Periode du.
     *
     * @var DateTime|null
     */
    private $periodeDu;

    /**
     * Periode subr au.
     *
     * @var DateTime|null
     */
    private $periodeSubrAu;

    /**
     * Periode subr du.
     *
     * @var DateTime|null
     */
    private $periodeSubrDu;

    /**
     * Plusde200h.
     *
     * @var bool
     */
    private $plusde200h;

    /**
     * Plusde800h.
     *
     * @var bool
     */
    private $plusde800h;

    /**
     * Prenom employe.
     *
     * @var string
     */
    private $prenomEmploye;

    /**
     * Rectificative.
     *
     * @var bool
     */
    private $rectificative;

    /**
     * Reprise.
     *
     * @var DateTime|null
     */
    private $reprise;

    /**
     * Reprise motif med.
     *
     * @var bool
     */
    private $repriseMotifMed;

    /**
     * Reprise raison pers.
     *
     * @var bool
     */
    private $repriseRaisonPers;

    /**
     * Signature date.
     *
     * @var DateTime|null
     */
    private $signatureDate;

    /**
     * Signature nom.
     *
     * @var string
     */
    private $signatureNom;

    /**
     * Signature qualite.
     *
     * @var string
     */
    private $signatureQualite;

    /**
     * Signature ville.
     *
     * @var string
     */
    private $signatureVille;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Situation.
     *
     * @var string
     */
    private $situation;

    /**
     * Subrogation constantes.
     *
     * @var bool
     */
    private $subrogationConstantes;

    /**
     * Subrogation montant.
     *
     * @var float
     */
    private $subrogationMontant;

    /**
     * Subrogation partielle.
     *
     * @var bool
     */
    private $subrogationPartielle;

    /**
     * Suspension date.
     *
     * @var DateTime|null
     */
    private $suspensionDate;

    /**
     * Suspension motif.
     *
     * @var string
     */
    private $suspensionMotif;

    /**
     * Travail temp.
     *
     * @var bool
     */
    private $travailTemp;

    /**
     * Type attestation.
     *
     * @var string
     */
    private $typeAttestation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse1.
     *
     * @return string Returns the adresse1.
     */
    public function getAdresse1() {
        return $this->adresse1;
    }

    /**
     * Get the adresse2.
     *
     * @return string Returns the adresse2.
     */
    public function getAdresse2() {
        return $this->adresse2;
    }

    /**
     * Get the adresse3.
     *
     * @return string Returns the adresse3.
     */
    public function getAdresse3() {
        return $this->adresse3;
    }

    /**
     * Get the cas general.
     *
     * @return bool Returns the cas general.
     */
    public function getCasGeneral() {
        return $this->casGeneral;
    }

    /**
     * Get the cas particulier.
     *
     * @return bool Returns the cas particulier.
     */
    public function getCasParticulier() {
        return $this->casParticulier;
    }

    /**
     * Get the categorie sal.
     *
     * @return string Returns the categorie sal.
     */
    public function getCategorieSal() {
        return $this->categorieSal;
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
     * Get the date debut paternite.
     *
     * @return DateTime|null Returns the date debut paternite.
     */
    public function getDateDebutPaternite() {
        return $this->dateDebutPaternite;
    }

    /**
     * Get the date dern j mens.
     *
     * @return DateTime|null Returns the date dern j mens.
     */
    public function getDateDernJMens() {
        return $this->dateDernJMens;
    }

    /**
     * Get the date naissance employe.
     *
     * @return DateTime|null Returns the date naissance employe.
     */
    public function getDateNaissanceEmploye() {
        return $this->dateNaissanceEmploye;
    }

    /**
     * Get the date naissance enfant.
     *
     * @return DateTime|null Returns the date naissance enfant.
     */
    public function getDateNaissanceEnfant() {
        return $this->dateNaissanceEnfant;
    }

    /**
     * Get the dern j.
     *
     * @return DateTime|null Returns the dern j.
     */
    public function getDernJ() {
        return $this->dernJ;
    }

    /**
     * Get the dispense travail.
     *
     * @return bool Returns the dispense travail.
     */
    public function getDispenseTravail() {
        return $this->dispenseTravail;
    }

    /**
     * Get the emploi.
     *
     * @return string Returns the emploi.
     */
    public function getEmploi() {
        return $this->emploi;
    }

    /**
     * Get the etbl adresse1.
     *
     * @return string Returns the etbl adresse1.
     */
    public function getEtblAdresse1() {
        return $this->etblAdresse1;
    }

    /**
     * Get the etbl adresse2.
     *
     * @return string Returns the etbl adresse2.
     */
    public function getEtblAdresse2() {
        return $this->etblAdresse2;
    }

    /**
     * Get the etbl adresse3.
     *
     * @return string Returns the etbl adresse3.
     */
    public function getEtblAdresse3() {
        return $this->etblAdresse3;
    }

    /**
     * Get the etbl raison sociale.
     *
     * @return string Returns the etbl raison sociale.
     */
    public function getEtblRaisonSociale() {
        return $this->etblRaisonSociale;
    }

    /**
     * Get the etbl tel.
     *
     * @return string Returns the etbl tel.
     */
    public function getEtblTel() {
        return $this->etblTel;
    }

    /**
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the intitule compte.
     *
     * @return string Returns the intitule compte.
     */
    public function getIntituleCompte() {
        return $this->intituleCompte;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the maladie.
     *
     * @return bool Returns the maladie.
     */
    public function getMaladie() {
        return $this->maladie;
    }

    /**
     * Get the maternite.
     *
     * @return bool Returns the maternite.
     */
    public function getMaternite() {
        return $this->maternite;
    }

    /**
     * Get the matricule.
     *
     * @return string Returns the matricule.
     */
    public function getMatricule() {
        return $this->matricule;
    }

    /**
     * Get the montant general.
     *
     * @return float Returns the montant general.
     */
    public function getMontantGeneral() {
        return $this->montantGeneral;
    }

    /**
     * Get the montant particulier.
     *
     * @return float Returns the montant particulier.
     */
    public function getMontantParticulier() {
        return $this->montantParticulier;
    }

    /**
     * Get the mt cg euro ou franc.
     *
     * @return string Returns the mt cg euro ou franc.
     */
    public function getMtCgEuroOuFranc() {
        return $this->mtCgEuroOuFranc;
    }

    /**
     * Get the mt cp euro ou franc.
     *
     * @return string Returns the mt cp euro ou franc.
     */
    public function getMtCpEuroOuFranc() {
        return $this->mtCpEuroOuFranc;
    }

    /**
     * Get the mt sal brut moins150 h.
     *
     * @return float Returns the mt sal brut moins150 h.
     */
    public function getMtSalBrutMoins150H() {
        return $this->mtSalBrutMoins150H;
    }

    /**
     * Get the mt sal brut moins600 h.
     *
     * @return float Returns the mt sal brut moins600 h.
     */
    public function getMtSalBrutMoins600H() {
        return $this->mtSalBrutMoins600H;
    }

    /**
     * Get the nb enfants a charge.
     *
     * @return string Returns the nb enfants a charge.
     */
    public function getNbEnfantsACharge() {
        return $this->nbEnfantsACharge;
    }

    /**
     * Get the nb h cas part.
     *
     * @return float Returns the nb h cas part.
     */
    public function getNbHCasPart() {
        return $this->nbHCasPart;
    }

    /**
     * Get the nb h general.
     *
     * @return float Returns the nb h general.
     */
    public function getNbHGeneral() {
        return $this->nbHGeneral;
    }

    /**
     * Get the nir.
     *
     * @return string Returns the nir.
     */
    public function getNir() {
        return $this->nir;
    }

    /**
     * Get the nom employe.
     *
     * @return string Returns the nom employe.
     */
    public function getNomEmploye() {
        return $this->nomEmploye;
    }

    /**
     * Get the nom marital.
     *
     * @return string Returns the nom marital.
     */
    public function getNomMarital() {
        return $this->nomMarital;
    }

    /**
     * Get the non repris.
     *
     * @return bool Returns the non repris.
     */
    public function getNonRepris() {
        return $this->nonRepris;
    }

    /**
     * Get the numero attestation.
     *
     * @return string Returns the numero attestation.
     */
    public function getNumeroAttestation() {
        return $this->numeroAttestation;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
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
     * Get the paiement en euro.
     *
     * @return bool Returns the paiement en euro.
     */
    public function getPaiementEnEuro() {
        return $this->paiementEnEuro;
    }

    /**
     * Get the paternite.
     *
     * @return bool Returns the paternite.
     */
    public function getPaternite() {
        return $this->paternite;
    }

    /**
     * Get the periode au.
     *
     * @return DateTime|null Returns the periode au.
     */
    public function getPeriodeAu() {
        return $this->periodeAu;
    }

    /**
     * Get the periode du.
     *
     * @return DateTime|null Returns the periode du.
     */
    public function getPeriodeDu() {
        return $this->periodeDu;
    }

    /**
     * Get the periode subr au.
     *
     * @return DateTime|null Returns the periode subr au.
     */
    public function getPeriodeSubrAu() {
        return $this->periodeSubrAu;
    }

    /**
     * Get the periode subr du.
     *
     * @return DateTime|null Returns the periode subr du.
     */
    public function getPeriodeSubrDu() {
        return $this->periodeSubrDu;
    }

    /**
     * Get the plusde200h.
     *
     * @return bool Returns the plusde200h.
     */
    public function getPlusde200h() {
        return $this->plusde200h;
    }

    /**
     * Get the plusde800h.
     *
     * @return bool Returns the plusde800h.
     */
    public function getPlusde800h() {
        return $this->plusde800h;
    }

    /**
     * Get the prenom employe.
     *
     * @return string Returns the prenom employe.
     */
    public function getPrenomEmploye() {
        return $this->prenomEmploye;
    }

    /**
     * Get the rectificative.
     *
     * @return bool Returns the rectificative.
     */
    public function getRectificative() {
        return $this->rectificative;
    }

    /**
     * Get the reprise.
     *
     * @return DateTime|null Returns the reprise.
     */
    public function getReprise() {
        return $this->reprise;
    }

    /**
     * Get the reprise motif med.
     *
     * @return bool Returns the reprise motif med.
     */
    public function getRepriseMotifMed() {
        return $this->repriseMotifMed;
    }

    /**
     * Get the reprise raison pers.
     *
     * @return bool Returns the reprise raison pers.
     */
    public function getRepriseRaisonPers() {
        return $this->repriseRaisonPers;
    }

    /**
     * Get the signature date.
     *
     * @return DateTime|null Returns the signature date.
     */
    public function getSignatureDate() {
        return $this->signatureDate;
    }

    /**
     * Get the signature nom.
     *
     * @return string Returns the signature nom.
     */
    public function getSignatureNom() {
        return $this->signatureNom;
    }

    /**
     * Get the signature qualite.
     *
     * @return string Returns the signature qualite.
     */
    public function getSignatureQualite() {
        return $this->signatureQualite;
    }

    /**
     * Get the signature ville.
     *
     * @return string Returns the signature ville.
     */
    public function getSignatureVille() {
        return $this->signatureVille;
    }

    /**
     * Get the siret.
     *
     * @return string Returns the siret.
     */
    public function getSiret() {
        return $this->siret;
    }

    /**
     * Get the situation.
     *
     * @return string Returns the situation.
     */
    public function getSituation() {
        return $this->situation;
    }

    /**
     * Get the subrogation constantes.
     *
     * @return bool Returns the subrogation constantes.
     */
    public function getSubrogationConstantes() {
        return $this->subrogationConstantes;
    }

    /**
     * Get the subrogation montant.
     *
     * @return float Returns the subrogation montant.
     */
    public function getSubrogationMontant() {
        return $this->subrogationMontant;
    }

    /**
     * Get the subrogation partielle.
     *
     * @return bool Returns the subrogation partielle.
     */
    public function getSubrogationPartielle() {
        return $this->subrogationPartielle;
    }

    /**
     * Get the suspension date.
     *
     * @return DateTime|null Returns the suspension date.
     */
    public function getSuspensionDate() {
        return $this->suspensionDate;
    }

    /**
     * Get the suspension motif.
     *
     * @return string Returns the suspension motif.
     */
    public function getSuspensionMotif() {
        return $this->suspensionMotif;
    }

    /**
     * Get the travail temp.
     *
     * @return bool Returns the travail temp.
     */
    public function getTravailTemp() {
        return $this->travailTemp;
    }

    /**
     * Get the type attestation.
     *
     * @return string Returns the type attestation.
     */
    public function getTypeAttestation() {
        return $this->typeAttestation;
    }

    /**
     * Set the adresse1.
     *
     * @param string $adresse1 The adresse1.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string $adresse2 The adresse2.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string $adresse3 The adresse3.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the cas general.
     *
     * @param bool $casGeneral The cas general.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCasGeneral($casGeneral) {
        $this->casGeneral = $casGeneral;
        return $this;
    }

    /**
     * Set the cas particulier.
     *
     * @param bool $casParticulier The cas particulier.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCasParticulier($casParticulier) {
        $this->casParticulier = $casParticulier;
        return $this;
    }

    /**
     * Set the categorie sal.
     *
     * @param string $categorieSal The categorie sal.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCategorieSal($categorieSal) {
        $this->categorieSal = $categorieSal;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date debut paternite.
     *
     * @param DateTime|null $dateDebutPaternite The date debut paternite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateDebutPaternite(DateTime $dateDebutPaternite = null) {
        $this->dateDebutPaternite = $dateDebutPaternite;
        return $this;
    }

    /**
     * Set the date dern j mens.
     *
     * @param DateTime|null $dateDernJMens The date dern j mens.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateDernJMens(DateTime $dateDernJMens = null) {
        $this->dateDernJMens = $dateDernJMens;
        return $this;
    }

    /**
     * Set the date naissance employe.
     *
     * @param DateTime|null $dateNaissanceEmploye The date naissance employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateNaissanceEmploye(DateTime $dateNaissanceEmploye = null) {
        $this->dateNaissanceEmploye = $dateNaissanceEmploye;
        return $this;
    }

    /**
     * Set the date naissance enfant.
     *
     * @param DateTime|null $dateNaissanceEnfant The date naissance enfant.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDateNaissanceEnfant(DateTime $dateNaissanceEnfant = null) {
        $this->dateNaissanceEnfant = $dateNaissanceEnfant;
        return $this;
    }

    /**
     * Set the dern j.
     *
     * @param DateTime|null $dernJ The dern j.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDernJ(DateTime $dernJ = null) {
        $this->dernJ = $dernJ;
        return $this;
    }

    /**
     * Set the dispense travail.
     *
     * @param bool $dispenseTravail The dispense travail.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setDispenseTravail($dispenseTravail) {
        $this->dispenseTravail = $dispenseTravail;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string $etblAdresse1 The etbl adresse1.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblAdresse1($etblAdresse1) {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string $etblAdresse2 The etbl adresse2.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblAdresse2($etblAdresse2) {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl adresse3.
     *
     * @param string $etblAdresse3 The etbl adresse3.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblAdresse3($etblAdresse3) {
        $this->etblAdresse3 = $etblAdresse3;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string $etblRaisonSociale The etbl raison sociale.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblRaisonSociale($etblRaisonSociale) {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the intitule compte.
     *
     * @param string $intituleCompte The intitule compte.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setIntituleCompte($intituleCompte) {
        $this->intituleCompte = $intituleCompte;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the maladie.
     *
     * @param bool $maladie The maladie.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMaladie($maladie) {
        $this->maladie = $maladie;
        return $this;
    }

    /**
     * Set the maternite.
     *
     * @param bool $maternite The maternite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMaternite($maternite) {
        $this->maternite = $maternite;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string $matricule The matricule.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the montant general.
     *
     * @param float $montantGeneral The montant general.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMontantGeneral($montantGeneral) {
        $this->montantGeneral = $montantGeneral;
        return $this;
    }

    /**
     * Set the montant particulier.
     *
     * @param float $montantParticulier The montant particulier.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMontantParticulier($montantParticulier) {
        $this->montantParticulier = $montantParticulier;
        return $this;
    }

    /**
     * Set the mt cg euro ou franc.
     *
     * @param string $mtCgEuroOuFranc The mt cg euro ou franc.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtCgEuroOuFranc($mtCgEuroOuFranc) {
        $this->mtCgEuroOuFranc = $mtCgEuroOuFranc;
        return $this;
    }

    /**
     * Set the mt cp euro ou franc.
     *
     * @param string $mtCpEuroOuFranc The mt cp euro ou franc.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtCpEuroOuFranc($mtCpEuroOuFranc) {
        $this->mtCpEuroOuFranc = $mtCpEuroOuFranc;
        return $this;
    }

    /**
     * Set the mt sal brut moins150 h.
     *
     * @param float $mtSalBrutMoins150H The mt sal brut moins150 h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtSalBrutMoins150H($mtSalBrutMoins150H) {
        $this->mtSalBrutMoins150H = $mtSalBrutMoins150H;
        return $this;
    }

    /**
     * Set the mt sal brut moins600 h.
     *
     * @param float $mtSalBrutMoins600H The mt sal brut moins600 h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setMtSalBrutMoins600H($mtSalBrutMoins600H) {
        $this->mtSalBrutMoins600H = $mtSalBrutMoins600H;
        return $this;
    }

    /**
     * Set the nb enfants a charge.
     *
     * @param string $nbEnfantsACharge The nb enfants a charge.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNbEnfantsACharge($nbEnfantsACharge) {
        $this->nbEnfantsACharge = $nbEnfantsACharge;
        return $this;
    }

    /**
     * Set the nb h cas part.
     *
     * @param float $nbHCasPart The nb h cas part.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNbHCasPart($nbHCasPart) {
        $this->nbHCasPart = $nbHCasPart;
        return $this;
    }

    /**
     * Set the nb h general.
     *
     * @param float $nbHGeneral The nb h general.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNbHGeneral($nbHGeneral) {
        $this->nbHGeneral = $nbHGeneral;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string $nir The nir.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNir($nir) {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the non repris.
     *
     * @param bool $nonRepris The non repris.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNonRepris($nonRepris) {
        $this->nonRepris = $nonRepris;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the paiement en euro.
     *
     * @param bool $paiementEnEuro The paiement en euro.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPaiementEnEuro($paiementEnEuro) {
        $this->paiementEnEuro = $paiementEnEuro;
        return $this;
    }

    /**
     * Set the paternite.
     *
     * @param bool $paternite The paternite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPaternite($paternite) {
        $this->paternite = $paternite;
        return $this;
    }

    /**
     * Set the periode au.
     *
     * @param DateTime|null $periodeAu The periode au.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeAu(DateTime $periodeAu = null) {
        $this->periodeAu = $periodeAu;
        return $this;
    }

    /**
     * Set the periode du.
     *
     * @param DateTime|null $periodeDu The periode du.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeDu(DateTime $periodeDu = null) {
        $this->periodeDu = $periodeDu;
        return $this;
    }

    /**
     * Set the periode subr au.
     *
     * @param DateTime|null $periodeSubrAu The periode subr au.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeSubrAu(DateTime $periodeSubrAu = null) {
        $this->periodeSubrAu = $periodeSubrAu;
        return $this;
    }

    /**
     * Set the periode subr du.
     *
     * @param DateTime|null $periodeSubrDu The periode subr du.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPeriodeSubrDu(DateTime $periodeSubrDu = null) {
        $this->periodeSubrDu = $periodeSubrDu;
        return $this;
    }

    /**
     * Set the plusde200h.
     *
     * @param bool $plusde200h The plusde200h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPlusde200h($plusde200h) {
        $this->plusde200h = $plusde200h;
        return $this;
    }

    /**
     * Set the plusde800h.
     *
     * @param bool $plusde800h The plusde800h.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPlusde800h($plusde800h) {
        $this->plusde800h = $plusde800h;
        return $this;
    }

    /**
     * Set the prenom employe.
     *
     * @param string $prenomEmploye The prenom employe.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setPrenomEmploye($prenomEmploye) {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }

    /**
     * Set the rectificative.
     *
     * @param bool $rectificative The rectificative.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setRectificative($rectificative) {
        $this->rectificative = $rectificative;
        return $this;
    }

    /**
     * Set the reprise.
     *
     * @param DateTime|null $reprise The reprise.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setReprise(DateTime $reprise = null) {
        $this->reprise = $reprise;
        return $this;
    }

    /**
     * Set the reprise motif med.
     *
     * @param bool $repriseMotifMed The reprise motif med.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setRepriseMotifMed($repriseMotifMed) {
        $this->repriseMotifMed = $repriseMotifMed;
        return $this;
    }

    /**
     * Set the reprise raison pers.
     *
     * @param bool $repriseRaisonPers The reprise raison pers.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setRepriseRaisonPers($repriseRaisonPers) {
        $this->repriseRaisonPers = $repriseRaisonPers;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime|null $signatureDate The signature date.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureDate(DateTime $signatureDate = null) {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string $signatureNom The signature nom.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureNom($signatureNom) {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string $signatureQualite The signature qualite.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureQualite($signatureQualite) {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string $signatureVille The signature ville.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSignatureVille($signatureVille) {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string $siret The siret.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the situation.
     *
     * @param string $situation The situation.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSituation($situation) {
        $this->situation = $situation;
        return $this;
    }

    /**
     * Set the subrogation constantes.
     *
     * @param bool $subrogationConstantes The subrogation constantes.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSubrogationConstantes($subrogationConstantes) {
        $this->subrogationConstantes = $subrogationConstantes;
        return $this;
    }

    /**
     * Set the subrogation montant.
     *
     * @param float $subrogationMontant The subrogation montant.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSubrogationMontant($subrogationMontant) {
        $this->subrogationMontant = $subrogationMontant;
        return $this;
    }

    /**
     * Set the subrogation partielle.
     *
     * @param bool $subrogationPartielle The subrogation partielle.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSubrogationPartielle($subrogationPartielle) {
        $this->subrogationPartielle = $subrogationPartielle;
        return $this;
    }

    /**
     * Set the suspension date.
     *
     * @param DateTime|null $suspensionDate The suspension date.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSuspensionDate(DateTime $suspensionDate = null) {
        $this->suspensionDate = $suspensionDate;
        return $this;
    }

    /**
     * Set the suspension motif.
     *
     * @param string $suspensionMotif The suspension motif.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setSuspensionMotif($suspensionMotif) {
        $this->suspensionMotif = $suspensionMotif;
        return $this;
    }

    /**
     * Set the travail temp.
     *
     * @param bool $travailTemp The travail temp.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setTravailTemp($travailTemp) {
        $this->travailTemp = $travailTemp;
        return $this;
    }

    /**
     * Set the type attestation.
     *
     * @param string $typeAttestation The type attestation.
     * @return AttestationIjss Returns this Attestation ijss.
     */
    public function setTypeAttestation($typeAttestation) {
        $this->typeAttestation = $typeAttestation;
        return $this;
    }
}
