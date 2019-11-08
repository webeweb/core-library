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
 * Attestation at.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAt {

    /**
     * Accident.
     *
     * @var bool
     */
    private $accident;

    /**
     * Accident mois embauche.
     *
     * @var bool
     */
    private $accidentMoisEmbauche;

    /**
     * Adresse1.
     *
     * @var string
     */
    private $adresse1;

    /**
     * Adresse3.
     *
     * @var string
     */
    private $adresse3;

    /**
     * Anciennete.
     *
     * @var string
     */
    private $anciennete;

    /**
     * Autre vivtime.
     *
     * @var bool
     */
    private $autreVivtime;

    /**
     * Cas part.
     *
     * @var string
     */
    private $casPart;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Date accident.
     *
     * @var DateTime|null
     */
    private $dateAccident;

    /**
     * Date contrat.
     *
     * @var DateTime|null
     */
    private $dateContrat;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Dern heure.
     *
     * @var DateTime|null
     */
    private $dernHeure;

    /**
     * Dern j.
     *
     * @var DateTime|null
     */
    private $dernJ;

    /**
     * Embauche.
     *
     * @var DateTime|null
     */
    private $embauche;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Etbl a adresse1.
     *
     * @var string
     */
    private $etblAAdresse1;

    /**
     * Etbl a adresse2.
     *
     * @var string
     */
    private $etblAAdresse2;

    /**
     * Etbl a adresse3.
     *
     * @var string
     */
    private $etblAAdresse3;

    /**
     * Etbl a tel.
     *
     * @var string
     */
    private $etblATel;

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
     * Etbl nature activite.
     *
     * @var string
     */
    private $etblNatureActivite;

    /**
     * Etbl no adherent.
     *
     * @var string
     */
    private $etblNoAdherent;

    /**
     * Etbl nom prenom.
     *
     * @var string
     */
    private $etblNomPrenom;

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
     * Integral.
     *
     * @var bool
     */
    private $integral;

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
     * Lieu naissance.
     *
     * @var string
     */
    private $lieuNaissance;

    /**
     * Maintien.
     *
     * @var bool
     */
    private $maintien;

    /**
     * Maladie pro.
     *
     * @var bool
     */
    private $maladiePro;

    /**
     * Medecin.
     *
     * @var string
     */
    private $medecin;

    /**
     * Montant cotis theo.
     *
     * @var float
     */
    private $montantCotisTheo;

    /**
     * Montant sal theo.
     *
     * @var float
     */
    private $montantSalTheo;

    /**
     * Nationalite autre.
     *
     * @var bool
     */
    private $nationaliteAutre;

    /**
     * Nationalite cee.
     *
     * @var bool
     */
    private $nationaliteCee;

    /**
     * Nationalite fr.
     *
     * @var bool
     */
    private $nationaliteFr;

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
     * Num contrat.
     *
     * @var string
     */
    private $numContrat;

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
     * Partiel.
     *
     * @var bool
     */
    private $partiel;

    /**
     * Per reference au.
     *
     * @var DateTime|null
     */
    private $perReferenceAu;

    /**
     * Per reference cotisations.
     *
     * @var float
     */
    private $perReferenceCotisations;

    /**
     * Per reference du.
     *
     * @var DateTime|null
     */
    private $perReferenceDu;

    /**
     * Per reference montant.
     *
     * @var float
     */
    private $perReferenceMontant;

    /**
     * Per reference nb heures.
     *
     * @var float
     */
    private $perReferenceNbHeures;

    /**
     * Per reference salaires.
     *
     * @var float
     */
    private $perReferenceSalaires;

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
     * Prenom employe.
     *
     * @var string
     */
    private $prenomEmploye;

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * Reprise.
     *
     * @var DateTime|null
     */
    private $reprise;

    /**
     * Risque at.
     *
     * @var string
     */
    private $risqueAt;

    /**
     * Salaire mini.
     *
     * @var float
     */
    private $salaireMini;

    /**
     * Sexe.
     *
     * @var string
     */
    private $sexe;

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
     * Sub integral.
     *
     * @var bool
     */
    private $subIntegral;

    /**
     * Sub partiel.
     *
     * @var bool
     */
    private $subPartiel;

    /**
     * Subrogation duree max.
     *
     * @var string
     */
    private $subrogationDureeMax;

    /**
     * Subrogation montant.
     *
     * @var float
     */
    private $subrogationMontant;

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
     * Get the accident.
     *
     * @return bool Returns the accident.
     */
    public function getAccident() {
        return $this->accident;
    }

    /**
     * Get the accident mois embauche.
     *
     * @return bool Returns the accident mois embauche.
     */
    public function getAccidentMoisEmbauche() {
        return $this->accidentMoisEmbauche;
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
     * Get the adresse3.
     *
     * @return string Returns the adresse3.
     */
    public function getAdresse3() {
        return $this->adresse3;
    }

    /**
     * Get the anciennete.
     *
     * @return string Returns the anciennete.
     */
    public function getAnciennete() {
        return $this->anciennete;
    }

    /**
     * Get the autre vivtime.
     *
     * @return bool Returns the autre vivtime.
     */
    public function getAutreVivtime() {
        return $this->autreVivtime;
    }

    /**
     * Get the cas part.
     *
     * @return string Returns the cas part.
     */
    public function getCasPart() {
        return $this->casPart;
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
     * Get the date accident.
     *
     * @return DateTime|null Returns the date accident.
     */
    public function getDateAccident() {
        return $this->dateAccident;
    }

    /**
     * Get the date contrat.
     *
     * @return DateTime|null Returns the date contrat.
     */
    public function getDateContrat() {
        return $this->dateContrat;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the dern heure.
     *
     * @return DateTime|null Returns the dern heure.
     */
    public function getDernHeure() {
        return $this->dernHeure;
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
     * Get the embauche.
     *
     * @return DateTime|null Returns the embauche.
     */
    public function getEmbauche() {
        return $this->embauche;
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
     * Get the etbl a adresse1.
     *
     * @return string Returns the etbl a adresse1.
     */
    public function getEtblAAdresse1() {
        return $this->etblAAdresse1;
    }

    /**
     * Get the etbl a adresse2.
     *
     * @return string Returns the etbl a adresse2.
     */
    public function getEtblAAdresse2() {
        return $this->etblAAdresse2;
    }

    /**
     * Get the etbl a adresse3.
     *
     * @return string Returns the etbl a adresse3.
     */
    public function getEtblAAdresse3() {
        return $this->etblAAdresse3;
    }

    /**
     * Get the etbl a tel.
     *
     * @return string Returns the etbl a tel.
     */
    public function getEtblATel() {
        return $this->etblATel;
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
     * Get the etbl nature activite.
     *
     * @return string Returns the etbl nature activite.
     */
    public function getEtblNatureActivite() {
        return $this->etblNatureActivite;
    }

    /**
     * Get the etbl no adherent.
     *
     * @return string Returns the etbl no adherent.
     */
    public function getEtblNoAdherent() {
        return $this->etblNoAdherent;
    }

    /**
     * Get the etbl nom prenom.
     *
     * @return string Returns the etbl nom prenom.
     */
    public function getEtblNomPrenom() {
        return $this->etblNomPrenom;
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
     * Get the integral.
     *
     * @return bool Returns the integral.
     */
    public function getIntegral() {
        return $this->integral;
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
     * Get the lieu naissance.
     *
     * @return string Returns the lieu naissance.
     */
    public function getLieuNaissance() {
        return $this->lieuNaissance;
    }

    /**
     * Get the maintien.
     *
     * @return bool Returns the maintien.
     */
    public function getMaintien() {
        return $this->maintien;
    }

    /**
     * Get the maladie pro.
     *
     * @return bool Returns the maladie pro.
     */
    public function getMaladiePro() {
        return $this->maladiePro;
    }

    /**
     * Get the medecin.
     *
     * @return string Returns the medecin.
     */
    public function getMedecin() {
        return $this->medecin;
    }

    /**
     * Get the montant cotis theo.
     *
     * @return float Returns the montant cotis theo.
     */
    public function getMontantCotisTheo() {
        return $this->montantCotisTheo;
    }

    /**
     * Get the montant sal theo.
     *
     * @return float Returns the montant sal theo.
     */
    public function getMontantSalTheo() {
        return $this->montantSalTheo;
    }

    /**
     * Get the nationalite autre.
     *
     * @return bool Returns the nationalite autre.
     */
    public function getNationaliteAutre() {
        return $this->nationaliteAutre;
    }

    /**
     * Get the nationalite cee.
     *
     * @return bool Returns the nationalite cee.
     */
    public function getNationaliteCee() {
        return $this->nationaliteCee;
    }

    /**
     * Get the nationalite fr.
     *
     * @return bool Returns the nationalite fr.
     */
    public function getNationaliteFr() {
        return $this->nationaliteFr;
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
     * Get the num contrat.
     *
     * @return string Returns the num contrat.
     */
    public function getNumContrat() {
        return $this->numContrat;
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
     * Get the partiel.
     *
     * @return bool Returns the partiel.
     */
    public function getPartiel() {
        return $this->partiel;
    }

    /**
     * Get the per reference au.
     *
     * @return DateTime|null Returns the per reference au.
     */
    public function getPerReferenceAu() {
        return $this->perReferenceAu;
    }

    /**
     * Get the per reference cotisations.
     *
     * @return float Returns the per reference cotisations.
     */
    public function getPerReferenceCotisations() {
        return $this->perReferenceCotisations;
    }

    /**
     * Get the per reference du.
     *
     * @return DateTime|null Returns the per reference du.
     */
    public function getPerReferenceDu() {
        return $this->perReferenceDu;
    }

    /**
     * Get the per reference montant.
     *
     * @return float Returns the per reference montant.
     */
    public function getPerReferenceMontant() {
        return $this->perReferenceMontant;
    }

    /**
     * Get the per reference nb heures.
     *
     * @return float Returns the per reference nb heures.
     */
    public function getPerReferenceNbHeures() {
        return $this->perReferenceNbHeures;
    }

    /**
     * Get the per reference salaires.
     *
     * @return float Returns the per reference salaires.
     */
    public function getPerReferenceSalaires() {
        return $this->perReferenceSalaires;
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
     * Get the prenom employe.
     *
     * @return string Returns the prenom employe.
     */
    public function getPrenomEmploye() {
        return $this->prenomEmploye;
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
     * Get the reprise.
     *
     * @return DateTime|null Returns the reprise.
     */
    public function getReprise() {
        return $this->reprise;
    }

    /**
     * Get the risque at.
     *
     * @return string Returns the risque at.
     */
    public function getRisqueAt() {
        return $this->risqueAt;
    }

    /**
     * Get the salaire mini.
     *
     * @return float Returns the salaire mini.
     */
    public function getSalaireMini() {
        return $this->salaireMini;
    }

    /**
     * Get the sexe.
     *
     * @return string Returns the sexe.
     */
    public function getSexe() {
        return $this->sexe;
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
     * Get the sub integral.
     *
     * @return bool Returns the sub integral.
     */
    public function getSubIntegral() {
        return $this->subIntegral;
    }

    /**
     * Get the sub partiel.
     *
     * @return bool Returns the sub partiel.
     */
    public function getSubPartiel() {
        return $this->subPartiel;
    }

    /**
     * Get the subrogation duree max.
     *
     * @return string Returns the subrogation duree max.
     */
    public function getSubrogationDureeMax() {
        return $this->subrogationDureeMax;
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
     * Get the type attestation.
     *
     * @return string Returns the type attestation.
     */
    public function getTypeAttestation() {
        return $this->typeAttestation;
    }

    /**
     * Set the accident.
     *
     * @param bool $accident The accident.
     */
    public function setAccident($accident) {
        $this->accident = $accident;
        return $this;
    }

    /**
     * Set the accident mois embauche.
     *
     * @param bool $accidentMoisEmbauche The accident mois embauche.
     */
    public function setAccidentMoisEmbauche($accidentMoisEmbauche) {
        $this->accidentMoisEmbauche = $accidentMoisEmbauche;
        return $this;
    }

    /**
     * Set the adresse1.
     *
     * @param string $adresse1 The adresse1.
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string $adresse3 The adresse3.
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the anciennete.
     *
     * @param string $anciennete The anciennete.
     */
    public function setAnciennete($anciennete) {
        $this->anciennete = $anciennete;
        return $this;
    }

    /**
     * Set the autre vivtime.
     *
     * @param bool $autreVivtime The autre vivtime.
     */
    public function setAutreVivtime($autreVivtime) {
        $this->autreVivtime = $autreVivtime;
        return $this;
    }

    /**
     * Set the cas part.
     *
     * @param string $casPart The cas part.
     */
    public function setCasPart($casPart) {
        $this->casPart = $casPart;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date accident.
     *
     * @param DateTime|null $dateAccident The date accident.
     */
    public function setDateAccident(DateTime $dateAccident = null) {
        $this->dateAccident = $dateAccident;
        return $this;
    }

    /**
     * Set the date contrat.
     *
     * @param DateTime|null $dateContrat The date contrat.
     */
    public function setDateContrat(DateTime $dateContrat = null) {
        $this->dateContrat = $dateContrat;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the dern heure.
     *
     * @param DateTime|null $dernHeure The dern heure.
     */
    public function setDernHeure(DateTime $dernHeure = null) {
        $this->dernHeure = $dernHeure;
        return $this;
    }

    /**
     * Set the dern j.
     *
     * @param DateTime|null $dernJ The dern j.
     */
    public function setDernJ(DateTime $dernJ = null) {
        $this->dernJ = $dernJ;
        return $this;
    }

    /**
     * Set the embauche.
     *
     * @param DateTime|null $embauche The embauche.
     */
    public function setEmbauche(DateTime $embauche = null) {
        $this->embauche = $embauche;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl a adresse1.
     *
     * @param string $etblAAdresse1 The etbl a adresse1.
     */
    public function setEtblAAdresse1($etblAAdresse1) {
        $this->etblAAdresse1 = $etblAAdresse1;
        return $this;
    }

    /**
     * Set the etbl a adresse2.
     *
     * @param string $etblAAdresse2 The etbl a adresse2.
     */
    public function setEtblAAdresse2($etblAAdresse2) {
        $this->etblAAdresse2 = $etblAAdresse2;
        return $this;
    }

    /**
     * Set the etbl a adresse3.
     *
     * @param string $etblAAdresse3 The etbl a adresse3.
     */
    public function setEtblAAdresse3($etblAAdresse3) {
        $this->etblAAdresse3 = $etblAAdresse3;
        return $this;
    }

    /**
     * Set the etbl a tel.
     *
     * @param string $etblATel The etbl a tel.
     */
    public function setEtblATel($etblATel) {
        $this->etblATel = $etblATel;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string $etblAdresse1 The etbl adresse1.
     */
    public function setEtblAdresse1($etblAdresse1) {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string $etblAdresse2 The etbl adresse2.
     */
    public function setEtblAdresse2($etblAdresse2) {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl adresse3.
     *
     * @param string $etblAdresse3 The etbl adresse3.
     */
    public function setEtblAdresse3($etblAdresse3) {
        $this->etblAdresse3 = $etblAdresse3;
        return $this;
    }

    /**
     * Set the etbl nature activite.
     *
     * @param string $etblNatureActivite The etbl nature activite.
     */
    public function setEtblNatureActivite($etblNatureActivite) {
        $this->etblNatureActivite = $etblNatureActivite;
        return $this;
    }

    /**
     * Set the etbl no adherent.
     *
     * @param string $etblNoAdherent The etbl no adherent.
     */
    public function setEtblNoAdherent($etblNoAdherent) {
        $this->etblNoAdherent = $etblNoAdherent;
        return $this;
    }

    /**
     * Set the etbl nom prenom.
     *
     * @param string $etblNomPrenom The etbl nom prenom.
     */
    public function setEtblNomPrenom($etblNomPrenom) {
        $this->etblNomPrenom = $etblNomPrenom;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string $etblRaisonSociale The etbl raison sociale.
     */
    public function setEtblRaisonSociale($etblRaisonSociale) {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the integral.
     *
     * @param bool $integral The integral.
     */
    public function setIntegral($integral) {
        $this->integral = $integral;
        return $this;
    }

    /**
     * Set the intitule compte.
     *
     * @param string $intituleCompte The intitule compte.
     */
    public function setIntituleCompte($intituleCompte) {
        $this->intituleCompte = $intituleCompte;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lieu naissance.
     *
     * @param string $lieuNaissance The lieu naissance.
     */
    public function setLieuNaissance($lieuNaissance) {
        $this->lieuNaissance = $lieuNaissance;
        return $this;
    }

    /**
     * Set the maintien.
     *
     * @param bool $maintien The maintien.
     */
    public function setMaintien($maintien) {
        $this->maintien = $maintien;
        return $this;
    }

    /**
     * Set the maladie pro.
     *
     * @param bool $maladiePro The maladie pro.
     */
    public function setMaladiePro($maladiePro) {
        $this->maladiePro = $maladiePro;
        return $this;
    }

    /**
     * Set the medecin.
     *
     * @param string $medecin The medecin.
     */
    public function setMedecin($medecin) {
        $this->medecin = $medecin;
        return $this;
    }

    /**
     * Set the montant cotis theo.
     *
     * @param float $montantCotisTheo The montant cotis theo.
     */
    public function setMontantCotisTheo($montantCotisTheo) {
        $this->montantCotisTheo = $montantCotisTheo;
        return $this;
    }

    /**
     * Set the montant sal theo.
     *
     * @param float $montantSalTheo The montant sal theo.
     */
    public function setMontantSalTheo($montantSalTheo) {
        $this->montantSalTheo = $montantSalTheo;
        return $this;
    }

    /**
     * Set the nationalite autre.
     *
     * @param bool $nationaliteAutre The nationalite autre.
     */
    public function setNationaliteAutre($nationaliteAutre) {
        $this->nationaliteAutre = $nationaliteAutre;
        return $this;
    }

    /**
     * Set the nationalite cee.
     *
     * @param bool $nationaliteCee The nationalite cee.
     */
    public function setNationaliteCee($nationaliteCee) {
        $this->nationaliteCee = $nationaliteCee;
        return $this;
    }

    /**
     * Set the nationalite fr.
     *
     * @param bool $nationaliteFr The nationalite fr.
     */
    public function setNationaliteFr($nationaliteFr) {
        $this->nationaliteFr = $nationaliteFr;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string $nir The nir.
     */
    public function setNir($nir) {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the non repris.
     *
     * @param bool $nonRepris The non repris.
     */
    public function setNonRepris($nonRepris) {
        $this->nonRepris = $nonRepris;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string $numContrat The num contrat.
     */
    public function setNumContrat($numContrat) {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the partiel.
     *
     * @param bool $partiel The partiel.
     */
    public function setPartiel($partiel) {
        $this->partiel = $partiel;
        return $this;
    }

    /**
     * Set the per reference au.
     *
     * @param DateTime|null $perReferenceAu The per reference au.
     */
    public function setPerReferenceAu(DateTime $perReferenceAu = null) {
        $this->perReferenceAu = $perReferenceAu;
        return $this;
    }

    /**
     * Set the per reference cotisations.
     *
     * @param float $perReferenceCotisations The per reference cotisations.
     */
    public function setPerReferenceCotisations($perReferenceCotisations) {
        $this->perReferenceCotisations = $perReferenceCotisations;
        return $this;
    }

    /**
     * Set the per reference du.
     *
     * @param DateTime|null $perReferenceDu The per reference du.
     */
    public function setPerReferenceDu(DateTime $perReferenceDu = null) {
        $this->perReferenceDu = $perReferenceDu;
        return $this;
    }

    /**
     * Set the per reference montant.
     *
     * @param float $perReferenceMontant The per reference montant.
     */
    public function setPerReferenceMontant($perReferenceMontant) {
        $this->perReferenceMontant = $perReferenceMontant;
        return $this;
    }

    /**
     * Set the per reference nb heures.
     *
     * @param float $perReferenceNbHeures The per reference nb heures.
     */
    public function setPerReferenceNbHeures($perReferenceNbHeures) {
        $this->perReferenceNbHeures = $perReferenceNbHeures;
        return $this;
    }

    /**
     * Set the per reference salaires.
     *
     * @param float $perReferenceSalaires The per reference salaires.
     */
    public function setPerReferenceSalaires($perReferenceSalaires) {
        $this->perReferenceSalaires = $perReferenceSalaires;
        return $this;
    }

    /**
     * Set the periode subr au.
     *
     * @param DateTime|null $periodeSubrAu The periode subr au.
     */
    public function setPeriodeSubrAu(DateTime $periodeSubrAu = null) {
        $this->periodeSubrAu = $periodeSubrAu;
        return $this;
    }

    /**
     * Set the periode subr du.
     *
     * @param DateTime|null $periodeSubrDu The periode subr du.
     */
    public function setPeriodeSubrDu(DateTime $periodeSubrDu = null) {
        $this->periodeSubrDu = $periodeSubrDu;
        return $this;
    }

    /**
     * Set the prenom employe.
     *
     * @param string $prenomEmploye The prenom employe.
     */
    public function setPrenomEmploye($prenomEmploye) {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Set the reprise.
     *
     * @param DateTime|null $reprise The reprise.
     */
    public function setReprise(DateTime $reprise = null) {
        $this->reprise = $reprise;
        return $this;
    }

    /**
     * Set the risque at.
     *
     * @param string $risqueAt The risque at.
     */
    public function setRisqueAt($risqueAt) {
        $this->risqueAt = $risqueAt;
        return $this;
    }

    /**
     * Set the salaire mini.
     *
     * @param float $salaireMini The salaire mini.
     */
    public function setSalaireMini($salaireMini) {
        $this->salaireMini = $salaireMini;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string $sexe The sexe.
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime|null $signatureDate The signature date.
     */
    public function setSignatureDate(DateTime $signatureDate = null) {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string $signatureNom The signature nom.
     */
    public function setSignatureNom($signatureNom) {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string $signatureQualite The signature qualite.
     */
    public function setSignatureQualite($signatureQualite) {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string $signatureVille The signature ville.
     */
    public function setSignatureVille($signatureVille) {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string $siret The siret.
     */
    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the sub integral.
     *
     * @param bool $subIntegral The sub integral.
     */
    public function setSubIntegral($subIntegral) {
        $this->subIntegral = $subIntegral;
        return $this;
    }

    /**
     * Set the sub partiel.
     *
     * @param bool $subPartiel The sub partiel.
     */
    public function setSubPartiel($subPartiel) {
        $this->subPartiel = $subPartiel;
        return $this;
    }

    /**
     * Set the subrogation duree max.
     *
     * @param string $subrogationDureeMax The subrogation duree max.
     */
    public function setSubrogationDureeMax($subrogationDureeMax) {
        $this->subrogationDureeMax = $subrogationDureeMax;
        return $this;
    }

    /**
     * Set the subrogation montant.
     *
     * @param float $subrogationMontant The subrogation montant.
     */
    public function setSubrogationMontant($subrogationMontant) {
        $this->subrogationMontant = $subrogationMontant;
        return $this;
    }

    /**
     * Set the type attestation.
     *
     * @param string $typeAttestation The type attestation.
     */
    public function setTypeAttestation($typeAttestation) {
        $this->typeAttestation = $typeAttestation;
        return $this;
    }
}
