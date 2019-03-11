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
 * Attestation a e m model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAEM {

    /**
     * A e m initiale.
     *
     * @var bool
     */
    private $aEMInitiale;

    /**
     * Activite.
     *
     * @var string
     */
    private $activite;

    /**
     * Autres contributions.
     *
     * @var float
     */
    private $autresContributions;

    /**
     * Autres remun brut.
     *
     * @var float
     */
    private $autresRemunBrut;

    /**
     * Autres taux cotis.
     *
     * @var float
     */
    private $autresTauxCotis;

    /**
     * Brut.
     *
     * @var float
     */
    private $brut;

    /**
     * Brutal.
     *
     * @var float
     */
    private $brutal;

    /**
     * Certification sociale.
     *
     * @var bool
     */
    private $certificationSociale;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

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
     * Code n a f2008.
     *
     * @var string
     */
    private $codeNAF2008;

    /**
     * Code qualif.
     *
     * @var string
     */
    private $codeQualif;

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
     * Contributions.
     *
     * @var float
     */
    private $contributions;

    /**
     * Date embauche.
     *
     * @var DateTime
     */
    private $dateEmbauche;

    /**
     * Date fin contrat.
     *
     * @var DateTime
     */
    private $dateFinContrat;

    /**
     * Date fin contrat initiale.
     *
     * @var DateTime
     */
    private $dateFinContratInitiale;

    /**
     * Date naiss.
     *
     * @var DateTime
     */
    private $dateNaiss;

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
     * Emp tel.
     *
     * @var string
     */
    private $empTel;

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
     * Etbl fax.
     *
     * @var string
     */
    private $etblFax;

    /**
     * Etbl mail.
     *
     * @var string
     */
    private $etblMail;

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
     * Indice a e m.
     *
     * @var int
     */
    private $indiceAEM;

    /**
     * Label prestataire.
     *
     * @var bool
     */
    private $labelPrestataire;

    /**
     * Licence spectacle.
     *
     * @var bool
     */
    private $licenceSpectacle;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Lien parente.
     *
     * @var bool
     */
    private $lienParente;

    /**
     * Motif fin contrat.
     *
     * @var string
     */
    private $motifFinContrat;

    /**
     * Motif rupture.
     *
     * @var string
     */
    private $motifRupture;

    /**
     * N a f.
     *
     * @var string
     */
    private $nAF;

    /**
     * N i r.
     *
     * @var string
     */
    private $nIR;

    /**
     * Nb jour trav.
     *
     * @var float
     */
    private $nbJourTrav;

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
     * Nom retraite.
     *
     * @var string
     */
    private $nomRetraite;

    /**
     * Nombre cachets.
     *
     * @var float
     */
    private $nombreCachets;

    /**
     * Nombre cachets isoles.
     *
     * @var float
     */
    private $nombreCachetsIsoles;

    /**
     * Nombre heures.
     *
     * @var float
     */
    private $nombreHeures;

    /**
     * Num assedic.
     *
     * @var string
     */
    private $numAssedic;

    /**
     * Num caisse spectacle.
     *
     * @var string
     */
    private $numCaisseSpectacle;

    /**
     * Num certification sociale.
     *
     * @var string
     */
    private $numCertificationSociale;

    /**
     * Num i d c c employeur.
     *
     * @var string
     */
    private $numIDCCEmployeur;

    /**
     * Num i d c c prestation travail.
     *
     * @var string
     */
    private $numIDCCPrestationTravail;

    /**
     * Num objet.
     *
     * @var string
     */
    private $numObjet;

    /**
     * Numero a e m initiale.
     *
     * @var string
     */
    private $numeroAEMInitiale;

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
     * Numero label.
     *
     * @var string
     */
    private $numeroLabel;

    /**
     * Numero licence.
     *
     * @var string
     */
    private $numeroLicence;

    /**
     * Organisateur spectacle.
     *
     * @var bool
     */
    private $organisateurSpectacle;

    /**
     * Organisme assedic.
     *
     * @var string
     */
    private $organismeAssedic;

    /**
     * Organisme retraite.
     *
     * @var string
     */
    private $organismeRetraite;

    /**
     * Periode attest.
     *
     * @var DateTime
     */
    private $periodeAttest;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * S i r e t.
     *
     * @var string
     */
    private $sIRET;

    /**
     * Signature date.
     *
     * @var DateTime
     */
    private $signatureDate;

    /**
     * Signature nom.
     *
     * @var string
     */
    private $signatureNom;

    /**
     * Signature prenom.
     *
     * @var string
     */
    private $signaturePrenom;

    /**
     * Signature qualite.
     *
     * @var string
     */
    private $signatureQualite;

    /**
     * Signature qualite code.
     *
     * @var string
     */
    private $signatureQualiteCode;

    /**
     * Signature ville.
     *
     * @var string
     */
    private $signatureVille;

    /**
     * Statut cadre.
     *
     * @var bool
     */
    private $statutCadre;

    /**
     * Taux cotis.
     *
     * @var float
     */
    private $tauxCotis;

    /**
     * Tel contact.
     *
     * @var string
     */
    private $telContact;

    /**
     * Type a e m.
     *
     * @var string
     */
    private $typeAEM;

    /**
     * Type lien parente.
     *
     * @var string
     */
    private $typeLienParente;

    /**
     * Type nationalite.
     *
     * @var string
     */
    private $typeNationalite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a e m initiale.
     *
     * @return bool Returns the a e m initiale.
     */
    public function getAEMInitiale() {
        return $this->aEMInitiale;
    }

    /**
     * Get the activite.
     *
     * @return string Returns the activite.
     */
    public function getActivite() {
        return $this->activite;
    }

    /**
     * Get the autres contributions.
     *
     * @return float Returns the autres contributions.
     */
    public function getAutresContributions() {
        return $this->autresContributions;
    }

    /**
     * Get the autres remun brut.
     *
     * @return float Returns the autres remun brut.
     */
    public function getAutresRemunBrut() {
        return $this->autresRemunBrut;
    }

    /**
     * Get the autres taux cotis.
     *
     * @return float Returns the autres taux cotis.
     */
    public function getAutresTauxCotis() {
        return $this->autresTauxCotis;
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
     * Get the brutal.
     *
     * @return float Returns the brutal.
     */
    public function getBrutal() {
        return $this->brutal;
    }

    /**
     * Get the certification sociale.
     *
     * @return bool Returns the certification sociale.
     */
    public function getCertificationSociale() {
        return $this->certificationSociale;
    }

    /**
     * Get the civilite.
     *
     * @return string Returns the civilite.
     */
    public function getCivilite() {
        return $this->civilite;
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
     * Get the code n a f2008.
     *
     * @return string Returns the code n a f2008.
     */
    public function getCodeNAF2008() {
        return $this->codeNAF2008;
    }

    /**
     * Get the code qualif.
     *
     * @return string Returns the code qualif.
     */
    public function getCodeQualif() {
        return $this->codeQualif;
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
     * Get the contributions.
     *
     * @return float Returns the contributions.
     */
    public function getContributions() {
        return $this->contributions;
    }

    /**
     * Get the date embauche.
     *
     * @return DateTime Returns the date embauche.
     */
    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    /**
     * Get the date fin contrat.
     *
     * @return DateTime Returns the date fin contrat.
     */
    public function getDateFinContrat() {
        return $this->dateFinContrat;
    }

    /**
     * Get the date fin contrat initiale.
     *
     * @return DateTime Returns the date fin contrat initiale.
     */
    public function getDateFinContratInitiale() {
        return $this->dateFinContratInitiale;
    }

    /**
     * Get the date naiss.
     *
     * @return DateTime Returns the date naiss.
     */
    public function getDateNaiss() {
        return $this->dateNaiss;
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
     * Get the emp tel.
     *
     * @return string Returns the emp tel.
     */
    public function getEmpTel() {
        return $this->empTel;
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
     * Get the etbl fax.
     *
     * @return string Returns the etbl fax.
     */
    public function getEtblFax() {
        return $this->etblFax;
    }

    /**
     * Get the etbl mail.
     *
     * @return string Returns the etbl mail.
     */
    public function getEtblMail() {
        return $this->etblMail;
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
     * Get the indice a e m.
     *
     * @return int Returns the indice a e m.
     */
    public function getIndiceAEM() {
        return $this->indiceAEM;
    }

    /**
     * Get the label prestataire.
     *
     * @return bool Returns the label prestataire.
     */
    public function getLabelPrestataire() {
        return $this->labelPrestataire;
    }

    /**
     * Get the licence spectacle.
     *
     * @return bool Returns the licence spectacle.
     */
    public function getLicenceSpectacle() {
        return $this->licenceSpectacle;
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
     * Get the lien parente.
     *
     * @return bool Returns the lien parente.
     */
    public function getLienParente() {
        return $this->lienParente;
    }

    /**
     * Get the motif fin contrat.
     *
     * @return string Returns the motif fin contrat.
     */
    public function getMotifFinContrat() {
        return $this->motifFinContrat;
    }

    /**
     * Get the motif rupture.
     *
     * @return string Returns the motif rupture.
     */
    public function getMotifRupture() {
        return $this->motifRupture;
    }

    /**
     * Get the n a f.
     *
     * @return string Returns the n a f.
     */
    public function getNAF() {
        return $this->nAF;
    }

    /**
     * Get the n i r.
     *
     * @return string Returns the n i r.
     */
    public function getNIR() {
        return $this->nIR;
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
     * Get the nom retraite.
     *
     * @return string Returns the nom retraite.
     */
    public function getNomRetraite() {
        return $this->nomRetraite;
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
     * Get the nombre cachets isoles.
     *
     * @return float Returns the nombre cachets isoles.
     */
    public function getNombreCachetsIsoles() {
        return $this->nombreCachetsIsoles;
    }

    /**
     * Get the nombre heures.
     *
     * @return float Returns the nombre heures.
     */
    public function getNombreHeures() {
        return $this->nombreHeures;
    }

    /**
     * Get the num assedic.
     *
     * @return string Returns the num assedic.
     */
    public function getNumAssedic() {
        return $this->numAssedic;
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
     * Get the num certification sociale.
     *
     * @return string Returns the num certification sociale.
     */
    public function getNumCertificationSociale() {
        return $this->numCertificationSociale;
    }

    /**
     * Get the num i d c c employeur.
     *
     * @return string Returns the num i d c c employeur.
     */
    public function getNumIDCCEmployeur() {
        return $this->numIDCCEmployeur;
    }

    /**
     * Get the num i d c c prestation travail.
     *
     * @return string Returns the num i d c c prestation travail.
     */
    public function getNumIDCCPrestationTravail() {
        return $this->numIDCCPrestationTravail;
    }

    /**
     * Get the num objet.
     *
     * @return string Returns the num objet.
     */
    public function getNumObjet() {
        return $this->numObjet;
    }

    /**
     * Get the numero a e m initiale.
     *
     * @return string Returns the numero a e m initiale.
     */
    public function getNumeroAEMInitiale() {
        return $this->numeroAEMInitiale;
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
     * Get the numero label.
     *
     * @return string Returns the numero label.
     */
    public function getNumeroLabel() {
        return $this->numeroLabel;
    }

    /**
     * Get the numero licence.
     *
     * @return string Returns the numero licence.
     */
    public function getNumeroLicence() {
        return $this->numeroLicence;
    }

    /**
     * Get the organisateur spectacle.
     *
     * @return bool Returns the organisateur spectacle.
     */
    public function getOrganisateurSpectacle() {
        return $this->organisateurSpectacle;
    }

    /**
     * Get the organisme assedic.
     *
     * @return string Returns the organisme assedic.
     */
    public function getOrganismeAssedic() {
        return $this->organismeAssedic;
    }

    /**
     * Get the organisme retraite.
     *
     * @return string Returns the organisme retraite.
     */
    public function getOrganismeRetraite() {
        return $this->organismeRetraite;
    }

    /**
     * Get the periode attest.
     *
     * @return DateTime Returns the periode attest.
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
     * Get the s i r e t.
     *
     * @return string Returns the s i r e t.
     */
    public function getSIRET() {
        return $this->sIRET;
    }

    /**
     * Get the signature date.
     *
     * @return DateTime Returns the signature date.
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
     * Get the signature prenom.
     *
     * @return string Returns the signature prenom.
     */
    public function getSignaturePrenom() {
        return $this->signaturePrenom;
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
     * Get the signature qualite code.
     *
     * @return string Returns the signature qualite code.
     */
    public function getSignatureQualiteCode() {
        return $this->signatureQualiteCode;
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
     * Get the statut cadre.
     *
     * @return bool Returns the statut cadre.
     */
    public function getStatutCadre() {
        return $this->statutCadre;
    }

    /**
     * Get the taux cotis.
     *
     * @return float Returns the taux cotis.
     */
    public function getTauxCotis() {
        return $this->tauxCotis;
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
     * Get the type a e m.
     *
     * @return string Returns the type a e m.
     */
    public function getTypeAEM() {
        return $this->typeAEM;
    }

    /**
     * Get the type lien parente.
     *
     * @return string Returns the type lien parente.
     */
    public function getTypeLienParente() {
        return $this->typeLienParente;
    }

    /**
     * Get the type nationalite.
     *
     * @return string Returns the type nationalite.
     */
    public function getTypeNationalite() {
        return $this->typeNationalite;
    }

    /**
     * Set the a e m initiale.
     *
     * @param bool $aEMInitiale The a e m initiale.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setAEMInitiale($aEMInitiale) {
        $this->aEMInitiale = $aEMInitiale;
        return $this;
    }

    /**
     * Set the activite.
     *
     * @param string $activite The activite.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setActivite($activite) {
        $this->activite = $activite;
        return $this;
    }

    /**
     * Set the autres contributions.
     *
     * @param float $autresContributions The autres contributions.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setAutresContributions($autresContributions) {
        $this->autresContributions = $autresContributions;
        return $this;
    }

    /**
     * Set the autres remun brut.
     *
     * @param float $autresRemunBrut The autres remun brut.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setAutresRemunBrut($autresRemunBrut) {
        $this->autresRemunBrut = $autresRemunBrut;
        return $this;
    }

    /**
     * Set the autres taux cotis.
     *
     * @param float $autresTauxCotis The autres taux cotis.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setAutresTauxCotis($autresTauxCotis) {
        $this->autresTauxCotis = $autresTauxCotis;
        return $this;
    }

    /**
     * Set the brut.
     *
     * @param float $brut The brut.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setBrut($brut) {
        $this->brut = $brut;
        return $this;
    }

    /**
     * Set the brutal.
     *
     * @param float $brutal The brutal.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setBrutal($brutal) {
        $this->brutal = $brutal;
        return $this;
    }

    /**
     * Set the certification sociale.
     *
     * @param bool $certificationSociale The certification sociale.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setCertificationSociale($certificationSociale) {
        $this->certificationSociale = $certificationSociale;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string $civilite The civilite.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code emploi.
     *
     * @param string $codeEmploi The code emploi.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setCodeEmploi($codeEmploi) {
        $this->codeEmploi = $codeEmploi;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code n a f2008.
     *
     * @param string $codeNAF2008 The code n a f2008.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setCodeNAF2008($codeNAF2008) {
        $this->codeNAF2008 = $codeNAF2008;
        return $this;
    }

    /**
     * Set the code qualif.
     *
     * @param string $codeQualif The code qualif.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setCodeQualif($codeQualif) {
        $this->codeQualif = $codeQualif;
        return $this;
    }

    /**
     * Set the contact.
     *
     * @param string $contact The contact.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setContact($contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Set the contrat en cours.
     *
     * @param bool $contratEnCours The contrat en cours.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setContratEnCours($contratEnCours) {
        $this->contratEnCours = $contratEnCours;
        return $this;
    }

    /**
     * Set the contributions.
     *
     * @param float $contributions The contributions.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setContributions($contributions) {
        $this->contributions = $contributions;
        return $this;
    }

    /**
     * Set the date embauche.
     *
     * @param DateTime $dateEmbauche The date embauche.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setDateEmbauche(DateTime $dateEmbauche = null) {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * Set the date fin contrat.
     *
     * @param DateTime $dateFinContrat The date fin contrat.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setDateFinContrat(DateTime $dateFinContrat = null) {
        $this->dateFinContrat = $dateFinContrat;
        return $this;
    }

    /**
     * Set the date fin contrat initiale.
     *
     * @param DateTime $dateFinContratInitiale The date fin contrat initiale.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setDateFinContratInitiale(DateTime $dateFinContratInitiale = null) {
        $this->dateFinContratInitiale = $dateFinContratInitiale;
        return $this;
    }

    /**
     * Set the date naiss.
     *
     * @param DateTime $dateNaiss The date naiss.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setDateNaiss(DateTime $dateNaiss = null) {
        $this->dateNaiss = $dateNaiss;
        return $this;
    }

    /**
     * Set the emp adresse1.
     *
     * @param string $empAdresse1 The emp adresse1.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEmpAdresse1($empAdresse1) {
        $this->empAdresse1 = $empAdresse1;
        return $this;
    }

    /**
     * Set the emp adresse2.
     *
     * @param string $empAdresse2 The emp adresse2.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEmpAdresse2($empAdresse2) {
        $this->empAdresse2 = $empAdresse2;
        return $this;
    }

    /**
     * Set the emp code postal.
     *
     * @param string $empCodePostal The emp code postal.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEmpCodePostal($empCodePostal) {
        $this->empCodePostal = $empCodePostal;
        return $this;
    }

    /**
     * Set the emp commune.
     *
     * @param string $empCommune The emp commune.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEmpCommune($empCommune) {
        $this->empCommune = $empCommune;
        return $this;
    }

    /**
     * Set the emp tel.
     *
     * @param string $empTel The emp tel.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEmpTel($empTel) {
        $this->empTel = $empTel;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string $etblAdresse1 The etbl adresse1.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblAdresse1($etblAdresse1) {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string $etblAdresse2 The etbl adresse2.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblAdresse2($etblAdresse2) {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl code postal.
     *
     * @param string $etblCodePostal The etbl code postal.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblCodePostal($etblCodePostal) {
        $this->etblCodePostal = $etblCodePostal;
        return $this;
    }

    /**
     * Set the etbl commune.
     *
     * @param string $etblCommune The etbl commune.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblCommune($etblCommune) {
        $this->etblCommune = $etblCommune;
        return $this;
    }

    /**
     * Set the etbl fax.
     *
     * @param string $etblFax The etbl fax.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblFax($etblFax) {
        $this->etblFax = $etblFax;
        return $this;
    }

    /**
     * Set the etbl mail.
     *
     * @param string $etblMail The etbl mail.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblMail($etblMail) {
        $this->etblMail = $etblMail;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string $etblRaisonSociale The etbl raison sociale.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblRaisonSociale($etblRaisonSociale) {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the indice a e m.
     *
     * @param int $indiceAEM The indice a e m.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setIndiceAEM($indiceAEM) {
        $this->indiceAEM = $indiceAEM;
        return $this;
    }

    /**
     * Set the label prestataire.
     *
     * @param bool $labelPrestataire The label prestataire.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setLabelPrestataire($labelPrestataire) {
        $this->labelPrestataire = $labelPrestataire;
        return $this;
    }

    /**
     * Set the licence spectacle.
     *
     * @param bool $licenceSpectacle The licence spectacle.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setLicenceSpectacle($licenceSpectacle) {
        $this->licenceSpectacle = $licenceSpectacle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien parente.
     *
     * @param bool $lienParente The lien parente.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setLienParente($lienParente) {
        $this->lienParente = $lienParente;
        return $this;
    }

    /**
     * Set the motif fin contrat.
     *
     * @param string $motifFinContrat The motif fin contrat.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setMotifFinContrat($motifFinContrat) {
        $this->motifFinContrat = $motifFinContrat;
        return $this;
    }

    /**
     * Set the motif rupture.
     *
     * @param string $motifRupture The motif rupture.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setMotifRupture($motifRupture) {
        $this->motifRupture = $motifRupture;
        return $this;
    }

    /**
     * Set the n a f.
     *
     * @param string $nAF The n a f.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNAF($nAF) {
        $this->nAF = $nAF;
        return $this;
    }

    /**
     * Set the n i r.
     *
     * @param string $nIR The n i r.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNIR($nIR) {
        $this->nIR = $nIR;
        return $this;
    }

    /**
     * Set the nb jour trav.
     *
     * @param float $nbJourTrav The nb jour trav.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNbJourTrav($nbJourTrav) {
        $this->nbJourTrav = $nbJourTrav;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom retraite.
     *
     * @param string $nomRetraite The nom retraite.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNomRetraite($nomRetraite) {
        $this->nomRetraite = $nomRetraite;
        return $this;
    }

    /**
     * Set the nombre cachets.
     *
     * @param float $nombreCachets The nombre cachets.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNombreCachets($nombreCachets) {
        $this->nombreCachets = $nombreCachets;
        return $this;
    }

    /**
     * Set the nombre cachets isoles.
     *
     * @param float $nombreCachetsIsoles The nombre cachets isoles.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNombreCachetsIsoles($nombreCachetsIsoles) {
        $this->nombreCachetsIsoles = $nombreCachetsIsoles;
        return $this;
    }

    /**
     * Set the nombre heures.
     *
     * @param float $nombreHeures The nombre heures.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNombreHeures($nombreHeures) {
        $this->nombreHeures = $nombreHeures;
        return $this;
    }

    /**
     * Set the num assedic.
     *
     * @param string $numAssedic The num assedic.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumAssedic($numAssedic) {
        $this->numAssedic = $numAssedic;
        return $this;
    }

    /**
     * Set the num caisse spectacle.
     *
     * @param string $numCaisseSpectacle The num caisse spectacle.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumCaisseSpectacle($numCaisseSpectacle) {
        $this->numCaisseSpectacle = $numCaisseSpectacle;
        return $this;
    }

    /**
     * Set the num certification sociale.
     *
     * @param string $numCertificationSociale The num certification sociale.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumCertificationSociale($numCertificationSociale) {
        $this->numCertificationSociale = $numCertificationSociale;
        return $this;
    }

    /**
     * Set the num i d c c employeur.
     *
     * @param string $numIDCCEmployeur The num i d c c employeur.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumIDCCEmployeur($numIDCCEmployeur) {
        $this->numIDCCEmployeur = $numIDCCEmployeur;
        return $this;
    }

    /**
     * Set the num i d c c prestation travail.
     *
     * @param string $numIDCCPrestationTravail The num i d c c prestation travail.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumIDCCPrestationTravail($numIDCCPrestationTravail) {
        $this->numIDCCPrestationTravail = $numIDCCPrestationTravail;
        return $this;
    }

    /**
     * Set the num objet.
     *
     * @param string $numObjet The num objet.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumObjet($numObjet) {
        $this->numObjet = $numObjet;
        return $this;
    }

    /**
     * Set the numero a e m initiale.
     *
     * @param string $numeroAEMInitiale The numero a e m initiale.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumeroAEMInitiale($numeroAEMInitiale) {
        $this->numeroAEMInitiale = $numeroAEMInitiale;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero label.
     *
     * @param string $numeroLabel The numero label.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumeroLabel($numeroLabel) {
        $this->numeroLabel = $numeroLabel;
        return $this;
    }

    /**
     * Set the numero licence.
     *
     * @param string $numeroLicence The numero licence.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setNumeroLicence($numeroLicence) {
        $this->numeroLicence = $numeroLicence;
        return $this;
    }

    /**
     * Set the organisateur spectacle.
     *
     * @param bool $organisateurSpectacle The organisateur spectacle.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setOrganisateurSpectacle($organisateurSpectacle) {
        $this->organisateurSpectacle = $organisateurSpectacle;
        return $this;
    }

    /**
     * Set the organisme assedic.
     *
     * @param string $organismeAssedic The organisme assedic.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setOrganismeAssedic($organismeAssedic) {
        $this->organismeAssedic = $organismeAssedic;
        return $this;
    }

    /**
     * Set the organisme retraite.
     *
     * @param string $organismeRetraite The organisme retraite.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setOrganismeRetraite($organismeRetraite) {
        $this->organismeRetraite = $organismeRetraite;
        return $this;
    }

    /**
     * Set the periode attest.
     *
     * @param DateTime $periodeAttest The periode attest.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setPeriodeAttest(DateTime $periodeAttest = null) {
        $this->periodeAttest = $periodeAttest;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the s i r e t.
     *
     * @param string $sIRET The s i r e t.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setSIRET($sIRET) {
        $this->sIRET = $sIRET;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime $signatureDate The signature date.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setSignatureDate(DateTime $signatureDate = null) {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string $signatureNom The signature nom.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setSignatureNom($signatureNom) {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature prenom.
     *
     * @param string $signaturePrenom The signature prenom.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setSignaturePrenom($signaturePrenom) {
        $this->signaturePrenom = $signaturePrenom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string $signatureQualite The signature qualite.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setSignatureQualite($signatureQualite) {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature qualite code.
     *
     * @param string $signatureQualiteCode The signature qualite code.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setSignatureQualiteCode($signatureQualiteCode) {
        $this->signatureQualiteCode = $signatureQualiteCode;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string $signatureVille The signature ville.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setSignatureVille($signatureVille) {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the statut cadre.
     *
     * @param bool $statutCadre The statut cadre.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setStatutCadre($statutCadre) {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the taux cotis.
     *
     * @param float $tauxCotis The taux cotis.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setTauxCotis($tauxCotis) {
        $this->tauxCotis = $tauxCotis;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string $telContact The tel contact.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setTelContact($telContact) {
        $this->telContact = $telContact;
        return $this;
    }

    /**
     * Set the type a e m.
     *
     * @param string $typeAEM The type a e m.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setTypeAEM($typeAEM) {
        $this->typeAEM = $typeAEM;
        return $this;
    }

    /**
     * Set the type lien parente.
     *
     * @param string $typeLienParente The type lien parente.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setTypeLienParente($typeLienParente) {
        $this->typeLienParente = $typeLienParente;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string $typeNationalite The type nationalite.
     * @return AttestationAEM Returns this attestation a e m.
     */
    public function setTypeNationalite($typeNationalite) {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }
}
