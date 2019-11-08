<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Devis entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisEntetes {

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Client prospect.
     *
     * @var bool
     */
    private $clientProspect;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code commercial.
     *
     * @var string
     */
    private $codeCommercial;

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date devis.
     *
     * @var DateTime|null
     */
    private $dateDevis;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Montant ht.
     *
     * @var float
     */
    private $montantHt;

    /**
     * Nom adresse.
     *
     * @var string
     */
    private $nomAdresse;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

    /**
     * Nom suite2.
     *
     * @var string
     */
    private $nomSuite2;

    /**
     * Nom suite3.
     *
     * @var string
     */
    private $nomSuite3;

    /**
     * Nom ville.
     *
     * @var string
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero pj.
     *
     * @var int
     */
    private $numeroPj;

    /**
     * Reference1.
     *
     * @var string
     */
    private $reference1;

    /**
     * Reference2.
     *
     * @var string
     */
    private $reference2;

    /**
     * Reference3.
     *
     * @var string
     */
    private $reference3;

    /**
     * Reference4.
     *
     * @var string
     */
    private $reference4;

    /**
     * Taux tva.
     *
     * @var float
     */
    private $tauxTva;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the btq.
     *
     * @return string Returns the btq.
     */
    public function getBtq() {
        return $this->btq;
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
     * Get the client prospect.
     *
     * @return bool Returns the client prospect.
     */
    public function getClientProspect() {
        return $this->clientProspect;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code commercial.
     *
     * @return string Returns the code commercial.
     */
    public function getCodeCommercial() {
        return $this->codeCommercial;
    }

    /**
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
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
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date devis.
     *
     * @return DateTime|null Returns the date devis.
     */
    public function getDateDevis() {
        return $this->dateDevis;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Get the montant ht.
     *
     * @return float Returns the montant ht.
     */
    public function getMontantHt() {
        return $this->montantHt;
    }

    /**
     * Get the nom adresse.
     *
     * @return string Returns the nom adresse.
     */
    public function getNomAdresse() {
        return $this->nomAdresse;
    }

    /**
     * Get the nom suite.
     *
     * @return string Returns the nom suite.
     */
    public function getNomSuite() {
        return $this->nomSuite;
    }

    /**
     * Get the nom suite2.
     *
     * @return string Returns the nom suite2.
     */
    public function getNomSuite2() {
        return $this->nomSuite2;
    }

    /**
     * Get the nom suite3.
     *
     * @return string Returns the nom suite3.
     */
    public function getNomSuite3() {
        return $this->nomSuite3;
    }

    /**
     * Get the nom ville.
     *
     * @return string Returns the nom ville.
     */
    public function getNomVille() {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the numero pj.
     *
     * @return int Returns the numero pj.
     */
    public function getNumeroPj() {
        return $this->numeroPj;
    }

    /**
     * Get the reference1.
     *
     * @return string Returns the reference1.
     */
    public function getReference1() {
        return $this->reference1;
    }

    /**
     * Get the reference2.
     *
     * @return string Returns the reference2.
     */
    public function getReference2() {
        return $this->reference2;
    }

    /**
     * Get the reference3.
     *
     * @return string Returns the reference3.
     */
    public function getReference3() {
        return $this->reference3;
    }

    /**
     * Get the reference4.
     *
     * @return string Returns the reference4.
     */
    public function getReference4() {
        return $this->reference4;
    }

    /**
     * Get the taux tva.
     *
     * @return float Returns the taux tva.
     */
    public function getTauxTva() {
        return $this->tauxTva;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string $civilite The civilite.
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the client prospect.
     *
     * @param bool $clientProspect The client prospect.
     */
    public function setClientProspect($clientProspect) {
        $this->clientProspect = $clientProspect;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code commercial.
     *
     * @param string $codeCommercial The code commercial.
     */
    public function setCodeCommercial($codeCommercial) {
        $this->codeCommercial = $codeCommercial;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date devis.
     *
     * @param DateTime|null $dateDevis The date devis.
     */
    public function setDateDevis(DateTime $dateDevis = null) {
        $this->dateDevis = $dateDevis;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
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
     * Set the montant ht.
     *
     * @param float $montantHt The montant ht.
     */
    public function setMontantHt($montantHt) {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the nom adresse.
     *
     * @param string $nomAdresse The nom adresse.
     */
    public function setNomAdresse($nomAdresse) {
        $this->nomAdresse = $nomAdresse;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string $nomSuite2 The nom suite2.
     */
    public function setNomSuite2($nomSuite2) {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string $nomSuite3 The nom suite3.
     */
    public function setNomSuite3($nomSuite3) {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int $numeroPj The numero pj.
     */
    public function setNumeroPj($numeroPj) {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the reference1.
     *
     * @param string $reference1 The reference1.
     */
    public function setReference1($reference1) {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * Set the reference2.
     *
     * @param string $reference2 The reference2.
     */
    public function setReference2($reference2) {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * Set the reference3.
     *
     * @param string $reference3 The reference3.
     */
    public function setReference3($reference3) {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * Set the reference4.
     *
     * @param string $reference4 The reference4.
     */
    public function setReference4($reference4) {
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float $tauxTva The taux tva.
     */
    public function setTauxTva($tauxTva) {
        $this->tauxTva = $tauxTva;
        return $this;
    }
}
