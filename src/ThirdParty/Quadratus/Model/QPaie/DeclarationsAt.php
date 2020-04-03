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
 * Declarations at.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationsAt {

    /**
     * Adresse.
     *
     * @var string
     */
    private $adresse;

    /**
     * Categorie.
     *
     * @var string
     */
    private $categorie;

    /**
     * Code etablissement.
     *
     * @var string
     */
    private $codeEtablissement;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Commune.
     *
     * @var string
     */
    private $commune;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Deduct forfait.
     *
     * @var int
     */
    private $deductForfait;

    /**
     * Dt accouchement.
     *
     * @var DateTime|null
     */
    private $dtAccouchement;

    /**
     * Dt deb at.
     *
     * @var DateTime|null
     */
    private $dtDebAt;

    /**
     * Dt deb conges.
     *
     * @var DateTime|null
     */
    private $dtDebConges;

    /**
     * Dt embauche.
     *
     * @var DateTime|null
     */
    private $dtEmbauche;

    /**
     * Dt fin conges.
     *
     * @var DateTime|null
     */
    private $dtFinConges;

    /**
     * Dt fin contrat.
     *
     * @var DateTime|null
     */
    private $dtFinContrat;

    /**
     * Dt fin preavis.
     *
     * @var DateTime|null
     */
    private $dtFinPreavis;

    /**
     * Etbl nom.
     *
     * @var string
     */
    private $etblNom;

    /**
     * Etbl responsable.
     *
     * @var string
     */
    private $etblResponsable;

    /**
     * Etbl signature.
     *
     * @var string
     */
    private $etblSignature;

    /**
     * Etbl siret.
     *
     * @var string
     */
    private $etblSiret;

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
     * Memo accident.
     *
     * @var string
     */
    private $memoAccident;

    /**
     * Memo correspondance.
     *
     * @var string
     */
    private $memoCorrespondance;

    /**
     * Motif at.
     *
     * @var string
     */
    private $motifAt;

    /**
     * Mt salaire brut.
     *
     * @var int
     */
    private $mtSalaireBrut;

    /**
     * Nir.
     *
     * @var string
     */
    private $nir;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Num dat.
     *
     * @var string
     */
    private $numDat;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Sign date.
     *
     * @var DateTime|null
     */
    private $signDate;

    /**
     * Type dat.
     *
     * @var string
     */
    private $typeDat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse.
     *
     * @return string Returns the adresse.
     */
    public function getAdresse() {
        return $this->adresse;
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
     * Get the code etablissement.
     *
     * @return string Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the commune.
     *
     * @return string Returns the commune.
     */
    public function getCommune() {
        return $this->commune;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
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
     * Get the deduct forfait.
     *
     * @return int Returns the deduct forfait.
     */
    public function getDeductForfait() {
        return $this->deductForfait;
    }

    /**
     * Get the dt accouchement.
     *
     * @return DateTime|null Returns the dt accouchement.
     */
    public function getDtAccouchement() {
        return $this->dtAccouchement;
    }

    /**
     * Get the dt deb at.
     *
     * @return DateTime|null Returns the dt deb at.
     */
    public function getDtDebAt() {
        return $this->dtDebAt;
    }

    /**
     * Get the dt deb conges.
     *
     * @return DateTime|null Returns the dt deb conges.
     */
    public function getDtDebConges() {
        return $this->dtDebConges;
    }

    /**
     * Get the dt embauche.
     *
     * @return DateTime|null Returns the dt embauche.
     */
    public function getDtEmbauche() {
        return $this->dtEmbauche;
    }

    /**
     * Get the dt fin conges.
     *
     * @return DateTime|null Returns the dt fin conges.
     */
    public function getDtFinConges() {
        return $this->dtFinConges;
    }

    /**
     * Get the dt fin contrat.
     *
     * @return DateTime|null Returns the dt fin contrat.
     */
    public function getDtFinContrat() {
        return $this->dtFinContrat;
    }

    /**
     * Get the dt fin preavis.
     *
     * @return DateTime|null Returns the dt fin preavis.
     */
    public function getDtFinPreavis() {
        return $this->dtFinPreavis;
    }

    /**
     * Get the etbl nom.
     *
     * @return string Returns the etbl nom.
     */
    public function getEtblNom() {
        return $this->etblNom;
    }

    /**
     * Get the etbl responsable.
     *
     * @return string Returns the etbl responsable.
     */
    public function getEtblResponsable() {
        return $this->etblResponsable;
    }

    /**
     * Get the etbl signature.
     *
     * @return string Returns the etbl signature.
     */
    public function getEtblSignature() {
        return $this->etblSignature;
    }

    /**
     * Get the etbl siret.
     *
     * @return string Returns the etbl siret.
     */
    public function getEtblSiret() {
        return $this->etblSiret;
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
     * Get the memo accident.
     *
     * @return string Returns the memo accident.
     */
    public function getMemoAccident() {
        return $this->memoAccident;
    }

    /**
     * Get the memo correspondance.
     *
     * @return string Returns the memo correspondance.
     */
    public function getMemoCorrespondance() {
        return $this->memoCorrespondance;
    }

    /**
     * Get the motif at.
     *
     * @return string Returns the motif at.
     */
    public function getMotifAt() {
        return $this->motifAt;
    }

    /**
     * Get the mt salaire brut.
     *
     * @return int Returns the mt salaire brut.
     */
    public function getMtSalaireBrut() {
        return $this->mtSalaireBrut;
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
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the num dat.
     *
     * @return string Returns the num dat.
     */
    public function getNumDat() {
        return $this->numDat;
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
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the sign date.
     *
     * @return DateTime|null Returns the sign date.
     */
    public function getSignDate() {
        return $this->signDate;
    }

    /**
     * Get the type dat.
     *
     * @return string Returns the type dat.
     */
    public function getTypeDat() {
        return $this->typeDat;
    }

    /**
     * Set the adresse.
     *
     * @param string $adresse The adresse.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set the categorie.
     *
     * @param string $categorie The categorie.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param string $codeEtablissement The code etablissement.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the commune.
     *
     * @param string $commune The commune.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setCommune($commune) {
        $this->commune = $commune;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the deduct forfait.
     *
     * @param int $deductForfait The deduct forfait.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDeductForfait($deductForfait) {
        $this->deductForfait = $deductForfait;
        return $this;
    }

    /**
     * Set the dt accouchement.
     *
     * @param DateTime|null $dtAccouchement The dt accouchement.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtAccouchement(DateTime $dtAccouchement = null) {
        $this->dtAccouchement = $dtAccouchement;
        return $this;
    }

    /**
     * Set the dt deb at.
     *
     * @param DateTime|null $dtDebAt The dt deb at.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtDebAt(DateTime $dtDebAt = null) {
        $this->dtDebAt = $dtDebAt;
        return $this;
    }

    /**
     * Set the dt deb conges.
     *
     * @param DateTime|null $dtDebConges The dt deb conges.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtDebConges(DateTime $dtDebConges = null) {
        $this->dtDebConges = $dtDebConges;
        return $this;
    }

    /**
     * Set the dt embauche.
     *
     * @param DateTime|null $dtEmbauche The dt embauche.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtEmbauche(DateTime $dtEmbauche = null) {
        $this->dtEmbauche = $dtEmbauche;
        return $this;
    }

    /**
     * Set the dt fin conges.
     *
     * @param DateTime|null $dtFinConges The dt fin conges.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtFinConges(DateTime $dtFinConges = null) {
        $this->dtFinConges = $dtFinConges;
        return $this;
    }

    /**
     * Set the dt fin contrat.
     *
     * @param DateTime|null $dtFinContrat The dt fin contrat.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtFinContrat(DateTime $dtFinContrat = null) {
        $this->dtFinContrat = $dtFinContrat;
        return $this;
    }

    /**
     * Set the dt fin preavis.
     *
     * @param DateTime|null $dtFinPreavis The dt fin preavis.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setDtFinPreavis(DateTime $dtFinPreavis = null) {
        $this->dtFinPreavis = $dtFinPreavis;
        return $this;
    }

    /**
     * Set the etbl nom.
     *
     * @param string $etblNom The etbl nom.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblNom($etblNom) {
        $this->etblNom = $etblNom;
        return $this;
    }

    /**
     * Set the etbl responsable.
     *
     * @param string $etblResponsable The etbl responsable.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblResponsable($etblResponsable) {
        $this->etblResponsable = $etblResponsable;
        return $this;
    }

    /**
     * Set the etbl signature.
     *
     * @param string $etblSignature The etbl signature.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblSignature($etblSignature) {
        $this->etblSignature = $etblSignature;
        return $this;
    }

    /**
     * Set the etbl siret.
     *
     * @param string $etblSiret The etbl siret.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblSiret($etblSiret) {
        $this->etblSiret = $etblSiret;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the memo accident.
     *
     * @param string $memoAccident The memo accident.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMemoAccident($memoAccident) {
        $this->memoAccident = $memoAccident;
        return $this;
    }

    /**
     * Set the memo correspondance.
     *
     * @param string $memoCorrespondance The memo correspondance.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMemoCorrespondance($memoCorrespondance) {
        $this->memoCorrespondance = $memoCorrespondance;
        return $this;
    }

    /**
     * Set the motif at.
     *
     * @param string $motifAt The motif at.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMotifAt($motifAt) {
        $this->motifAt = $motifAt;
        return $this;
    }

    /**
     * Set the mt salaire brut.
     *
     * @param int $mtSalaireBrut The mt salaire brut.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setMtSalaireBrut($mtSalaireBrut) {
        $this->mtSalaireBrut = $mtSalaireBrut;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string $nir The nir.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNir($nir) {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num dat.
     *
     * @param string $numDat The num dat.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNumDat($numDat) {
        $this->numDat = $numDat;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the sign date.
     *
     * @param DateTime|null $signDate The sign date.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setSignDate(DateTime $signDate = null) {
        $this->signDate = $signDate;
        return $this;
    }

    /**
     * Set the type dat.
     *
     * @param string $typeDat The type dat.
     * @return DeclarationsAt Returns this Declarations at.
     */
    public function setTypeDat($typeDat) {
        $this->typeDat = $typeDat;
        return $this;
    }
}
