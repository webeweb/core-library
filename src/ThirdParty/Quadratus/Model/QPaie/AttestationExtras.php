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
 * Attestation extras model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationExtras {

    /**
     * Ancien assedic.
     *
     * @var bool
     */
    private $ancienAssedic;

    /**
     * Ancien g a r p.
     *
     * @var bool
     */
    private $ancienGARP;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code motif rupture.
     *
     * @var string
     */
    private $codeMotifRupture;

    /**
     * Code naf.
     *
     * @var string
     */
    private $codeNaf;

    /**
     * Effectif.
     *
     * @var int
     */
    private $effectif;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Etbl adresse.
     *
     * @var string
     */
    private $etblAdresse;

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
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * N i r.
     *
     * @var string
     */
    private $nIR;

    /**
     * Nom employe.
     *
     * @var string
     */
    private $nomEmploye;

    /**
     * Nom pole emploi.
     *
     * @var string
     */
    private $nomPoleEmploi;

    /**
     * Nom regime retraite.
     *
     * @var string
     */
    private $nomRegimeRetraite;

    /**
     * Numero affiliation.
     *
     * @var string
     */
    private $numeroAffiliation;

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
     * Periode emploi deb.
     *
     * @var DateTime
     */
    private $periodeEmploiDeb;

    /**
     * Periode emploi fin.
     *
     * @var DateTime
     */
    private $periodeEmploiFin;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ancien assedic.
     *
     * @return bool Returns the ancien assedic.
     */
    public function getAncienAssedic() {
        return $this->ancienAssedic;
    }

    /**
     * Get the ancien g a r p.
     *
     * @return bool Returns the ancien g a r p.
     */
    public function getAncienGARP() {
        return $this->ancienGARP;
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
     * Get the code motif rupture.
     *
     * @return string Returns the code motif rupture.
     */
    public function getCodeMotifRupture() {
        return $this->codeMotifRupture;
    }

    /**
     * Get the code naf.
     *
     * @return string Returns the code naf.
     */
    public function getCodeNaf() {
        return $this->codeNaf;
    }

    /**
     * Get the effectif.
     *
     * @return int Returns the effectif.
     */
    public function getEffectif() {
        return $this->effectif;
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
     * Get the etbl adresse.
     *
     * @return string Returns the etbl adresse.
     */
    public function getEtblAdresse() {
        return $this->etblAdresse;
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
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
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
     * Get the nom employe.
     *
     * @return string Returns the nom employe.
     */
    public function getNomEmploye() {
        return $this->nomEmploye;
    }

    /**
     * Get the nom pole emploi.
     *
     * @return string Returns the nom pole emploi.
     */
    public function getNomPoleEmploi() {
        return $this->nomPoleEmploi;
    }

    /**
     * Get the nom regime retraite.
     *
     * @return string Returns the nom regime retraite.
     */
    public function getNomRegimeRetraite() {
        return $this->nomRegimeRetraite;
    }

    /**
     * Get the numero affiliation.
     *
     * @return string Returns the numero affiliation.
     */
    public function getNumeroAffiliation() {
        return $this->numeroAffiliation;
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
     * Get the periode emploi deb.
     *
     * @return DateTime Returns the periode emploi deb.
     */
    public function getPeriodeEmploiDeb() {
        return $this->periodeEmploiDeb;
    }

    /**
     * Get the periode emploi fin.
     *
     * @return DateTime Returns the periode emploi fin.
     */
    public function getPeriodeEmploiFin() {
        return $this->periodeEmploiFin;
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
     * Set the ancien assedic.
     *
     * @param bool $ancienAssedic The ancien assedic.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setAncienAssedic($ancienAssedic) {
        $this->ancienAssedic = $ancienAssedic;
        return $this;
    }

    /**
     * Set the ancien g a r p.
     *
     * @param bool $ancienGARP The ancien g a r p.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setAncienGARP($ancienGARP) {
        $this->ancienGARP = $ancienGARP;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string $codeNaf The code naf.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setCodeNaf($codeNaf) {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param int $effectif The effectif.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setEffectif($effectif) {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the etbl adresse.
     *
     * @param string $etblAdresse The etbl adresse.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setEtblAdresse($etblAdresse) {
        $this->etblAdresse = $etblAdresse;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string $etblRaisonSociale The etbl raison sociale.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setEtblRaisonSociale($etblRaisonSociale) {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the n i r.
     *
     * @param string $nIR The n i r.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setNIR($nIR) {
        $this->nIR = $nIR;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom pole emploi.
     *
     * @param string $nomPoleEmploi The nom pole emploi.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setNomPoleEmploi($nomPoleEmploi) {
        $this->nomPoleEmploi = $nomPoleEmploi;
        return $this;
    }

    /**
     * Set the nom regime retraite.
     *
     * @param string $nomRegimeRetraite The nom regime retraite.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setNomRegimeRetraite($nomRegimeRetraite) {
        $this->nomRegimeRetraite = $nomRegimeRetraite;
        return $this;
    }

    /**
     * Set the numero affiliation.
     *
     * @param string $numeroAffiliation The numero affiliation.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setNumeroAffiliation($numeroAffiliation) {
        $this->numeroAffiliation = $numeroAffiliation;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode emploi deb.
     *
     * @param DateTime $periodeEmploiDeb The periode emploi deb.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setPeriodeEmploiDeb(DateTime $periodeEmploiDeb = null) {
        $this->periodeEmploiDeb = $periodeEmploiDeb;
        return $this;
    }

    /**
     * Set the periode emploi fin.
     *
     * @param DateTime $periodeEmploiFin The periode emploi fin.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setPeriodeEmploiFin(DateTime $periodeEmploiFin = null) {
        $this->periodeEmploiFin = $periodeEmploiFin;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the s i r e t.
     *
     * @param string $sIRET The s i r e t.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setSIRET($sIRET) {
        $this->sIRET = $sIRET;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime $signatureDate The signature date.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setSignatureDate(DateTime $signatureDate = null) {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string $signatureNom The signature nom.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setSignatureNom($signatureNom) {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string $signatureQualite The signature qualite.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setSignatureQualite($signatureQualite) {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string $signatureVille The signature ville.
     * @return AttestationExtras Returns this attestation extras.
     */
    public function setSignatureVille($signatureVille) {
        $this->signatureVille = $signatureVille;
        return $this;
    }
}
