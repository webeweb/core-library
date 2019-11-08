<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Intervenants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Intervenants {

    /**
     * Adresse site client.
     *
     * @var string
     */
    private $adresseSiteClient;

    /**
     * Adresse transpac.
     *
     * @var string
     */
    private $adresseTranspac;

    /**
     * Age.
     *
     * @var string
     */
    private $age;

    /**
     * Autoriser acces internet.
     *
     * @var bool
     */
    private $autoriserAccesInternet;

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
     * Btq2.
     *
     * @var string
     */
    private $btq2;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Bureau distributeur2.
     *
     * @var string
     */
    private $bureauDistributeur2;

    /**
     * Capital.
     *
     * @var float
     */
    private $capital;

    /**
     * Capital monnaie.
     *
     * @var string
     */
    private $capitalMonnaie;

    /**
     * Categorie juridique.
     *
     * @var string
     */
    private $categorieJuridique;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code epoux.
     *
     * @var string
     */
    private $codeEpoux;

    /**
     * Code insee.
     *
     * @var string
     */
    private $codeInsee;

    /**
     * Code naf.
     *
     * @var string
     */
    private $codeNaf;

    /**
     * Code naf2008.
     *
     * @var string
     */
    private $codeNaf2008;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code officiel commune2.
     *
     * @var string
     */
    private $codeOfficielCommune2;

    /**
     * Code pays iso.
     *
     * @var string
     */
    private $codePaysIso;

    /**
     * Code pays iso naiss.
     *
     * @var string
     */
    private $codePaysIsoNaiss;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code postal2.
     *
     * @var string
     */
    private $codePostal2;

    /**
     * Code postal mariage.
     *
     * @var string
     */
    private $codePostalMariage;

    /**
     * Code postal naissance.
     *
     * @var string
     */
    private $codePostalNaissance;

    /**
     * Code postal rc.
     *
     * @var string
     */
    private $codePostalRc;

    /**
     * Code postal rm.
     *
     * @var string
     */
    private $codePostalRm;

    /**
     * Code responsable.
     *
     * @var string
     */
    private $codeResponsable;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Complement2.
     *
     * @var string
     */
    private $complement2;

    /**
     * Complement suite.
     *
     * @var string
     */
    private $complementSuite;

    /**
     * Compteur liens.
     *
     * @var int
     */
    private $compteurLiens;

    /**
     * Contact.
     *
     * @var string
     */
    private $contact;

    /**
     * Creation societe.
     *
     * @var DateTime|null
     */
    private $creationSociete;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date deb activite.
     *
     * @var DateTime|null
     */
    private $dateDebActivite;

    /**
     * Date divorce.
     *
     * @var DateTime|null
     */
    private $dateDivorce;

    /**
     * Date installation.
     *
     * @var DateTime|null
     */
    private $dateInstallation;

    /**
     * Date mariage.
     *
     * @var DateTime|null
     */
    private $dateMariage;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Donnees appel.
     *
     * @var string
     */
    private $donneesAppel;

    /**
     * Droit collab visu documents.
     *
     * @var string
     */
    private $droitCollabVisuDocuments;

    /**
     * Duree societe.
     *
     * @var string
     */
    private $dureeSociete;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Email2.
     *
     * @var string
     */
    private $email2;

    /**
     * Enseigne.
     *
     * @var string
     */
    private $enseigne;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Fax2.
     *
     * @var string
     */
    private $fax2;

    /**
     * Frp cle.
     *
     * @var string
     */
    private $frpCle;

    /**
     * Frp dossier.
     *
     * @var string
     */
    private $frpDossier;

    /**
     * Frp recette.
     *
     * @var string
     */
    private $frpRecette;

    /**
     * Gest juri.
     *
     * @var bool
     */
    private $gestJuri;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Ident tva.
     *
     * @var string
     */
    private $identTva;

    /**
     * Identifiant.
     *
     * @var string
     */
    private $identifiant;

    /**
     * Identifiant internet.
     *
     * @var string
     */
    private $identifiantInternet;

    /**
     * Inscription rc.
     *
     * @var DateTime|null
     */
    private $inscriptionRc;

    /**
     * Inscription rm.
     *
     * @var DateTime|null
     */
    private $inscriptionRm;

    /**
     * Is client.
     *
     * @var string
     */
    private $isClient;

    /**
     * Is fournisseur.
     *
     * @var string
     */
    private $isFournisseur;

    /**
     * Mdp internet.
     *
     * @var string
     */
    private $mdpInternet;

    /**
     * Mission principale.
     *
     * @var string
     */
    private $missionPrincipale;

    /**
     * Nationalite.
     *
     * @var string
     */
    private $nationalite;

    /**
     * Nb enfants.
     *
     * @var string
     */
    private $nbEnfants;

    /**
     * Nb km.
     *
     * @var float
     */
    private $nbKm;

    /**
     * Nie1.
     *
     * @var string
     */
    private $nie1;

    /**
     * Nie2.
     *
     * @var string
     */
    private $nie2;

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
     * Nom marital.
     *
     * @var string
     */
    private $nomMarital;

    /**
     * Nom mere.
     *
     * @var string
     */
    private $nomMere;

    /**
     * Nom pere.
     *
     * @var string
     */
    private $nomPere;

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
     * Nom ville2.
     *
     * @var string
     */
    private $nomVille2;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Nom voie2.
     *
     * @var string
     */
    private $nomVoie2;

    /**
     * Nombre actions.
     *
     * @var int
     */
    private $nombreActions;

    /**
     * Num agrement cga.
     *
     * @var string
     */
    private $numAgrementCga;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Num voie2.
     *
     * @var string
     */
    private $numVoie2;

    /**
     * Pays.
     *
     * @var string
     */
    private $pays;

    /**
     * Pays naissance.
     *
     * @var string
     */
    private $paysNaissance;

    /**
     * Personne physique.
     *
     * @var bool
     */
    private $personnePhysique;

    /**
     * Portable1.
     *
     * @var string
     */
    private $portable1;

    /**
     * Portable12.
     *
     * @var string
     */
    private $portable12;

    /**
     * Portable2.
     *
     * @var string
     */
    private $portable2;

    /**
     * Portable22.
     *
     * @var string
     */
    private $portable22;

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
     * Rc code.
     *
     * @var string
     */
    private $rcCode;

    /**
     * Regime matrimonial.
     *
     * @var string
     */
    private $regimeMatrimonial;

    /**
     * Regime matrimoniale.
     *
     * @var string
     */
    private $regimeMatrimoniale;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Rm.
     *
     * @var string
     */
    private $rm;

    /**
     * Rm code.
     *
     * @var string
     */
    private $rmCode;

    /**
     * Salarie independant.
     *
     * @var string
     */
    private $salarieIndependant;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Situation fam.
     *
     * @var string
     */
    private $situationFam;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Tel12.
     *
     * @var string
     */
    private $tel12;

    /**
     * Tel2.
     *
     * @var string
     */
    private $tel2;

    /**
     * Tel22.
     *
     * @var string
     */
    private $tel22;

    /**
     * Tel voiture.
     *
     * @var string
     */
    private $telVoiture;

    /**
     * Tel voiture2.
     *
     * @var string
     */
    private $telVoiture2;

    /**
     * Telex.
     *
     * @var string
     */
    private $telex;

    /**
     * Telex2.
     *
     * @var string
     */
    private $telex2;

    /**
     * Travail a domicile.
     *
     * @var bool
     */
    private $travailADomicile;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Type societe.
     *
     * @var string
     */
    private $typeSociete;

    /**
     * Ville mariage.
     *
     * @var string
     */
    private $villeMariage;

    /**
     * Ville naissance.
     *
     * @var string
     */
    private $villeNaissance;

    /**
     * Ville rc.
     *
     * @var string
     */
    private $villeRc;

    /**
     * Ville rm.
     *
     * @var string
     */
    private $villeRm;

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
     * Get the adresse site client.
     *
     * @return string Returns the adresse site client.
     */
    public function getAdresseSiteClient() {
        return $this->adresseSiteClient;
    }

    /**
     * Get the adresse transpac.
     *
     * @return string Returns the adresse transpac.
     */
    public function getAdresseTranspac() {
        return $this->adresseTranspac;
    }

    /**
     * Get the age.
     *
     * @return string Returns the age.
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Get the autoriser acces internet.
     *
     * @return bool Returns the autoriser acces internet.
     */
    public function getAutoriserAccesInternet() {
        return $this->autoriserAccesInternet;
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
     * Get the btq2.
     *
     * @return string Returns the btq2.
     */
    public function getBtq2() {
        return $this->btq2;
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
     * Get the bureau distributeur2.
     *
     * @return string Returns the bureau distributeur2.
     */
    public function getBureauDistributeur2() {
        return $this->bureauDistributeur2;
    }

    /**
     * Get the capital.
     *
     * @return float Returns the capital.
     */
    public function getCapital() {
        return $this->capital;
    }

    /**
     * Get the capital monnaie.
     *
     * @return string Returns the capital monnaie.
     */
    public function getCapitalMonnaie() {
        return $this->capitalMonnaie;
    }

    /**
     * Get the categorie juridique.
     *
     * @return string Returns the categorie juridique.
     */
    public function getCategorieJuridique() {
        return $this->categorieJuridique;
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
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code epoux.
     *
     * @return string Returns the code epoux.
     */
    public function getCodeEpoux() {
        return $this->codeEpoux;
    }

    /**
     * Get the code insee.
     *
     * @return string Returns the code insee.
     */
    public function getCodeInsee() {
        return $this->codeInsee;
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
     * Get the code naf2008.
     *
     * @return string Returns the code naf2008.
     */
    public function getCodeNaf2008() {
        return $this->codeNaf2008;
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
     * Get the code officiel commune2.
     *
     * @return string Returns the code officiel commune2.
     */
    public function getCodeOfficielCommune2() {
        return $this->codeOfficielCommune2;
    }

    /**
     * Get the code pays iso.
     *
     * @return string Returns the code pays iso.
     */
    public function getCodePaysIso() {
        return $this->codePaysIso;
    }

    /**
     * Get the code pays iso naiss.
     *
     * @return string Returns the code pays iso naiss.
     */
    public function getCodePaysIsoNaiss() {
        return $this->codePaysIsoNaiss;
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
     * Get the code postal2.
     *
     * @return string Returns the code postal2.
     */
    public function getCodePostal2() {
        return $this->codePostal2;
    }

    /**
     * Get the code postal mariage.
     *
     * @return string Returns the code postal mariage.
     */
    public function getCodePostalMariage() {
        return $this->codePostalMariage;
    }

    /**
     * Get the code postal naissance.
     *
     * @return string Returns the code postal naissance.
     */
    public function getCodePostalNaissance() {
        return $this->codePostalNaissance;
    }

    /**
     * Get the code postal rc.
     *
     * @return string Returns the code postal rc.
     */
    public function getCodePostalRc() {
        return $this->codePostalRc;
    }

    /**
     * Get the code postal rm.
     *
     * @return string Returns the code postal rm.
     */
    public function getCodePostalRm() {
        return $this->codePostalRm;
    }

    /**
     * Get the code responsable.
     *
     * @return string Returns the code responsable.
     */
    public function getCodeResponsable() {
        return $this->codeResponsable;
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
     * Get the complement2.
     *
     * @return string Returns the complement2.
     */
    public function getComplement2() {
        return $this->complement2;
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
     * Get the compteur liens.
     *
     * @return int Returns the compteur liens.
     */
    public function getCompteurLiens() {
        return $this->compteurLiens;
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
     * Get the creation societe.
     *
     * @return DateTime|null Returns the creation societe.
     */
    public function getCreationSociete() {
        return $this->creationSociete;
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
     * Get the date deb activite.
     *
     * @return DateTime|null Returns the date deb activite.
     */
    public function getDateDebActivite() {
        return $this->dateDebActivite;
    }

    /**
     * Get the date divorce.
     *
     * @return DateTime|null Returns the date divorce.
     */
    public function getDateDivorce() {
        return $this->dateDivorce;
    }

    /**
     * Get the date installation.
     *
     * @return DateTime|null Returns the date installation.
     */
    public function getDateInstallation() {
        return $this->dateInstallation;
    }

    /**
     * Get the date mariage.
     *
     * @return DateTime|null Returns the date mariage.
     */
    public function getDateMariage() {
        return $this->dateMariage;
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
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the donnees appel.
     *
     * @return string Returns the donnees appel.
     */
    public function getDonneesAppel() {
        return $this->donneesAppel;
    }

    /**
     * Get the droit collab visu documents.
     *
     * @return string Returns the droit collab visu documents.
     */
    public function getDroitCollabVisuDocuments() {
        return $this->droitCollabVisuDocuments;
    }

    /**
     * Get the duree societe.
     *
     * @return string Returns the duree societe.
     */
    public function getDureeSociete() {
        return $this->dureeSociete;
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
     * Get the email2.
     *
     * @return string Returns the email2.
     */
    public function getEmail2() {
        return $this->email2;
    }

    /**
     * Get the enseigne.
     *
     * @return string Returns the enseigne.
     */
    public function getEnseigne() {
        return $this->enseigne;
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
     * Get the fax2.
     *
     * @return string Returns the fax2.
     */
    public function getFax2() {
        return $this->fax2;
    }

    /**
     * Get the frp cle.
     *
     * @return string Returns the frp cle.
     */
    public function getFrpCle() {
        return $this->frpCle;
    }

    /**
     * Get the frp dossier.
     *
     * @return string Returns the frp dossier.
     */
    public function getFrpDossier() {
        return $this->frpDossier;
    }

    /**
     * Get the frp recette.
     *
     * @return string Returns the frp recette.
     */
    public function getFrpRecette() {
        return $this->frpRecette;
    }

    /**
     * Get the gest juri.
     *
     * @return bool Returns the gest juri.
     */
    public function getGestJuri() {
        return $this->gestJuri;
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
     * Get the ident tva.
     *
     * @return string Returns the ident tva.
     */
    public function getIdentTva() {
        return $this->identTva;
    }

    /**
     * Get the identifiant.
     *
     * @return string Returns the identifiant.
     */
    public function getIdentifiant() {
        return $this->identifiant;
    }

    /**
     * Get the identifiant internet.
     *
     * @return string Returns the identifiant internet.
     */
    public function getIdentifiantInternet() {
        return $this->identifiantInternet;
    }

    /**
     * Get the inscription rc.
     *
     * @return DateTime|null Returns the inscription rc.
     */
    public function getInscriptionRc() {
        return $this->inscriptionRc;
    }

    /**
     * Get the inscription rm.
     *
     * @return DateTime|null Returns the inscription rm.
     */
    public function getInscriptionRm() {
        return $this->inscriptionRm;
    }

    /**
     * Get the is client.
     *
     * @return string Returns the is client.
     */
    public function getIsClient() {
        return $this->isClient;
    }

    /**
     * Get the is fournisseur.
     *
     * @return string Returns the is fournisseur.
     */
    public function getIsFournisseur() {
        return $this->isFournisseur;
    }

    /**
     * Get the mdp internet.
     *
     * @return string Returns the mdp internet.
     */
    public function getMdpInternet() {
        return $this->mdpInternet;
    }

    /**
     * Get the mission principale.
     *
     * @return string Returns the mission principale.
     */
    public function getMissionPrincipale() {
        return $this->missionPrincipale;
    }

    /**
     * Get the nationalite.
     *
     * @return string Returns the nationalite.
     */
    public function getNationalite() {
        return $this->nationalite;
    }

    /**
     * Get the nb enfants.
     *
     * @return string Returns the nb enfants.
     */
    public function getNbEnfants() {
        return $this->nbEnfants;
    }

    /**
     * Get the nb km.
     *
     * @return float Returns the nb km.
     */
    public function getNbKm() {
        return $this->nbKm;
    }

    /**
     * Get the nie1.
     *
     * @return string Returns the nie1.
     */
    public function getNie1() {
        return $this->nie1;
    }

    /**
     * Get the nie2.
     *
     * @return string Returns the nie2.
     */
    public function getNie2() {
        return $this->nie2;
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
     * Get the nom marital.
     *
     * @return string Returns the nom marital.
     */
    public function getNomMarital() {
        return $this->nomMarital;
    }

    /**
     * Get the nom mere.
     *
     * @return string Returns the nom mere.
     */
    public function getNomMere() {
        return $this->nomMere;
    }

    /**
     * Get the nom pere.
     *
     * @return string Returns the nom pere.
     */
    public function getNomPere() {
        return $this->nomPere;
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
     * Get the nom ville2.
     *
     * @return string Returns the nom ville2.
     */
    public function getNomVille2() {
        return $this->nomVille2;
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
     * Get the nom voie2.
     *
     * @return string Returns the nom voie2.
     */
    public function getNomVoie2() {
        return $this->nomVoie2;
    }

    /**
     * Get the nombre actions.
     *
     * @return int Returns the nombre actions.
     */
    public function getNombreActions() {
        return $this->nombreActions;
    }

    /**
     * Get the num agrement cga.
     *
     * @return string Returns the num agrement cga.
     */
    public function getNumAgrementCga() {
        return $this->numAgrementCga;
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
     * Get the num voie2.
     *
     * @return string Returns the num voie2.
     */
    public function getNumVoie2() {
        return $this->numVoie2;
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
     * Get the pays naissance.
     *
     * @return string Returns the pays naissance.
     */
    public function getPaysNaissance() {
        return $this->paysNaissance;
    }

    /**
     * Get the personne physique.
     *
     * @return bool Returns the personne physique.
     */
    public function getPersonnePhysique() {
        return $this->personnePhysique;
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
     * Get the portable12.
     *
     * @return string Returns the portable12.
     */
    public function getPortable12() {
        return $this->portable12;
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
     * Get the portable22.
     *
     * @return string Returns the portable22.
     */
    public function getPortable22() {
        return $this->portable22;
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
     * Get the rc code.
     *
     * @return string Returns the rc code.
     */
    public function getRcCode() {
        return $this->rcCode;
    }

    /**
     * Get the regime matrimonial.
     *
     * @return string Returns the regime matrimonial.
     */
    public function getRegimeMatrimonial() {
        return $this->regimeMatrimonial;
    }

    /**
     * Get the regime matrimoniale.
     *
     * @return string Returns the regime matrimoniale.
     */
    public function getRegimeMatrimoniale() {
        return $this->regimeMatrimoniale;
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
     * Get the rm.
     *
     * @return string Returns the rm.
     */
    public function getRm() {
        return $this->rm;
    }

    /**
     * Get the rm code.
     *
     * @return string Returns the rm code.
     */
    public function getRmCode() {
        return $this->rmCode;
    }

    /**
     * Get the salarie independant.
     *
     * @return string Returns the salarie independant.
     */
    public function getSalarieIndependant() {
        return $this->salarieIndependant;
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
     * Get the situation fam.
     *
     * @return string Returns the situation fam.
     */
    public function getSituationFam() {
        return $this->situationFam;
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
     * Get the tel12.
     *
     * @return string Returns the tel12.
     */
    public function getTel12() {
        return $this->tel12;
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
     * Get the tel22.
     *
     * @return string Returns the tel22.
     */
    public function getTel22() {
        return $this->tel22;
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
     * Get the tel voiture2.
     *
     * @return string Returns the tel voiture2.
     */
    public function getTelVoiture2() {
        return $this->telVoiture2;
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
     * Get the telex2.
     *
     * @return string Returns the telex2.
     */
    public function getTelex2() {
        return $this->telex2;
    }

    /**
     * Get the travail a domicile.
     *
     * @return bool Returns the travail a domicile.
     */
    public function getTravailADomicile() {
        return $this->travailADomicile;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the type societe.
     *
     * @return string Returns the type societe.
     */
    public function getTypeSociete() {
        return $this->typeSociete;
    }

    /**
     * Get the ville mariage.
     *
     * @return string Returns the ville mariage.
     */
    public function getVilleMariage() {
        return $this->villeMariage;
    }

    /**
     * Get the ville naissance.
     *
     * @return string Returns the ville naissance.
     */
    public function getVilleNaissance() {
        return $this->villeNaissance;
    }

    /**
     * Get the ville rc.
     *
     * @return string Returns the ville rc.
     */
    public function getVilleRc() {
        return $this->villeRc;
    }

    /**
     * Get the ville rm.
     *
     * @return string Returns the ville rm.
     */
    public function getVilleRm() {
        return $this->villeRm;
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
     * Set the adresse site client.
     *
     * @param string $adresseSiteClient The adresse site client.
     */
    public function setAdresseSiteClient($adresseSiteClient) {
        $this->adresseSiteClient = $adresseSiteClient;
        return $this;
    }

    /**
     * Set the adresse transpac.
     *
     * @param string $adresseTranspac The adresse transpac.
     */
    public function setAdresseTranspac($adresseTranspac) {
        $this->adresseTranspac = $adresseTranspac;
        return $this;
    }

    /**
     * Set the age.
     *
     * @param string $age The age.
     */
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    /**
     * Set the autoriser acces internet.
     *
     * @param bool $autoriserAccesInternet The autoriser acces internet.
     */
    public function setAutoriserAccesInternet($autoriserAccesInternet) {
        $this->autoriserAccesInternet = $autoriserAccesInternet;
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
     * Set the btq2.
     *
     * @param string $btq2 The btq2.
     */
    public function setBtq2($btq2) {
        $this->btq2 = $btq2;
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
     * Set the bureau distributeur2.
     *
     * @param string $bureauDistributeur2 The bureau distributeur2.
     */
    public function setBureauDistributeur2($bureauDistributeur2) {
        $this->bureauDistributeur2 = $bureauDistributeur2;
        return $this;
    }

    /**
     * Set the capital.
     *
     * @param float $capital The capital.
     */
    public function setCapital($capital) {
        $this->capital = $capital;
        return $this;
    }

    /**
     * Set the capital monnaie.
     *
     * @param string $capitalMonnaie The capital monnaie.
     */
    public function setCapitalMonnaie($capitalMonnaie) {
        $this->capitalMonnaie = $capitalMonnaie;
        return $this;
    }

    /**
     * Set the categorie juridique.
     *
     * @param string $categorieJuridique The categorie juridique.
     */
    public function setCategorieJuridique($categorieJuridique) {
        $this->categorieJuridique = $categorieJuridique;
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
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code epoux.
     *
     * @param string $codeEpoux The code epoux.
     */
    public function setCodeEpoux($codeEpoux) {
        $this->codeEpoux = $codeEpoux;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string $codeNaf The code naf.
     */
    public function setCodeNaf($codeNaf) {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code naf2008.
     *
     * @param string $codeNaf2008 The code naf2008.
     */
    public function setCodeNaf2008($codeNaf2008) {
        $this->codeNaf2008 = $codeNaf2008;
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
     * Set the code officiel commune2.
     *
     * @param string $codeOfficielCommune2 The code officiel commune2.
     */
    public function setCodeOfficielCommune2($codeOfficielCommune2) {
        $this->codeOfficielCommune2 = $codeOfficielCommune2;
        return $this;
    }

    /**
     * Set the code pays iso.
     *
     * @param string $codePaysIso The code pays iso.
     */
    public function setCodePaysIso($codePaysIso) {
        $this->codePaysIso = $codePaysIso;
        return $this;
    }

    /**
     * Set the code pays iso naiss.
     *
     * @param string $codePaysIsoNaiss The code pays iso naiss.
     */
    public function setCodePaysIsoNaiss($codePaysIsoNaiss) {
        $this->codePaysIsoNaiss = $codePaysIsoNaiss;
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
     * Set the code postal2.
     *
     * @param string $codePostal2 The code postal2.
     */
    public function setCodePostal2($codePostal2) {
        $this->codePostal2 = $codePostal2;
        return $this;
    }

    /**
     * Set the code postal mariage.
     *
     * @param string $codePostalMariage The code postal mariage.
     */
    public function setCodePostalMariage($codePostalMariage) {
        $this->codePostalMariage = $codePostalMariage;
        return $this;
    }

    /**
     * Set the code postal naissance.
     *
     * @param string $codePostalNaissance The code postal naissance.
     */
    public function setCodePostalNaissance($codePostalNaissance) {
        $this->codePostalNaissance = $codePostalNaissance;
        return $this;
    }

    /**
     * Set the code postal rc.
     *
     * @param string $codePostalRc The code postal rc.
     */
    public function setCodePostalRc($codePostalRc) {
        $this->codePostalRc = $codePostalRc;
        return $this;
    }

    /**
     * Set the code postal rm.
     *
     * @param string $codePostalRm The code postal rm.
     */
    public function setCodePostalRm($codePostalRm) {
        $this->codePostalRm = $codePostalRm;
        return $this;
    }

    /**
     * Set the code responsable.
     *
     * @param string $codeResponsable The code responsable.
     */
    public function setCodeResponsable($codeResponsable) {
        $this->codeResponsable = $codeResponsable;
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
     * Set the complement2.
     *
     * @param string $complement2 The complement2.
     */
    public function setComplement2($complement2) {
        $this->complement2 = $complement2;
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
     * Set the compteur liens.
     *
     * @param int $compteurLiens The compteur liens.
     */
    public function setCompteurLiens($compteurLiens) {
        $this->compteurLiens = $compteurLiens;
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
     * Set the creation societe.
     *
     * @param DateTime|null $creationSociete The creation societe.
     */
    public function setCreationSociete(DateTime $creationSociete = null) {
        $this->creationSociete = $creationSociete;
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
     * Set the date deb activite.
     *
     * @param DateTime|null $dateDebActivite The date deb activite.
     */
    public function setDateDebActivite(DateTime $dateDebActivite = null) {
        $this->dateDebActivite = $dateDebActivite;
        return $this;
    }

    /**
     * Set the date divorce.
     *
     * @param DateTime|null $dateDivorce The date divorce.
     */
    public function setDateDivorce(DateTime $dateDivorce = null) {
        $this->dateDivorce = $dateDivorce;
        return $this;
    }

    /**
     * Set the date installation.
     *
     * @param DateTime|null $dateInstallation The date installation.
     */
    public function setDateInstallation(DateTime $dateInstallation = null) {
        $this->dateInstallation = $dateInstallation;
        return $this;
    }

    /**
     * Set the date mariage.
     *
     * @param DateTime|null $dateMariage The date mariage.
     */
    public function setDateMariage(DateTime $dateMariage = null) {
        $this->dateMariage = $dateMariage;
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
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the donnees appel.
     *
     * @param string $donneesAppel The donnees appel.
     */
    public function setDonneesAppel($donneesAppel) {
        $this->donneesAppel = $donneesAppel;
        return $this;
    }

    /**
     * Set the droit collab visu documents.
     *
     * @param string $droitCollabVisuDocuments The droit collab visu documents.
     */
    public function setDroitCollabVisuDocuments($droitCollabVisuDocuments) {
        $this->droitCollabVisuDocuments = $droitCollabVisuDocuments;
        return $this;
    }

    /**
     * Set the duree societe.
     *
     * @param string $dureeSociete The duree societe.
     */
    public function setDureeSociete($dureeSociete) {
        $this->dureeSociete = $dureeSociete;
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
     * Set the email2.
     *
     * @param string $email2 The email2.
     */
    public function setEmail2($email2) {
        $this->email2 = $email2;
        return $this;
    }

    /**
     * Set the enseigne.
     *
     * @param string $enseigne The enseigne.
     */
    public function setEnseigne($enseigne) {
        $this->enseigne = $enseigne;
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
     * Set the fax2.
     *
     * @param string $fax2 The fax2.
     */
    public function setFax2($fax2) {
        $this->fax2 = $fax2;
        return $this;
    }

    /**
     * Set the frp cle.
     *
     * @param string $frpCle The frp cle.
     */
    public function setFrpCle($frpCle) {
        $this->frpCle = $frpCle;
        return $this;
    }

    /**
     * Set the frp dossier.
     *
     * @param string $frpDossier The frp dossier.
     */
    public function setFrpDossier($frpDossier) {
        $this->frpDossier = $frpDossier;
        return $this;
    }

    /**
     * Set the frp recette.
     *
     * @param string $frpRecette The frp recette.
     */
    public function setFrpRecette($frpRecette) {
        $this->frpRecette = $frpRecette;
        return $this;
    }

    /**
     * Set the gest juri.
     *
     * @param bool $gestJuri The gest juri.
     */
    public function setGestJuri($gestJuri) {
        $this->gestJuri = $gestJuri;
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
     * Set the ident tva.
     *
     * @param string $identTva The ident tva.
     */
    public function setIdentTva($identTva) {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the identifiant.
     *
     * @param string $identifiant The identifiant.
     */
    public function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
        return $this;
    }

    /**
     * Set the identifiant internet.
     *
     * @param string $identifiantInternet The identifiant internet.
     */
    public function setIdentifiantInternet($identifiantInternet) {
        $this->identifiantInternet = $identifiantInternet;
        return $this;
    }

    /**
     * Set the inscription rc.
     *
     * @param DateTime|null $inscriptionRc The inscription rc.
     */
    public function setInscriptionRc(DateTime $inscriptionRc = null) {
        $this->inscriptionRc = $inscriptionRc;
        return $this;
    }

    /**
     * Set the inscription rm.
     *
     * @param DateTime|null $inscriptionRm The inscription rm.
     */
    public function setInscriptionRm(DateTime $inscriptionRm = null) {
        $this->inscriptionRm = $inscriptionRm;
        return $this;
    }

    /**
     * Set the is client.
     *
     * @param string $isClient The is client.
     */
    public function setIsClient($isClient) {
        $this->isClient = $isClient;
        return $this;
    }

    /**
     * Set the is fournisseur.
     *
     * @param string $isFournisseur The is fournisseur.
     */
    public function setIsFournisseur($isFournisseur) {
        $this->isFournisseur = $isFournisseur;
        return $this;
    }

    /**
     * Set the mdp internet.
     *
     * @param string $mdpInternet The mdp internet.
     */
    public function setMdpInternet($mdpInternet) {
        $this->mdpInternet = $mdpInternet;
        return $this;
    }

    /**
     * Set the mission principale.
     *
     * @param string $missionPrincipale The mission principale.
     */
    public function setMissionPrincipale($missionPrincipale) {
        $this->missionPrincipale = $missionPrincipale;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string $nationalite The nationalite.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb enfants.
     *
     * @param string $nbEnfants The nb enfants.
     */
    public function setNbEnfants($nbEnfants) {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }

    /**
     * Set the nb km.
     *
     * @param float $nbKm The nb km.
     */
    public function setNbKm($nbKm) {
        $this->nbKm = $nbKm;
        return $this;
    }

    /**
     * Set the nie1.
     *
     * @param string $nie1 The nie1.
     */
    public function setNie1($nie1) {
        $this->nie1 = $nie1;
        return $this;
    }

    /**
     * Set the nie2.
     *
     * @param string $nie2 The nie2.
     */
    public function setNie2($nie2) {
        $this->nie2 = $nie2;
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
     * Set the nom mere.
     *
     * @param string $nomMere The nom mere.
     */
    public function setNomMere($nomMere) {
        $this->nomMere = $nomMere;
        return $this;
    }

    /**
     * Set the nom pere.
     *
     * @param string $nomPere The nom pere.
     */
    public function setNomPere($nomPere) {
        $this->nomPere = $nomPere;
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
     * Set the nom ville2.
     *
     * @param string $nomVille2 The nom ville2.
     */
    public function setNomVille2($nomVille2) {
        $this->nomVille2 = $nomVille2;
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
     * Set the nom voie2.
     *
     * @param string $nomVoie2 The nom voie2.
     */
    public function setNomVoie2($nomVoie2) {
        $this->nomVoie2 = $nomVoie2;
        return $this;
    }

    /**
     * Set the nombre actions.
     *
     * @param int $nombreActions The nombre actions.
     */
    public function setNombreActions($nombreActions) {
        $this->nombreActions = $nombreActions;
        return $this;
    }

    /**
     * Set the num agrement cga.
     *
     * @param string $numAgrementCga The num agrement cga.
     */
    public function setNumAgrementCga($numAgrementCga) {
        $this->numAgrementCga = $numAgrementCga;
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
     * Set the num voie2.
     *
     * @param string $numVoie2 The num voie2.
     */
    public function setNumVoie2($numVoie2) {
        $this->numVoie2 = $numVoie2;
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
     * Set the pays naissance.
     *
     * @param string $paysNaissance The pays naissance.
     */
    public function setPaysNaissance($paysNaissance) {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }

    /**
     * Set the personne physique.
     *
     * @param bool $personnePhysique The personne physique.
     */
    public function setPersonnePhysique($personnePhysique) {
        $this->personnePhysique = $personnePhysique;
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
     * Set the portable12.
     *
     * @param string $portable12 The portable12.
     */
    public function setPortable12($portable12) {
        $this->portable12 = $portable12;
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
     * Set the portable22.
     *
     * @param string $portable22 The portable22.
     */
    public function setPortable22($portable22) {
        $this->portable22 = $portable22;
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
     * Set the rc code.
     *
     * @param string $rcCode The rc code.
     */
    public function setRcCode($rcCode) {
        $this->rcCode = $rcCode;
        return $this;
    }

    /**
     * Set the regime matrimonial.
     *
     * @param string $regimeMatrimonial The regime matrimonial.
     */
    public function setRegimeMatrimonial($regimeMatrimonial) {
        $this->regimeMatrimonial = $regimeMatrimonial;
        return $this;
    }

    /**
     * Set the regime matrimoniale.
     *
     * @param string $regimeMatrimoniale The regime matrimoniale.
     */
    public function setRegimeMatrimoniale($regimeMatrimoniale) {
        $this->regimeMatrimoniale = $regimeMatrimoniale;
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
     * Set the rm.
     *
     * @param string $rm The rm.
     */
    public function setRm($rm) {
        $this->rm = $rm;
        return $this;
    }

    /**
     * Set the rm code.
     *
     * @param string $rmCode The rm code.
     */
    public function setRmCode($rmCode) {
        $this->rmCode = $rmCode;
        return $this;
    }

    /**
     * Set the salarie independant.
     *
     * @param string $salarieIndependant The salarie independant.
     */
    public function setSalarieIndependant($salarieIndependant) {
        $this->salarieIndependant = $salarieIndependant;
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
     * Set the situation fam.
     *
     * @param string $situationFam The situation fam.
     */
    public function setSituationFam($situationFam) {
        $this->situationFam = $situationFam;
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
     * Set the tel12.
     *
     * @param string $tel12 The tel12.
     */
    public function setTel12($tel12) {
        $this->tel12 = $tel12;
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
     * Set the tel22.
     *
     * @param string $tel22 The tel22.
     */
    public function setTel22($tel22) {
        $this->tel22 = $tel22;
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
     * Set the tel voiture2.
     *
     * @param string $telVoiture2 The tel voiture2.
     */
    public function setTelVoiture2($telVoiture2) {
        $this->telVoiture2 = $telVoiture2;
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

    /**
     * Set the telex2.
     *
     * @param string $telex2 The telex2.
     */
    public function setTelex2($telex2) {
        $this->telex2 = $telex2;
        return $this;
    }

    /**
     * Set the travail a domicile.
     *
     * @param bool $travailADomicile The travail a domicile.
     */
    public function setTravailADomicile($travailADomicile) {
        $this->travailADomicile = $travailADomicile;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type societe.
     *
     * @param string $typeSociete The type societe.
     */
    public function setTypeSociete($typeSociete) {
        $this->typeSociete = $typeSociete;
        return $this;
    }

    /**
     * Set the ville mariage.
     *
     * @param string $villeMariage The ville mariage.
     */
    public function setVilleMariage($villeMariage) {
        $this->villeMariage = $villeMariage;
        return $this;
    }

    /**
     * Set the ville naissance.
     *
     * @param string $villeNaissance The ville naissance.
     */
    public function setVilleNaissance($villeNaissance) {
        $this->villeNaissance = $villeNaissance;
        return $this;
    }

    /**
     * Set the ville rc.
     *
     * @param string $villeRc The ville rc.
     */
    public function setVilleRc($villeRc) {
        $this->villeRc = $villeRc;
        return $this;
    }

    /**
     * Set the ville rm.
     *
     * @param string $villeRm The ville rm.
     */
    public function setVilleRm($villeRm) {
        $this->villeRm = $villeRm;
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
