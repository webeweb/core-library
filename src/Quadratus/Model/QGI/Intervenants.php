<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Intervenants model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
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
	 * @var boolean
	 */
	private $autoriserAccesInternet;

	/**
	 * B i c.
	 *
	 * @var string
	 */
	private $bIC;

	/**
	 * B t q.
	 *
	 * @var string
	 */
	private $bTQ;

	/**
	 * B t q2.
	 *
	 * @var string
	 */
	private $bTQ2;

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
	 * Code n a f.
	 *
	 * @var string
	 */
	private $codeNAF;

	/**
	 * Code n a f2008.
	 *
	 * @var string
	 */
	private $codeNAF2008;

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
	 * Code pays i s o.
	 *
	 * @var string
	 */
	private $codePaysISO;

	/**
	 * Code pays i s o naiss.
	 *
	 * @var string
	 */
	private $codePaysISONaiss;

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
	 * Code postal r c.
	 *
	 * @var string
	 */
	private $codePostalRC;

	/**
	 * Code postal r m.
	 *
	 * @var string
	 */
	private $codePostalRM;

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
	 * @var DateTime
	 */
	private $creationSociete;

	/**
	 * Date creat.
	 *
	 * @var DateTime
	 */
	private $dateCreat;

	/**
	 * Date deb activite.
	 *
	 * @var DateTime
	 */
	private $dateDebActivite;

	/**
	 * Date divorce.
	 *
	 * @var DateTime
	 */
	private $dateDivorce;

	/**
	 * Date installation.
	 *
	 * @var DateTime
	 */
	private $dateInstallation;

	/**
	 * Date mariage.
	 *
	 * @var DateTime
	 */
	private $dateMariage;

	/**
	 * Date modif.
	 *
	 * @var DateTime
	 */
	private $dateModif;

	/**
	 * Date naissance.
	 *
	 * @var DateTime
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
	 * F r p cle.
	 *
	 * @var string
	 */
	private $fRPCle;

	/**
	 * F r p dossier.
	 *
	 * @var string
	 */
	private $fRPDossier;

	/**
	 * F r p recette.
	 *
	 * @var string
	 */
	private $fRPRecette;

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
	 * Gest juri.
	 *
	 * @var boolean
	 */
	private $gestJuri;

	/**
	 * I b a n.
	 *
	 * @var string
	 */
	private $iBAN;

	/**
	 * Ident t v a.
	 *
	 * @var string
	 */
	private $identTVA;

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
	 * Inscription r c.
	 *
	 * @var DateTime
	 */
	private $inscriptionRC;

	/**
	 * Inscription r m.
	 *
	 * @var DateTime
	 */
	private $inscriptionRM;

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
	 * M d p internet.
	 *
	 * @var string
	 */
	private $mDPInternet;

	/**
	 * Mission principale.
	 *
	 * @var string
	 */
	private $missionPrincipale;

	/**
	 * N i e1.
	 *
	 * @var string
	 */
	private $nIE1;

	/**
	 * N i e2.
	 *
	 * @var string
	 */
	private $nIE2;

	/**
	 * N i r.
	 *
	 * @var string
	 */
	private $nIR;

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
	 * Num agrement c g a.
	 *
	 * @var string
	 */
	private $numAgrementCGA;

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
	 * @var boolean
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
	 * R c.
	 *
	 * @var string
	 */
	private $rC;

	/**
	 * R c code.
	 *
	 * @var string
	 */
	private $rCCode;

	/**
	 * R i b.
	 *
	 * @var string
	 */
	private $rIB;

	/**
	 * R m.
	 *
	 * @var string
	 */
	private $rM;

	/**
	 * R m code.
	 *
	 * @var string
	 */
	private $rMCode;

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
	 * @var boolean
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
	 * Ville r c.
	 *
	 * @var string
	 */
	private $villeRC;

	/**
	 * Ville r m.
	 *
	 * @var string
	 */
	private $villeRM;

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
	 * @return boolean Returns the autoriser acces internet.
	 */
	public function getAutoriserAccesInternet() {
		return $this->autoriserAccesInternet;
	}

	/**
	 * Get the b i c.
	 *
	 * @return string Returns the b i c.
	 */
	public function getBIC() {
		return $this->bIC;
	}

	/**
	 * Get the b t q.
	 *
	 * @return string Returns the b t q.
	 */
	public function getBTQ() {
		return $this->bTQ;
	}

	/**
	 * Get the b t q2.
	 *
	 * @return string Returns the b t q2.
	 */
	public function getBTQ2() {
		return $this->bTQ2;
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
	 * Get the code n a f.
	 *
	 * @return string Returns the code n a f.
	 */
	public function getCodeNAF() {
		return $this->codeNAF;
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
	 * Get the code pays i s o.
	 *
	 * @return string Returns the code pays i s o.
	 */
	public function getCodePaysISO() {
		return $this->codePaysISO;
	}

	/**
	 * Get the code pays i s o naiss.
	 *
	 * @return string Returns the code pays i s o naiss.
	 */
	public function getCodePaysISONaiss() {
		return $this->codePaysISONaiss;
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
	 * Get the code postal r c.
	 *
	 * @return string Returns the code postal r c.
	 */
	public function getCodePostalRC() {
		return $this->codePostalRC;
	}

	/**
	 * Get the code postal r m.
	 *
	 * @return string Returns the code postal r m.
	 */
	public function getCodePostalRM() {
		return $this->codePostalRM;
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
	 * @return DateTime Returns the creation societe.
	 */
	public function getCreationSociete() {
		return $this->creationSociete;
	}

	/**
	 * Get the date creat.
	 *
	 * @return DateTime Returns the date creat.
	 */
	public function getDateCreat() {
		return $this->dateCreat;
	}

	/**
	 * Get the date deb activite.
	 *
	 * @return DateTime Returns the date deb activite.
	 */
	public function getDateDebActivite() {
		return $this->dateDebActivite;
	}

	/**
	 * Get the date divorce.
	 *
	 * @return DateTime Returns the date divorce.
	 */
	public function getDateDivorce() {
		return $this->dateDivorce;
	}

	/**
	 * Get the date installation.
	 *
	 * @return DateTime Returns the date installation.
	 */
	public function getDateInstallation() {
		return $this->dateInstallation;
	}

	/**
	 * Get the date mariage.
	 *
	 * @return DateTime Returns the date mariage.
	 */
	public function getDateMariage() {
		return $this->dateMariage;
	}

	/**
	 * Get the date modif.
	 *
	 * @return DateTime Returns the date modif.
	 */
	public function getDateModif() {
		return $this->dateModif;
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
	 * Get the f r p cle.
	 *
	 * @return string Returns the f r p cle.
	 */
	public function getFRPCle() {
		return $this->fRPCle;
	}

	/**
	 * Get the f r p dossier.
	 *
	 * @return string Returns the f r p dossier.
	 */
	public function getFRPDossier() {
		return $this->fRPDossier;
	}

	/**
	 * Get the f r p recette.
	 *
	 * @return string Returns the f r p recette.
	 */
	public function getFRPRecette() {
		return $this->fRPRecette;
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
	 * Get the gest juri.
	 *
	 * @return boolean Returns the gest juri.
	 */
	public function getGestJuri() {
		return $this->gestJuri;
	}

	/**
	 * Get the i b a n.
	 *
	 * @return string Returns the i b a n.
	 */
	public function getIBAN() {
		return $this->iBAN;
	}

	/**
	 * Get the ident t v a.
	 *
	 * @return string Returns the ident t v a.
	 */
	public function getIdentTVA() {
		return $this->identTVA;
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
	 * Get the inscription r c.
	 *
	 * @return DateTime Returns the inscription r c.
	 */
	public function getInscriptionRC() {
		return $this->inscriptionRC;
	}

	/**
	 * Get the inscription r m.
	 *
	 * @return DateTime Returns the inscription r m.
	 */
	public function getInscriptionRM() {
		return $this->inscriptionRM;
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
	 * Get the m d p internet.
	 *
	 * @return string Returns the m d p internet.
	 */
	public function getMDPInternet() {
		return $this->mDPInternet;
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
	 * Get the n i e1.
	 *
	 * @return string Returns the n i e1.
	 */
	public function getNIE1() {
		return $this->nIE1;
	}

	/**
	 * Get the n i e2.
	 *
	 * @return string Returns the n i e2.
	 */
	public function getNIE2() {
		return $this->nIE2;
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
	 * Get the num agrement c g a.
	 *
	 * @return string Returns the num agrement c g a.
	 */
	public function getNumAgrementCGA() {
		return $this->numAgrementCGA;
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
	 * @return boolean Returns the personne physique.
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
	 * Get the r c.
	 *
	 * @return string Returns the r c.
	 */
	public function getRC() {
		return $this->rC;
	}

	/**
	 * Get the r c code.
	 *
	 * @return string Returns the r c code.
	 */
	public function getRCCode() {
		return $this->rCCode;
	}

	/**
	 * Get the r i b.
	 *
	 * @return string Returns the r i b.
	 */
	public function getRIB() {
		return $this->rIB;
	}

	/**
	 * Get the r m.
	 *
	 * @return string Returns the r m.
	 */
	public function getRM() {
		return $this->rM;
	}

	/**
	 * Get the r m code.
	 *
	 * @return string Returns the r m code.
	 */
	public function getRMCode() {
		return $this->rMCode;
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
	 * @return boolean Returns the travail a domicile.
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
	 * Get the ville r c.
	 *
	 * @return string Returns the ville r c.
	 */
	public function getVilleRC() {
		return $this->villeRC;
	}

	/**
	 * Get the ville r m.
	 *
	 * @return string Returns the ville r m.
	 */
	public function getVilleRM() {
		return $this->villeRM;
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
	 * @return Intervenants Returns this intervenants.
	 */
	public function setAdresseSiteClient($adresseSiteClient) {
		$this->adresseSiteClient = $adresseSiteClient;
		return $this;
	}

	/**
	 * Set the adresse transpac.
	 *
	 * @param string $adresseTranspac The adresse transpac.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setAdresseTranspac($adresseTranspac) {
		$this->adresseTranspac = $adresseTranspac;
		return $this;
	}

	/**
	 * Set the age.
	 *
	 * @param string $age The age.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setAge($age) {
		$this->age = $age;
		return $this;
	}

	/**
	 * Set the autoriser acces internet.
	 *
	 * @param boolean $autoriserAccesInternet The autoriser acces internet.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setAutoriserAccesInternet($autoriserAccesInternet) {
		$this->autoriserAccesInternet = $autoriserAccesInternet;
		return $this;
	}

	/**
	 * Set the b i c.
	 *
	 * @param string $bIC The b i c.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setBIC($bIC) {
		$this->bIC = $bIC;
		return $this;
	}

	/**
	 * Set the b t q.
	 *
	 * @param string $bTQ The b t q.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setBTQ($bTQ) {
		$this->bTQ = $bTQ;
		return $this;
	}

	/**
	 * Set the b t q2.
	 *
	 * @param string $bTQ2 The b t q2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setBTQ2($bTQ2) {
		$this->bTQ2 = $bTQ2;
		return $this;
	}

	/**
	 * Set the bureau distributeur.
	 *
	 * @param string $bureauDistributeur The bureau distributeur.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setBureauDistributeur($bureauDistributeur) {
		$this->bureauDistributeur = $bureauDistributeur;
		return $this;
	}

	/**
	 * Set the bureau distributeur2.
	 *
	 * @param string $bureauDistributeur2 The bureau distributeur2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setBureauDistributeur2($bureauDistributeur2) {
		$this->bureauDistributeur2 = $bureauDistributeur2;
		return $this;
	}

	/**
	 * Set the capital.
	 *
	 * @param float $capital The capital.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCapital($capital) {
		$this->capital = $capital;
		return $this;
	}

	/**
	 * Set the capital monnaie.
	 *
	 * @param string $capitalMonnaie The capital monnaie.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCapitalMonnaie($capitalMonnaie) {
		$this->capitalMonnaie = $capitalMonnaie;
		return $this;
	}

	/**
	 * Set the categorie juridique.
	 *
	 * @param string $categorieJuridique The categorie juridique.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCategorieJuridique($categorieJuridique) {
		$this->categorieJuridique = $categorieJuridique;
		return $this;
	}

	/**
	 * Set the civilite.
	 *
	 * @param string $civilite The civilite.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCivilite($civilite) {
		$this->civilite = $civilite;
		return $this;
	}

	/**
	 * Set the code.
	 *
	 * @param string $code The code.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the code epoux.
	 *
	 * @param string $codeEpoux The code epoux.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodeEpoux($codeEpoux) {
		$this->codeEpoux = $codeEpoux;
		return $this;
	}

	/**
	 * Set the code insee.
	 *
	 * @param string $codeInsee The code insee.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodeInsee($codeInsee) {
		$this->codeInsee = $codeInsee;
		return $this;
	}

	/**
	 * Set the code n a f.
	 *
	 * @param string $codeNAF The code n a f.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodeNAF($codeNAF) {
		$this->codeNAF = $codeNAF;
		return $this;
	}

	/**
	 * Set the code n a f2008.
	 *
	 * @param string $codeNAF2008 The code n a f2008.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodeNAF2008($codeNAF2008) {
		$this->codeNAF2008 = $codeNAF2008;
		return $this;
	}

	/**
	 * Set the code officiel commune.
	 *
	 * @param string $codeOfficielCommune The code officiel commune.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodeOfficielCommune($codeOfficielCommune) {
		$this->codeOfficielCommune = $codeOfficielCommune;
		return $this;
	}

	/**
	 * Set the code officiel commune2.
	 *
	 * @param string $codeOfficielCommune2 The code officiel commune2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodeOfficielCommune2($codeOfficielCommune2) {
		$this->codeOfficielCommune2 = $codeOfficielCommune2;
		return $this;
	}

	/**
	 * Set the code pays i s o.
	 *
	 * @param string $codePaysISO The code pays i s o.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePaysISO($codePaysISO) {
		$this->codePaysISO = $codePaysISO;
		return $this;
	}

	/**
	 * Set the code pays i s o naiss.
	 *
	 * @param string $codePaysISONaiss The code pays i s o naiss.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePaysISONaiss($codePaysISONaiss) {
		$this->codePaysISONaiss = $codePaysISONaiss;
		return $this;
	}

	/**
	 * Set the code postal.
	 *
	 * @param string $codePostal The code postal.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePostal($codePostal) {
		$this->codePostal = $codePostal;
		return $this;
	}

	/**
	 * Set the code postal2.
	 *
	 * @param string $codePostal2 The code postal2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePostal2($codePostal2) {
		$this->codePostal2 = $codePostal2;
		return $this;
	}

	/**
	 * Set the code postal mariage.
	 *
	 * @param string $codePostalMariage The code postal mariage.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePostalMariage($codePostalMariage) {
		$this->codePostalMariage = $codePostalMariage;
		return $this;
	}

	/**
	 * Set the code postal naissance.
	 *
	 * @param string $codePostalNaissance The code postal naissance.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePostalNaissance($codePostalNaissance) {
		$this->codePostalNaissance = $codePostalNaissance;
		return $this;
	}

	/**
	 * Set the code postal r c.
	 *
	 * @param string $codePostalRC The code postal r c.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePostalRC($codePostalRC) {
		$this->codePostalRC = $codePostalRC;
		return $this;
	}

	/**
	 * Set the code postal r m.
	 *
	 * @param string $codePostalRM The code postal r m.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodePostalRM($codePostalRM) {
		$this->codePostalRM = $codePostalRM;
		return $this;
	}

	/**
	 * Set the code responsable.
	 *
	 * @param string $codeResponsable The code responsable.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCodeResponsable($codeResponsable) {
		$this->codeResponsable = $codeResponsable;
		return $this;
	}

	/**
	 * Set the complement.
	 *
	 * @param string $complement The complement.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setComplement($complement) {
		$this->complement = $complement;
		return $this;
	}

	/**
	 * Set the complement2.
	 *
	 * @param string $complement2 The complement2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setComplement2($complement2) {
		$this->complement2 = $complement2;
		return $this;
	}

	/**
	 * Set the complement suite.
	 *
	 * @param string $complementSuite The complement suite.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setComplementSuite($complementSuite) {
		$this->complementSuite = $complementSuite;
		return $this;
	}

	/**
	 * Set the compteur liens.
	 *
	 * @param int $compteurLiens The compteur liens.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCompteurLiens($compteurLiens) {
		$this->compteurLiens = $compteurLiens;
		return $this;
	}

	/**
	 * Set the contact.
	 *
	 * @param string $contact The contact.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setContact($contact) {
		$this->contact = $contact;
		return $this;
	}

	/**
	 * Set the creation societe.
	 *
	 * @param DateTime $creationSociete The creation societe.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setCreationSociete(DateTime $creationSociete = null) {
		$this->creationSociete = $creationSociete;
		return $this;
	}

	/**
	 * Set the date creat.
	 *
	 * @param DateTime $dateCreat The date creat.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDateCreat(DateTime $dateCreat = null) {
		$this->dateCreat = $dateCreat;
		return $this;
	}

	/**
	 * Set the date deb activite.
	 *
	 * @param DateTime $dateDebActivite The date deb activite.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDateDebActivite(DateTime $dateDebActivite = null) {
		$this->dateDebActivite = $dateDebActivite;
		return $this;
	}

	/**
	 * Set the date divorce.
	 *
	 * @param DateTime $dateDivorce The date divorce.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDateDivorce(DateTime $dateDivorce = null) {
		$this->dateDivorce = $dateDivorce;
		return $this;
	}

	/**
	 * Set the date installation.
	 *
	 * @param DateTime $dateInstallation The date installation.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDateInstallation(DateTime $dateInstallation = null) {
		$this->dateInstallation = $dateInstallation;
		return $this;
	}

	/**
	 * Set the date mariage.
	 *
	 * @param DateTime $dateMariage The date mariage.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDateMariage(DateTime $dateMariage = null) {
		$this->dateMariage = $dateMariage;
		return $this;
	}

	/**
	 * Set the date modif.
	 *
	 * @param DateTime $dateModif The date modif.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDateModif(DateTime $dateModif = null) {
		$this->dateModif = $dateModif;
		return $this;
	}

	/**
	 * Set the date naissance.
	 *
	 * @param DateTime $dateNaissance The date naissance.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDateNaissance(DateTime $dateNaissance = null) {
		$this->dateNaissance = $dateNaissance;
		return $this;
	}

	/**
	 * Set the donnees appel.
	 *
	 * @param string $donneesAppel The donnees appel.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDonneesAppel($donneesAppel) {
		$this->donneesAppel = $donneesAppel;
		return $this;
	}

	/**
	 * Set the droit collab visu documents.
	 *
	 * @param string $droitCollabVisuDocuments The droit collab visu documents.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDroitCollabVisuDocuments($droitCollabVisuDocuments) {
		$this->droitCollabVisuDocuments = $droitCollabVisuDocuments;
		return $this;
	}

	/**
	 * Set the duree societe.
	 *
	 * @param string $dureeSociete The duree societe.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setDureeSociete($dureeSociete) {
		$this->dureeSociete = $dureeSociete;
		return $this;
	}

	/**
	 * Set the email.
	 *
	 * @param string $email The email.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}

	/**
	 * Set the email2.
	 *
	 * @param string $email2 The email2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setEmail2($email2) {
		$this->email2 = $email2;
		return $this;
	}

	/**
	 * Set the enseigne.
	 *
	 * @param string $enseigne The enseigne.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setEnseigne($enseigne) {
		$this->enseigne = $enseigne;
		return $this;
	}

	/**
	 * Set the f r p cle.
	 *
	 * @param string $fRPCle The f r p cle.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setFRPCle($fRPCle) {
		$this->fRPCle = $fRPCle;
		return $this;
	}

	/**
	 * Set the f r p dossier.
	 *
	 * @param string $fRPDossier The f r p dossier.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setFRPDossier($fRPDossier) {
		$this->fRPDossier = $fRPDossier;
		return $this;
	}

	/**
	 * Set the f r p recette.
	 *
	 * @param string $fRPRecette The f r p recette.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setFRPRecette($fRPRecette) {
		$this->fRPRecette = $fRPRecette;
		return $this;
	}

	/**
	 * Set the fax.
	 *
	 * @param string $fax The fax.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setFax($fax) {
		$this->fax = $fax;
		return $this;
	}

	/**
	 * Set the fax2.
	 *
	 * @param string $fax2 The fax2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setFax2($fax2) {
		$this->fax2 = $fax2;
		return $this;
	}

	/**
	 * Set the gest juri.
	 *
	 * @param boolean $gestJuri The gest juri.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setGestJuri($gestJuri) {
		$this->gestJuri = $gestJuri;
		return $this;
	}

	/**
	 * Set the i b a n.
	 *
	 * @param string $iBAN The i b a n.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setIBAN($iBAN) {
		$this->iBAN = $iBAN;
		return $this;
	}

	/**
	 * Set the ident t v a.
	 *
	 * @param string $identTVA The ident t v a.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setIdentTVA($identTVA) {
		$this->identTVA = $identTVA;
		return $this;
	}

	/**
	 * Set the identifiant.
	 *
	 * @param string $identifiant The identifiant.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setIdentifiant($identifiant) {
		$this->identifiant = $identifiant;
		return $this;
	}

	/**
	 * Set the identifiant internet.
	 *
	 * @param string $identifiantInternet The identifiant internet.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setIdentifiantInternet($identifiantInternet) {
		$this->identifiantInternet = $identifiantInternet;
		return $this;
	}

	/**
	 * Set the inscription r c.
	 *
	 * @param DateTime $inscriptionRC The inscription r c.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setInscriptionRC(DateTime $inscriptionRC = null) {
		$this->inscriptionRC = $inscriptionRC;
		return $this;
	}

	/**
	 * Set the inscription r m.
	 *
	 * @param DateTime $inscriptionRM The inscription r m.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setInscriptionRM(DateTime $inscriptionRM = null) {
		$this->inscriptionRM = $inscriptionRM;
		return $this;
	}

	/**
	 * Set the is client.
	 *
	 * @param string $isClient The is client.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setIsClient($isClient) {
		$this->isClient = $isClient;
		return $this;
	}

	/**
	 * Set the is fournisseur.
	 *
	 * @param string $isFournisseur The is fournisseur.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setIsFournisseur($isFournisseur) {
		$this->isFournisseur = $isFournisseur;
		return $this;
	}

	/**
	 * Set the m d p internet.
	 *
	 * @param string $mDPInternet The m d p internet.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setMDPInternet($mDPInternet) {
		$this->mDPInternet = $mDPInternet;
		return $this;
	}

	/**
	 * Set the mission principale.
	 *
	 * @param string $missionPrincipale The mission principale.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setMissionPrincipale($missionPrincipale) {
		$this->missionPrincipale = $missionPrincipale;
		return $this;
	}

	/**
	 * Set the n i e1.
	 *
	 * @param string $nIE1 The n i e1.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNIE1($nIE1) {
		$this->nIE1 = $nIE1;
		return $this;
	}

	/**
	 * Set the n i e2.
	 *
	 * @param string $nIE2 The n i e2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNIE2($nIE2) {
		$this->nIE2 = $nIE2;
		return $this;
	}

	/**
	 * Set the n i r.
	 *
	 * @param string $nIR The n i r.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNIR($nIR) {
		$this->nIR = $nIR;
		return $this;
	}

	/**
	 * Set the nationalite.
	 *
	 * @param string $nationalite The nationalite.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNationalite($nationalite) {
		$this->nationalite = $nationalite;
		return $this;
	}

	/**
	 * Set the nb enfants.
	 *
	 * @param string $nbEnfants The nb enfants.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNbEnfants($nbEnfants) {
		$this->nbEnfants = $nbEnfants;
		return $this;
	}

	/**
	 * Set the nb km.
	 *
	 * @param float $nbKm The nb km.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNbKm($nbKm) {
		$this->nbKm = $nbKm;
		return $this;
	}

	/**
	 * Set the nom.
	 *
	 * @param string $nom The nom.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * Set the nom marital.
	 *
	 * @param string $nomMarital The nom marital.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomMarital($nomMarital) {
		$this->nomMarital = $nomMarital;
		return $this;
	}

	/**
	 * Set the nom mere.
	 *
	 * @param string $nomMere The nom mere.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomMere($nomMere) {
		$this->nomMere = $nomMere;
		return $this;
	}

	/**
	 * Set the nom pere.
	 *
	 * @param string $nomPere The nom pere.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomPere($nomPere) {
		$this->nomPere = $nomPere;
		return $this;
	}

	/**
	 * Set the nom suite.
	 *
	 * @param string $nomSuite The nom suite.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomSuite($nomSuite) {
		$this->nomSuite = $nomSuite;
		return $this;
	}

	/**
	 * Set the nom ville.
	 *
	 * @param string $nomVille The nom ville.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomVille($nomVille) {
		$this->nomVille = $nomVille;
		return $this;
	}

	/**
	 * Set the nom ville2.
	 *
	 * @param string $nomVille2 The nom ville2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomVille2($nomVille2) {
		$this->nomVille2 = $nomVille2;
		return $this;
	}

	/**
	 * Set the nom voie.
	 *
	 * @param string $nomVoie The nom voie.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomVoie($nomVoie) {
		$this->nomVoie = $nomVoie;
		return $this;
	}

	/**
	 * Set the nom voie2.
	 *
	 * @param string $nomVoie2 The nom voie2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNomVoie2($nomVoie2) {
		$this->nomVoie2 = $nomVoie2;
		return $this;
	}

	/**
	 * Set the nombre actions.
	 *
	 * @param int $nombreActions The nombre actions.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNombreActions($nombreActions) {
		$this->nombreActions = $nombreActions;
		return $this;
	}

	/**
	 * Set the num agrement c g a.
	 *
	 * @param string $numAgrementCGA The num agrement c g a.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNumAgrementCGA($numAgrementCGA) {
		$this->numAgrementCGA = $numAgrementCGA;
		return $this;
	}

	/**
	 * Set the num voie.
	 *
	 * @param string $numVoie The num voie.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNumVoie($numVoie) {
		$this->numVoie = $numVoie;
		return $this;
	}

	/**
	 * Set the num voie2.
	 *
	 * @param string $numVoie2 The num voie2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setNumVoie2($numVoie2) {
		$this->numVoie2 = $numVoie2;
		return $this;
	}

	/**
	 * Set the pays.
	 *
	 * @param string $pays The pays.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPays($pays) {
		$this->pays = $pays;
		return $this;
	}

	/**
	 * Set the pays naissance.
	 *
	 * @param string $paysNaissance The pays naissance.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPaysNaissance($paysNaissance) {
		$this->paysNaissance = $paysNaissance;
		return $this;
	}

	/**
	 * Set the personne physique.
	 *
	 * @param boolean $personnePhysique The personne physique.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPersonnePhysique($personnePhysique) {
		$this->personnePhysique = $personnePhysique;
		return $this;
	}

	/**
	 * Set the portable1.
	 *
	 * @param string $portable1 The portable1.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPortable1($portable1) {
		$this->portable1 = $portable1;
		return $this;
	}

	/**
	 * Set the portable12.
	 *
	 * @param string $portable12 The portable12.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPortable12($portable12) {
		$this->portable12 = $portable12;
		return $this;
	}

	/**
	 * Set the portable2.
	 *
	 * @param string $portable2 The portable2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPortable2($portable2) {
		$this->portable2 = $portable2;
		return $this;
	}

	/**
	 * Set the portable22.
	 *
	 * @param string $portable22 The portable22.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPortable22($portable22) {
		$this->portable22 = $portable22;
		return $this;
	}

	/**
	 * Set the prenom.
	 *
	 * @param string $prenom The prenom.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}

	/**
	 * Set the qualite.
	 *
	 * @param string $qualite The qualite.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setQualite($qualite) {
		$this->qualite = $qualite;
		return $this;
	}

	/**
	 * Set the r c.
	 *
	 * @param string $rC The r c.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setRC($rC) {
		$this->rC = $rC;
		return $this;
	}

	/**
	 * Set the r c code.
	 *
	 * @param string $rCCode The r c code.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setRCCode($rCCode) {
		$this->rCCode = $rCCode;
		return $this;
	}

	/**
	 * Set the r i b.
	 *
	 * @param string $rIB The r i b.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setRIB($rIB) {
		$this->rIB = $rIB;
		return $this;
	}

	/**
	 * Set the r m.
	 *
	 * @param string $rM The r m.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setRM($rM) {
		$this->rM = $rM;
		return $this;
	}

	/**
	 * Set the r m code.
	 *
	 * @param string $rMCode The r m code.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setRMCode($rMCode) {
		$this->rMCode = $rMCode;
		return $this;
	}

	/**
	 * Set the regime matrimonial.
	 *
	 * @param string $regimeMatrimonial The regime matrimonial.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setRegimeMatrimonial($regimeMatrimonial) {
		$this->regimeMatrimonial = $regimeMatrimonial;
		return $this;
	}

	/**
	 * Set the regime matrimoniale.
	 *
	 * @param string $regimeMatrimoniale The regime matrimoniale.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setRegimeMatrimoniale($regimeMatrimoniale) {
		$this->regimeMatrimoniale = $regimeMatrimoniale;
		return $this;
	}

	/**
	 * Set the salarie independant.
	 *
	 * @param string $salarieIndependant The salarie independant.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setSalarieIndependant($salarieIndependant) {
		$this->salarieIndependant = $salarieIndependant;
		return $this;
	}

	/**
	 * Set the siret.
	 *
	 * @param string $siret The siret.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setSiret($siret) {
		$this->siret = $siret;
		return $this;
	}

	/**
	 * Set the situation fam.
	 *
	 * @param string $situationFam The situation fam.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setSituationFam($situationFam) {
		$this->situationFam = $situationFam;
		return $this;
	}

	/**
	 * Set the tel1.
	 *
	 * @param string $tel1 The tel1.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTel1($tel1) {
		$this->tel1 = $tel1;
		return $this;
	}

	/**
	 * Set the tel12.
	 *
	 * @param string $tel12 The tel12.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTel12($tel12) {
		$this->tel12 = $tel12;
		return $this;
	}

	/**
	 * Set the tel2.
	 *
	 * @param string $tel2 The tel2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTel2($tel2) {
		$this->tel2 = $tel2;
		return $this;
	}

	/**
	 * Set the tel22.
	 *
	 * @param string $tel22 The tel22.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTel22($tel22) {
		$this->tel22 = $tel22;
		return $this;
	}

	/**
	 * Set the tel voiture.
	 *
	 * @param string $telVoiture The tel voiture.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTelVoiture($telVoiture) {
		$this->telVoiture = $telVoiture;
		return $this;
	}

	/**
	 * Set the tel voiture2.
	 *
	 * @param string $telVoiture2 The tel voiture2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTelVoiture2($telVoiture2) {
		$this->telVoiture2 = $telVoiture2;
		return $this;
	}

	/**
	 * Set the telex.
	 *
	 * @param string $telex The telex.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTelex($telex) {
		$this->telex = $telex;
		return $this;
	}

	/**
	 * Set the telex2.
	 *
	 * @param string $telex2 The telex2.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTelex2($telex2) {
		$this->telex2 = $telex2;
		return $this;
	}

	/**
	 * Set the travail a domicile.
	 *
	 * @param boolean $travailADomicile The travail a domicile.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTravailADomicile($travailADomicile) {
		$this->travailADomicile = $travailADomicile;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * Set the type societe.
	 *
	 * @param string $typeSociete The type societe.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setTypeSociete($typeSociete) {
		$this->typeSociete = $typeSociete;
		return $this;
	}

	/**
	 * Set the ville mariage.
	 *
	 * @param string $villeMariage The ville mariage.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setVilleMariage($villeMariage) {
		$this->villeMariage = $villeMariage;
		return $this;
	}

	/**
	 * Set the ville naissance.
	 *
	 * @param string $villeNaissance The ville naissance.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setVilleNaissance($villeNaissance) {
		$this->villeNaissance = $villeNaissance;
		return $this;
	}

	/**
	 * Set the ville r c.
	 *
	 * @param string $villeRC The ville r c.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setVilleRC($villeRC) {
		$this->villeRC = $villeRC;
		return $this;
	}

	/**
	 * Set the ville r m.
	 *
	 * @param string $villeRM The ville r m.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setVilleRM($villeRM) {
		$this->villeRM = $villeRM;
		return $this;
	}

	/**
	 * Set the zip code.
	 *
	 * @param string $zipCode The zip code.
	 * @return Intervenants Returns this intervenants.
	 */
	public function setZipCode($zipCode) {
		$this->zipCode = $zipCode;
		return $this;
	}

}
