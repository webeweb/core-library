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
 * Conges spectacles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CongesSpectacles {

    /**
     * Base conges.
     *
     * @var float
     */
    private $baseConges;

    /**
     * Brut.
     *
     * @var float
     */
    private $brut;

    /**
     * Ce initial.
     *
     * @var bool
     */
    private $ceInitial;

    /**
     * Code emploi.
     *
     * @var string
     */
    private $codeEmploi;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Contact.
     *
     * @var string
     */
    private $contact;

    /**
     * Contrat en cours.
     *
     * @var bool
     */
    private $contratEnCours;

    /**
     * Date certificat emploi.
     *
     * @var DateTime|null
     */
    private $dateCertificatEmploi;

    /**
     * Date embauche.
     *
     * @var DateTime|null
     */
    private $dateEmbauche;

    /**
     * Date fin contrat.
     *
     * @var DateTime|null
     */
    private $dateFinContrat;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date paiement.
     *
     * @var DateTime|null
     */
    private $datePaiement;

    /**
     * Debut periode attest.
     *
     * @var DateTime|null
     */
    private $debutPeriodeAttest;

    /**
     * Dept naissance.
     *
     * @var string
     */
    private $deptNaissance;

    /**
     * Disquette.
     *
     * @var bool
     */
    private $disquette;

    /**
     * Edite.
     *
     * @var bool
     */
    private $edite;

    /**
     * Emp adresse1.
     *
     * @var string
     */
    private $empAdresse1;

    /**
     * Emp adresse2.
     *
     * @var string
     */
    private $empAdresse2;

    /**
     * Emp code postal.
     *
     * @var string
     */
    private $empCodePostal;

    /**
     * Emp commune.
     *
     * @var string
     */
    private $empCommune;

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
     * Etbl code postal.
     *
     * @var string
     */
    private $etblCodePostal;

    /**
     * Etbl commune.
     *
     * @var string
     */
    private $etblCommune;

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
     * Indice ce.
     *
     * @var int
     */
    private $indiceCe;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Lieu certificat emploi.
     *
     * @var string
     */
    private $lieuCertificatEmploi;

    /**
     * Lieu naissance.
     *
     * @var string
     */
    private $lieuNaissance;

    /**
     * Nb jour trav.
     *
     * @var float
     */
    private $nbJourTrav;

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
     * Nom naissance.
     *
     * @var string
     */
    private $nomNaissance;

    /**
     * Nombre cachets.
     *
     * @var float
     */
    private $nombreCachets;

    /**
     * Nouvelle attest.
     *
     * @var bool
     */
    private $nouvelleAttest;

    /**
     * Num caisse spectacle.
     *
     * @var string
     */
    private $numCaisseSpectacle;

    /**
     * Numero attestation.
     *
     * @var string
     */
    private $numeroAttestation;

    /**
     * Numero ce initial.
     *
     * @var string
     */
    private $numeroCeInitial;

    /**
     * Numero conges spectacle.
     *
     * @var string
     */
    private $numeroCongesSpectacle;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Observations.
     *
     * @var string
     */
    private $observations;

    /**
     * Periode attest.
     *
     * @var DateTime|null
     */
    private $periodeAttest;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Pseudonyme.
     *
     * @var string
     */
    private $pseudonyme;

    /**
     * Sexe.
     *
     * @var string
     */
    private $sexe;

    /**
     * Signataire certificat emploi.
     *
     * @var string
     */
    private $signataireCertificatEmploi;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Statut cadre.
     *
     * @var bool
     */
    private $statutCadre;

    /**
     * Tel contact.
     *
     * @var string
     */
    private $telContact;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Type ce.
     *
     * @var string
     */
    private $typeCe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the base conges.
     *
     * @return float Returns the base conges.
     */
    public function getBaseConges() {
        return $this->baseConges;
    }

    /**
     * Get the brut.
     *
     * @return float Returns the brut.
     */
    public function getBrut() {
        return $this->brut;
    }

    /**
     * Get the ce initial.
     *
     * @return bool Returns the ce initial.
     */
    public function getCeInitial() {
        return $this->ceInitial;
    }

    /**
     * Get the code emploi.
     *
     * @return string Returns the code emploi.
     */
    public function getCodeEmploi() {
        return $this->codeEmploi;
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
     * Get the contact.
     *
     * @return string Returns the contact.
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Get the contrat en cours.
     *
     * @return bool Returns the contrat en cours.
     */
    public function getContratEnCours() {
        return $this->contratEnCours;
    }

    /**
     * Get the date certificat emploi.
     *
     * @return DateTime|null Returns the date certificat emploi.
     */
    public function getDateCertificatEmploi() {
        return $this->dateCertificatEmploi;
    }

    /**
     * Get the date embauche.
     *
     * @return DateTime|null Returns the date embauche.
     */
    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime|null Returns the date fin contrat.
     */
    public function getDateFinContrat() {
        return $this->dateFinContrat;
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
     * Get the date paiement.
     *
     * @return DateTime|null Returns the date paiement.
     */
    public function getDatePaiement() {
        return $this->datePaiement;
    }

    /**
     * Get the debut periode attest.
     *
     * @return DateTime|null Returns the debut periode attest.
     */
    public function getDebutPeriodeAttest() {
        return $this->debutPeriodeAttest;
    }

    /**
     * Get the dept naissance.
     *
     * @return string Returns the dept naissance.
     */
    public function getDeptNaissance() {
        return $this->deptNaissance;
    }

    /**
     * Get the disquette.
     *
     * @return bool Returns the disquette.
     */
    public function getDisquette() {
        return $this->disquette;
    }

    /**
     * Get the edite.
     *
     * @return bool Returns the edite.
     */
    public function getEdite() {
        return $this->edite;
    }

    /**
     * Get the emp adresse1.
     *
     * @return string Returns the emp adresse1.
     */
    public function getEmpAdresse1() {
        return $this->empAdresse1;
    }

    /**
     * Get the emp adresse2.
     *
     * @return string Returns the emp adresse2.
     */
    public function getEmpAdresse2() {
        return $this->empAdresse2;
    }

    /**
     * Get the emp code postal.
     *
     * @return string Returns the emp code postal.
     */
    public function getEmpCodePostal() {
        return $this->empCodePostal;
    }

    /**
     * Get the emp commune.
     *
     * @return string Returns the emp commune.
     */
    public function getEmpCommune() {
        return $this->empCommune;
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
     * Get the etbl code postal.
     *
     * @return string Returns the etbl code postal.
     */
    public function getEtblCodePostal() {
        return $this->etblCodePostal;
    }

    /**
     * Get the etbl commune.
     *
     * @return string Returns the etbl commune.
     */
    public function getEtblCommune() {
        return $this->etblCommune;
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
     * Get the indice ce.
     *
     * @return int Returns the indice ce.
     */
    public function getIndiceCe() {
        return $this->indiceCe;
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
     * Get the lieu certificat emploi.
     *
     * @return string Returns the lieu certificat emploi.
     */
    public function getLieuCertificatEmploi() {
        return $this->lieuCertificatEmploi;
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
     * Get the nb jour trav.
     *
     * @return float Returns the nb jour trav.
     */
    public function getNbJourTrav() {
        return $this->nbJourTrav;
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
     * Get the nom naissance.
     *
     * @return string Returns the nom naissance.
     */
    public function getNomNaissance() {
        return $this->nomNaissance;
    }

    /**
     * Get the nombre cachets.
     *
     * @return float Returns the nombre cachets.
     */
    public function getNombreCachets() {
        return $this->nombreCachets;
    }

    /**
     * Get the nouvelle attest.
     *
     * @return bool Returns the nouvelle attest.
     */
    public function getNouvelleAttest() {
        return $this->nouvelleAttest;
    }

    /**
     * Get the num caisse spectacle.
     *
     * @return string Returns the num caisse spectacle.
     */
    public function getNumCaisseSpectacle() {
        return $this->numCaisseSpectacle;
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
     * Get the numero ce initial.
     *
     * @return string Returns the numero ce initial.
     */
    public function getNumeroCeInitial() {
        return $this->numeroCeInitial;
    }

    /**
     * Get the numero conges spectacle.
     *
     * @return string Returns the numero conges spectacle.
     */
    public function getNumeroCongesSpectacle() {
        return $this->numeroCongesSpectacle;
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
     * Get the observations.
     *
     * @return string Returns the observations.
     */
    public function getObservations() {
        return $this->observations;
    }

    /**
     * Get the periode attest.
     *
     * @return DateTime|null Returns the periode attest.
     */
    public function getPeriodeAttest() {
        return $this->periodeAttest;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the pseudonyme.
     *
     * @return string Returns the pseudonyme.
     */
    public function getPseudonyme() {
        return $this->pseudonyme;
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
     * Get the signataire certificat emploi.
     *
     * @return string Returns the signataire certificat emploi.
     */
    public function getSignataireCertificatEmploi() {
        return $this->signataireCertificatEmploi;
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
     * Get the statut cadre.
     *
     * @return bool Returns the statut cadre.
     */
    public function getStatutCadre() {
        return $this->statutCadre;
    }

    /**
     * Get the tel contact.
     *
     * @return string Returns the tel contact.
     */
    public function getTelContact() {
        return $this->telContact;
    }

    /**
     * Get the titre.
     *
     * @return string Returns the titre.
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Get the type ce.
     *
     * @return string Returns the type ce.
     */
    public function getTypeCe() {
        return $this->typeCe;
    }

    /**
     * Set the base conges.
     *
     * @param float $baseConges The base conges.
     */
    public function setBaseConges($baseConges) {
        $this->baseConges = $baseConges;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float $brut The brut.
     */
    public function setBrut($brut) {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the ce initial.
     *
     * @param bool $ceInitial The ce initial.
     */
    public function setCeInitial($ceInitial) {
        $this->ceInitial = $ceInitial;
        return $this;
    }

    /**
     * Set the code emploi.
     *
     * @param string $codeEmploi The code emploi.
     */
    public function setCodeEmploi($codeEmploi) {
        $this->codeEmploi = $codeEmploi;
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
     * Set the contact.
     *
     * @param string $contact The contact.
     */
    public function setContact($contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Set the contrat en cours.
     *
     * @param bool $contratEnCours The contrat en cours.
     */
    public function setContratEnCours($contratEnCours) {
        $this->contratEnCours = $contratEnCours;
        return $this;
    }

    /**
     * Set the date certificat emploi.
     *
     * @param DateTime|null $dateCertificatEmploi The date certificat emploi.
     */
    public function setDateCertificatEmploi(DateTime $dateCertificatEmploi = null) {
        $this->dateCertificatEmploi = $dateCertificatEmploi;
        return $this;
    }

    /**
     * Set the date embauche.
     *
     * @param DateTime|null $dateEmbauche The date embauche.
     */
    public function setDateEmbauche(DateTime $dateEmbauche = null) {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime|null $dateFinContrat The date fin contrat.
     */
    public function setDateFinContrat(DateTime $dateFinContrat = null) {
        $this->dateFinContrat = $dateFinContrat;
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
     * Set the date paiement.
     *
     * @param DateTime|null $datePaiement The date paiement.
     */
    public function setDatePaiement(DateTime $datePaiement = null) {
        $this->datePaiement = $datePaiement;
        return $this;
    }

    /**
     * Set the debut periode attest.
     *
     * @param DateTime|null $debutPeriodeAttest The debut periode attest.
     */
    public function setDebutPeriodeAttest(DateTime $debutPeriodeAttest = null) {
        $this->debutPeriodeAttest = $debutPeriodeAttest;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string $deptNaissance The dept naissance.
     */
    public function setDeptNaissance($deptNaissance) {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the disquette.
     *
     * @param bool $disquette The disquette.
     */
    public function setDisquette($disquette) {
        $this->disquette = $disquette;
        return $this;
    }

    /**
     * Set the edite.
     *
     * @param bool $edite The edite.
     */
    public function setEdite($edite) {
        $this->edite = $edite;
        return $this;
    }

    /**
     * Set the emp adresse1.
     *
     * @param string $empAdresse1 The emp adresse1.
     */
    public function setEmpAdresse1($empAdresse1) {
        $this->empAdresse1 = $empAdresse1;
        return $this;
    }

    /**
     * Set the emp adresse2.
     *
     * @param string $empAdresse2 The emp adresse2.
     */
    public function setEmpAdresse2($empAdresse2) {
        $this->empAdresse2 = $empAdresse2;
        return $this;
    }

    /**
     * Set the emp code postal.
     *
     * @param string $empCodePostal The emp code postal.
     */
    public function setEmpCodePostal($empCodePostal) {
        $this->empCodePostal = $empCodePostal;
        return $this;
    }

    /**
     * Set the emp commune.
     *
     * @param string $empCommune The emp commune.
     */
    public function setEmpCommune($empCommune) {
        $this->empCommune = $empCommune;
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
     * Set the etbl code postal.
     *
     * @param string $etblCodePostal The etbl code postal.
     */
    public function setEtblCodePostal($etblCodePostal) {
        $this->etblCodePostal = $etblCodePostal;
        return $this;
    }

    /**
     * Set the etbl commune.
     *
     * @param string $etblCommune The etbl commune.
     */
    public function setEtblCommune($etblCommune) {
        $this->etblCommune = $etblCommune;
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
     * Set the indice ce.
     *
     * @param int $indiceCe The indice ce.
     */
    public function setIndiceCe($indiceCe) {
        $this->indiceCe = $indiceCe;
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
     * Set the lieu certificat emploi.
     *
     * @param string $lieuCertificatEmploi The lieu certificat emploi.
     */
    public function setLieuCertificatEmploi($lieuCertificatEmploi) {
        $this->lieuCertificatEmploi = $lieuCertificatEmploi;
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
     * Set the nb jour trav.
     *
     * @param float $nbJourTrav The nb jour trav.
     */
    public function setNbJourTrav($nbJourTrav) {
        $this->nbJourTrav = $nbJourTrav;
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
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nombre cachets.
     *
     * @param float $nombreCachets The nombre cachets.
     */
    public function setNombreCachets($nombreCachets) {
        $this->nombreCachets = $nombreCachets;
        return $this;
    }

    /**
     * Set the nouvelle attest.
     *
     * @param bool $nouvelleAttest The nouvelle attest.
     */
    public function setNouvelleAttest($nouvelleAttest) {
        $this->nouvelleAttest = $nouvelleAttest;
        return $this;
    }

    /**
     * Set the num caisse spectacle.
     *
     * @param string $numCaisseSpectacle The num caisse spectacle.
     */
    public function setNumCaisseSpectacle($numCaisseSpectacle) {
        $this->numCaisseSpectacle = $numCaisseSpectacle;
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
     * Set the numero ce initial.
     *
     * @param string $numeroCeInitial The numero ce initial.
     */
    public function setNumeroCeInitial($numeroCeInitial) {
        $this->numeroCeInitial = $numeroCeInitial;
        return $this;
    }

    /**
     * Set the numero conges spectacle.
     *
     * @param string $numeroCongesSpectacle The numero conges spectacle.
     */
    public function setNumeroCongesSpectacle($numeroCongesSpectacle) {
        $this->numeroCongesSpectacle = $numeroCongesSpectacle;
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
     * Set the observations.
     *
     * @param string $observations The observations.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the periode attest.
     *
     * @param DateTime|null $periodeAttest The periode attest.
     */
    public function setPeriodeAttest(DateTime $periodeAttest = null) {
        $this->periodeAttest = $periodeAttest;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the pseudonyme.
     *
     * @param string $pseudonyme The pseudonyme.
     */
    public function setPseudonyme($pseudonyme) {
        $this->pseudonyme = $pseudonyme;
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
     * Set the signataire certificat emploi.
     *
     * @param string $signataireCertificatEmploi The signataire certificat emploi.
     */
    public function setSignataireCertificatEmploi($signataireCertificatEmploi) {
        $this->signataireCertificatEmploi = $signataireCertificatEmploi;
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
     * Set the statut cadre.
     *
     * @param bool $statutCadre The statut cadre.
     */
    public function setStatutCadre($statutCadre) {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string $telContact The tel contact.
     */
    public function setTelContact($telContact) {
        $this->telContact = $telContact;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the type ce.
     *
     * @param string $typeCe The type ce.
     */
    public function setTypeCe($typeCe) {
        $this->typeCe = $typeCe;
        return $this;
    }
}
