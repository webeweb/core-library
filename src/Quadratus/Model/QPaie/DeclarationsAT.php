<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Declarations a t model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DeclarationsAT {

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
     * @var DateTime
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
     * @var DateTime
     */
    private $dtAccouchement;

    /**
     * Dt deb a t.
     *
     * @var DateTime
     */
    private $dtDebAT;

    /**
     * Dt deb conges.
     *
     * @var DateTime
     */
    private $dtDebConges;

    /**
     * Dt embauche.
     *
     * @var DateTime
     */
    private $dtEmbauche;

    /**
     * Dt fin conges.
     *
     * @var DateTime
     */
    private $dtFinConges;

    /**
     * Dt fin contrat.
     *
     * @var DateTime
     */
    private $dtFinContrat;

    /**
     * Dt fin preavis.
     *
     * @var DateTime
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
     * Etbl s i r e t.
     *
     * @var string
     */
    private $etblSIRET;

    /**
     * Etbl signature.
     *
     * @var string
     */
    private $etblSignature;

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
     * Motif a t.
     *
     * @var string
     */
    private $motifAT;

    /**
     * Mt salaire brut.
     *
     * @var int
     */
    private $mtSalaireBrut;

    /**
     * N i r.
     *
     * @var string
     */
    private $nIR;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Num d a t.
     *
     * @var string
     */
    private $numDAT;

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
     * @var DateTime
     */
    private $signDate;

    /**
     * Type d a t.
     *
     * @var string
     */
    private $typeDAT;

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
     * @return DateTime Returns the date naissance.
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
     * @return DateTime Returns the dt accouchement.
     */
    public function getDtAccouchement() {
        return $this->dtAccouchement;
    }

    /**
     * Get the dt deb a t.
     *
     * @return DateTime Returns the dt deb a t.
     */
    public function getDtDebAT() {
        return $this->dtDebAT;
    }

    /**
     * Get the dt deb conges.
     *
     * @return DateTime Returns the dt deb conges.
     */
    public function getDtDebConges() {
        return $this->dtDebConges;
    }

    /**
     * Get the dt embauche.
     *
     * @return DateTime Returns the dt embauche.
     */
    public function getDtEmbauche() {
        return $this->dtEmbauche;
    }

    /**
     * Get the dt fin conges.
     *
     * @return DateTime Returns the dt fin conges.
     */
    public function getDtFinConges() {
        return $this->dtFinConges;
    }

    /**
     * Get the dt fin contrat.
     *
     * @return DateTime Returns the dt fin contrat.
     */
    public function getDtFinContrat() {
        return $this->dtFinContrat;
    }

    /**
     * Get the dt fin preavis.
     *
     * @return DateTime Returns the dt fin preavis.
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
     * Get the etbl s i r e t.
     *
     * @return string Returns the etbl s i r e t.
     */
    public function getEtblSIRET() {
        return $this->etblSIRET;
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
     * Get the motif a t.
     *
     * @return string Returns the motif a t.
     */
    public function getMotifAT() {
        return $this->motifAT;
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
     * Get the n i r.
     *
     * @return string Returns the n i r.
     */
    public function getNIR() {
        return $this->nIR;
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
     * Get the num d a t.
     *
     * @return string Returns the num d a t.
     */
    public function getNumDAT() {
        return $this->numDAT;
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
     * @return DateTime Returns the sign date.
     */
    public function getSignDate() {
        return $this->signDate;
    }

    /**
     * Get the type d a t.
     *
     * @return string Returns the type d a t.
     */
    public function getTypeDAT() {
        return $this->typeDAT;
    }

    /**
     * Set the adresse.
     *
     * @param string $adresse The adresse.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set the categorie.
     *
     * @param string $categorie The categorie.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param string $codeEtablissement The code etablissement.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the commune.
     *
     * @param string $commune The commune.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setCommune($commune) {
        $this->commune = $commune;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime $dateNaissance The date naissance.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the deduct forfait.
     *
     * @param int $deductForfait The deduct forfait.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDeductForfait($deductForfait) {
        $this->deductForfait = $deductForfait;
        return $this;
    }

    /**
     * Set the dt accouchement.
     *
     * @param DateTime $dtAccouchement The dt accouchement.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDtAccouchement(DateTime $dtAccouchement = null) {
        $this->dtAccouchement = $dtAccouchement;
        return $this;
    }

    /**
     * Set the dt deb a t.
     *
     * @param DateTime $dtDebAT The dt deb a t.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDtDebAT(DateTime $dtDebAT = null) {
        $this->dtDebAT = $dtDebAT;
        return $this;
    }

    /**
     * Set the dt deb conges.
     *
     * @param DateTime $dtDebConges The dt deb conges.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDtDebConges(DateTime $dtDebConges = null) {
        $this->dtDebConges = $dtDebConges;
        return $this;
    }

    /**
     * Set the dt embauche.
     *
     * @param DateTime $dtEmbauche The dt embauche.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDtEmbauche(DateTime $dtEmbauche = null) {
        $this->dtEmbauche = $dtEmbauche;
        return $this;
    }

    /**
     * Set the dt fin conges.
     *
     * @param DateTime $dtFinConges The dt fin conges.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDtFinConges(DateTime $dtFinConges = null) {
        $this->dtFinConges = $dtFinConges;
        return $this;
    }

    /**
     * Set the dt fin contrat.
     *
     * @param DateTime $dtFinContrat The dt fin contrat.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDtFinContrat(DateTime $dtFinContrat = null) {
        $this->dtFinContrat = $dtFinContrat;
        return $this;
    }

    /**
     * Set the dt fin preavis.
     *
     * @param DateTime $dtFinPreavis The dt fin preavis.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setDtFinPreavis(DateTime $dtFinPreavis = null) {
        $this->dtFinPreavis = $dtFinPreavis;
        return $this;
    }

    /**
     * Set the etbl nom.
     *
     * @param string $etblNom The etbl nom.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setEtblNom($etblNom) {
        $this->etblNom = $etblNom;
        return $this;
    }

    /**
     * Set the etbl responsable.
     *
     * @param string $etblResponsable The etbl responsable.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setEtblResponsable($etblResponsable) {
        $this->etblResponsable = $etblResponsable;
        return $this;
    }

    /**
     * Set the etbl s i r e t.
     *
     * @param string $etblSIRET The etbl s i r e t.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setEtblSIRET($etblSIRET) {
        $this->etblSIRET = $etblSIRET;
        return $this;
    }

    /**
     * Set the etbl signature.
     *
     * @param string $etblSignature The etbl signature.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setEtblSignature($etblSignature) {
        $this->etblSignature = $etblSignature;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the memo accident.
     *
     * @param string $memoAccident The memo accident.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setMemoAccident($memoAccident) {
        $this->memoAccident = $memoAccident;
        return $this;
    }

    /**
     * Set the memo correspondance.
     *
     * @param string $memoCorrespondance The memo correspondance.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setMemoCorrespondance($memoCorrespondance) {
        $this->memoCorrespondance = $memoCorrespondance;
        return $this;
    }

    /**
     * Set the motif a t.
     *
     * @param string $motifAT The motif a t.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setMotifAT($motifAT) {
        $this->motifAT = $motifAT;
        return $this;
    }

    /**
     * Set the mt salaire brut.
     *
     * @param int $mtSalaireBrut The mt salaire brut.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setMtSalaireBrut($mtSalaireBrut) {
        $this->mtSalaireBrut = $mtSalaireBrut;
        return $this;
    }

    /**
     * Set the n i r.
     *
     * @param string $nIR The n i r.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setNIR($nIR) {
        $this->nIR = $nIR;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num d a t.
     *
     * @param string $numDAT The num d a t.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setNumDAT($numDAT) {
        $this->numDAT = $numDAT;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the sign date.
     *
     * @param DateTime $signDate The sign date.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setSignDate(DateTime $signDate = null) {
        $this->signDate = $signDate;
        return $this;
    }

    /**
     * Set the type d a t.
     *
     * @param string $typeDAT The type d a t.
     * @return DeclarationsAT Returns this declarations a t.
     */
    public function setTypeDAT($typeDAT) {
        $this->typeDAT = $typeDAT;
        return $this;
    }

}
