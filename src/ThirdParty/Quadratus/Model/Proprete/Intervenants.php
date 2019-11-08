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
 * Intervenants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Intervenants {

    /**
     * Ape.
     *
     * @var string
     */
    private $ape;

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

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
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Ident tva.
     *
     * @var string
     */
    private $identTva;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Nom marital.
     *
     * @var string
     */
    private $nomMarital;

    /**
     * Nom responsable.
     *
     * @var string
     */
    private $nomResponsable;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

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
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Portable1.
     *
     * @var string
     */
    private $portable1;

    /**
     * Portable2.
     *
     * @var string
     */
    private $portable2;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Qualite.
     *
     * @var string
     */
    private $qualite;

    /**
     * Rc.
     *
     * @var string
     */
    private $rc;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Tel2.
     *
     * @var string
     */
    private $tel2;

    /**
     * Tel voiture.
     *
     * @var string
     */
    private $telVoiture;

    /**
     * Telex.
     *
     * @var string
     */
    private $telex;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ape.
     *
     * @return string Returns the ape.
     */
    public function getApe() {
        return $this->ape;
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
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
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
     * Get the code officiel commune.
     *
     * @return string Returns the code officiel commune.
     */
    public function getCodeOfficielCommune() {
        return $this->codeOfficielCommune;
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
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat() {
        return $this->dateCreat;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the ident tva.
     *
     * @return string Returns the ident tva.
     */
    public function getIdentTva() {
        return $this->identTva;
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
     * Get the nom marital.
     *
     * @return string Returns the nom marital.
     */
    public function getNomMarital() {
        return $this->nomMarital;
    }

    /**
     * Get the nom responsable.
     *
     * @return string Returns the nom responsable.
     */
    public function getNomResponsable() {
        return $this->nomResponsable;
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
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the portable1.
     *
     * @return string Returns the portable1.
     */
    public function getPortable1() {
        return $this->portable1;
    }

    /**
     * Get the portable2.
     *
     * @return string Returns the portable2.
     */
    public function getPortable2() {
        return $this->portable2;
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
     * Get the qualite.
     *
     * @return string Returns the qualite.
     */
    public function getQualite() {
        return $this->qualite;
    }

    /**
     * Get the rc.
     *
     * @return string Returns the rc.
     */
    public function getRc() {
        return $this->rc;
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
     * Get the tel1.
     *
     * @return string Returns the tel1.
     */
    public function getTel1() {
        return $this->tel1;
    }

    /**
     * Get the tel2.
     *
     * @return string Returns the tel2.
     */
    public function getTel2() {
        return $this->tel2;
    }

    /**
     * Get the tel voiture.
     *
     * @return string Returns the tel voiture.
     */
    public function getTelVoiture() {
        return $this->telVoiture;
    }

    /**
     * Get the telex.
     *
     * @return string Returns the telex.
     */
    public function getTelex() {
        return $this->telex;
    }

    /**
     * Set the ape.
     *
     * @param string $ape The ape.
     */
    public function setApe($ape) {
        $this->ape = $ape;
        return $this;
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
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
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
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
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
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     */
    public function setDateCreat(DateTime $dateCreat = null) {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the ident tva.
     *
     * @param string $identTva The ident tva.
     */
    public function setIdentTva($identTva) {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     */
    public function setNom($nom) {
        $this->nom = $nom;
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
     * Set the nom responsable.
     *
     * @param string $nomResponsable The nom responsable.
     */
    public function setNomResponsable($nomResponsable) {
        $this->nomResponsable = $nomResponsable;
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
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the portable1.
     *
     * @param string $portable1 The portable1.
     */
    public function setPortable1($portable1) {
        $this->portable1 = $portable1;
        return $this;
    }

    /**
     * Set the portable2.
     *
     * @param string $portable2 The portable2.
     */
    public function setPortable2($portable2) {
        $this->portable2 = $portable2;
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
     * Set the qualite.
     *
     * @param string $qualite The qualite.
     */
    public function setQualite($qualite) {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the rc.
     *
     * @param string $rc The rc.
     */
    public function setRc($rc) {
        $this->rc = $rc;
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
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel voiture.
     *
     * @param string $telVoiture The tel voiture.
     */
    public function setTelVoiture($telVoiture) {
        $this->telVoiture = $telVoiture;
        return $this;
    }

    /**
     * Set the telex.
     *
     * @param string $telex The telex.
     */
    public function setTelex($telex) {
        $this->telex = $telex;
        return $this;
    }
}
