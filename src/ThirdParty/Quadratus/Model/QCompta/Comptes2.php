<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Comptes2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Comptes2 {

    /**
     * Affacturage.
     *
     * @var bool
     */
    private $affacturage;

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

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
     * Complement suite.
     *
     * @var string
     */
    private $complementSuite;

    /**
     * Contrepartie auto.
     *
     * @var string
     */
    private $contrepartieAuto;

    /**
     * Cpt four affacturage.
     *
     * @var string
     */
    private $cptFourAffacturage;

    /**
     * Cpt origine.
     *
     * @var string
     */
    private $cptOrigine;

    /**
     * Dom banque.
     *
     * @var string
     */
    private $domBanque;

    /**
     * Dom banque2.
     *
     * @var string
     */
    private $domBanque2;

    /**
     * Dom banque3.
     *
     * @var string
     */
    private $domBanque3;

    /**
     * Echeance fin decade.
     *
     * @var bool
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool
     */
    private $echeanceFinQuinzaine;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Iban code imput frais.
     *
     * @var string
     */
    private $ibanCodeImputFrais;

    /**
     * Ident tva.
     *
     * @var string
     */
    private $identTva;

    /**
     * Jour depart echeance.
     *
     * @var int
     */
    private $jourDepartEcheance;

    /**
     * Mode paiement.
     *
     * @var string
     */
    private $modePaiement;

    /**
     * Nb jours echeance.
     *
     * @var string
     */
    private $nbJoursEcheance;

    /**
     * Niveau relance.
     *
     * @var string
     */
    private $niveauRelance;

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
     * Num cpt stock.
     *
     * @var string
     */
    private $numCptStock;

    /**
     * Num mandat.
     *
     * @var int
     */
    private $numMandat;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Pays.
     *
     * @var string
     */
    private $pays;

    /**
     * Profession.
     *
     * @var string
     */
    private $profession;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Rib2.
     *
     * @var string
     */
    private $rib2;

    /**
     * Rib3.
     *
     * @var string
     */
    private $rib3;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Suivi stock.
     *
     * @var bool
     */
    private $suiviStock;

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
     * Terme echeance le.
     *
     * @var string
     */
    private $termeEcheanceLe;

    /**
     * Type suivi.
     *
     * @var string
     */
    private $typeSuivi;

    /**
     * Zip code.
     *
     * @var string
     */
    private $zipCode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the affacturage.
     *
     * @return bool Returns the affacturage.
     */
    public function getAffacturage() {
        return $this->affacturage;
    }

    /**
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
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
     * Get the complement suite.
     *
     * @return string Returns the complement suite.
     */
    public function getComplementSuite() {
        return $this->complementSuite;
    }

    /**
     * Get the contrepartie auto.
     *
     * @return string Returns the contrepartie auto.
     */
    public function getContrepartieAuto() {
        return $this->contrepartieAuto;
    }

    /**
     * Get the cpt four affacturage.
     *
     * @return string Returns the cpt four affacturage.
     */
    public function getCptFourAffacturage() {
        return $this->cptFourAffacturage;
    }

    /**
     * Get the cpt origine.
     *
     * @return string Returns the cpt origine.
     */
    public function getCptOrigine() {
        return $this->cptOrigine;
    }

    /**
     * Get the dom banque.
     *
     * @return string Returns the dom banque.
     */
    public function getDomBanque() {
        return $this->domBanque;
    }

    /**
     * Get the dom banque2.
     *
     * @return string Returns the dom banque2.
     */
    public function getDomBanque2() {
        return $this->domBanque2;
    }

    /**
     * Get the dom banque3.
     *
     * @return string Returns the dom banque3.
     */
    public function getDomBanque3() {
        return $this->domBanque3;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return bool Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade() {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine() {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
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
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the iban code imput frais.
     *
     * @return string Returns the iban code imput frais.
     */
    public function getIbanCodeImputFrais() {
        return $this->ibanCodeImputFrais;
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
     * Get the jour depart echeance.
     *
     * @return int Returns the jour depart echeance.
     */
    public function getJourDepartEcheance() {
        return $this->jourDepartEcheance;
    }

    /**
     * Get the mode paiement.
     *
     * @return string Returns the mode paiement.
     */
    public function getModePaiement() {
        return $this->modePaiement;
    }

    /**
     * Get the nb jours echeance.
     *
     * @return string Returns the nb jours echeance.
     */
    public function getNbJoursEcheance() {
        return $this->nbJoursEcheance;
    }

    /**
     * Get the niveau relance.
     *
     * @return string Returns the niveau relance.
     */
    public function getNiveauRelance() {
        return $this->niveauRelance;
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
     * Get the num cpt stock.
     *
     * @return string Returns the num cpt stock.
     */
    public function getNumCptStock() {
        return $this->numCptStock;
    }

    /**
     * Get the num mandat.
     *
     * @return int Returns the num mandat.
     */
    public function getNumMandat() {
        return $this->numMandat;
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
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the pays.
     *
     * @return string Returns the pays.
     */
    public function getPays() {
        return $this->pays;
    }

    /**
     * Get the profession.
     *
     * @return string Returns the profession.
     */
    public function getProfession() {
        return $this->profession;
    }

    /**
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
    }

    /**
     * Get the rib2.
     *
     * @return string Returns the rib2.
     */
    public function getRib2() {
        return $this->rib2;
    }

    /**
     * Get the rib3.
     *
     * @return string Returns the rib3.
     */
    public function getRib3() {
        return $this->rib3;
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
     * Get the suivi stock.
     *
     * @return bool Returns the suivi stock.
     */
    public function getSuiviStock() {
        return $this->suiviStock;
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
     * Get the terme echeance le.
     *
     * @return string Returns the terme echeance le.
     */
    public function getTermeEcheanceLe() {
        return $this->termeEcheanceLe;
    }

    /**
     * Get the type suivi.
     *
     * @return string Returns the type suivi.
     */
    public function getTypeSuivi() {
        return $this->typeSuivi;
    }

    /**
     * Get the zip code.
     *
     * @return string Returns the zip code.
     */
    public function getZipCode() {
        return $this->zipCode;
    }

    /**
     * Set the affacturage.
     *
     * @param bool $affacturage The affacturage.
     */
    public function setAffacturage($affacturage) {
        $this->affacturage = $affacturage;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string $bic The bic.
     */
    public function setBic($bic) {
        $this->bic = $bic;
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
     * Set the complement suite.
     *
     * @param string $complementSuite The complement suite.
     */
    public function setComplementSuite($complementSuite) {
        $this->complementSuite = $complementSuite;
        return $this;
    }

    /**
     * Set the contrepartie auto.
     *
     * @param string $contrepartieAuto The contrepartie auto.
     */
    public function setContrepartieAuto($contrepartieAuto) {
        $this->contrepartieAuto = $contrepartieAuto;
        return $this;
    }

    /**
     * Set the cpt four affacturage.
     *
     * @param string $cptFourAffacturage The cpt four affacturage.
     */
    public function setCptFourAffacturage($cptFourAffacturage) {
        $this->cptFourAffacturage = $cptFourAffacturage;
        return $this;
    }

    /**
     * Set the cpt origine.
     *
     * @param string $cptOrigine The cpt origine.
     */
    public function setCptOrigine($cptOrigine) {
        $this->cptOrigine = $cptOrigine;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the dom banque2.
     *
     * @param string $domBanque2 The dom banque2.
     */
    public function setDomBanque2($domBanque2) {
        $this->domBanque2 = $domBanque2;
        return $this;
    }

    /**
     * Set the dom banque3.
     *
     * @param string $domBanque3 The dom banque3.
     */
    public function setDomBanque3($domBanque3) {
        $this->domBanque3 = $domBanque3;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool $echeanceFinDecade The echeance fin decade.
     */
    public function setEcheanceFinDecade($echeanceFinDecade) {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool $echeanceFinQuinzaine The echeance fin quinzaine.
     */
    public function setEcheanceFinQuinzaine($echeanceFinQuinzaine) {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     */
    public function setEmail($email) {
        $this->email = $email;
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
     * Set the iban.
     *
     * @param string $iban The iban.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the iban code imput frais.
     *
     * @param string $ibanCodeImputFrais The iban code imput frais.
     */
    public function setIbanCodeImputFrais($ibanCodeImputFrais) {
        $this->ibanCodeImputFrais = $ibanCodeImputFrais;
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
     * Set the jour depart echeance.
     *
     * @param int $jourDepartEcheance The jour depart echeance.
     */
    public function setJourDepartEcheance($jourDepartEcheance) {
        $this->jourDepartEcheance = $jourDepartEcheance;
        return $this;
    }

    /**
     * Set the mode paiement.
     *
     * @param string $modePaiement The mode paiement.
     */
    public function setModePaiement($modePaiement) {
        $this->modePaiement = $modePaiement;
        return $this;
    }

    /**
     * Set the nb jours echeance.
     *
     * @param string $nbJoursEcheance The nb jours echeance.
     */
    public function setNbJoursEcheance($nbJoursEcheance) {
        $this->nbJoursEcheance = $nbJoursEcheance;
        return $this;
    }

    /**
     * Set the niveau relance.
     *
     * @param string $niveauRelance The niveau relance.
     */
    public function setNiveauRelance($niveauRelance) {
        $this->niveauRelance = $niveauRelance;
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
     * Set the num cpt stock.
     *
     * @param string $numCptStock The num cpt stock.
     */
    public function setNumCptStock($numCptStock) {
        $this->numCptStock = $numCptStock;
        return $this;
    }

    /**
     * Set the num mandat.
     *
     * @param int $numMandat The num mandat.
     */
    public function setNumMandat($numMandat) {
        $this->numMandat = $numMandat;
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
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the pays.
     *
     * @param string $pays The pays.
     */
    public function setPays($pays) {
        $this->pays = $pays;
        return $this;
    }

    /**
     * Set the profession.
     *
     * @param string $profession The profession.
     */
    public function setProfession($profession) {
        $this->profession = $profession;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the rib2.
     *
     * @param string $rib2 The rib2.
     */
    public function setRib2($rib2) {
        $this->rib2 = $rib2;
        return $this;
    }

    /**
     * Set the rib3.
     *
     * @param string $rib3 The rib3.
     */
    public function setRib3($rib3) {
        $this->rib3 = $rib3;
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
     * Set the suivi stock.
     *
     * @param bool $suiviStock The suivi stock.
     */
    public function setSuiviStock($suiviStock) {
        $this->suiviStock = $suiviStock;
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
     * Set the terme echeance le.
     *
     * @param string $termeEcheanceLe The terme echeance le.
     */
    public function setTermeEcheanceLe($termeEcheanceLe) {
        $this->termeEcheanceLe = $termeEcheanceLe;
        return $this;
    }

    /**
     * Set the type suivi.
     *
     * @param string $typeSuivi The type suivi.
     */
    public function setTypeSuivi($typeSuivi) {
        $this->typeSuivi = $typeSuivi;
        return $this;
    }

    /**
     * Set the zip code.
     *
     * @param string $zipCode The zip code.
     */
    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
        return $this;
    }
}
