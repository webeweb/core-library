<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Bon trav prev model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class BonTravPrev {

	/**
	 * Ad b t b t q.
	 *
	 * @var string
	 */
	private $adBTBTQ;

	/**
	 * Ad b t bureau distributeur.
	 *
	 * @var string
	 */
	private $adBTBureauDistributeur;

	/**
	 * Ad b t civilite.
	 *
	 * @var string
	 */
	private $adBTCivilite;

	/**
	 * Ad b t code pays.
	 *
	 * @var string
	 */
	private $adBTCodePays;

	/**
	 * Ad b t code postal.
	 *
	 * @var string
	 */
	private $adBTCodePostal;

	/**
	 * Ad b t complement.
	 *
	 * @var string
	 */
	private $adBTComplement;

	/**
	 * Ad b t nom.
	 *
	 * @var string
	 */
	private $adBTNom;

	/**
	 * Ad b t nom suite.
	 *
	 * @var string
	 */
	private $adBTNomSuite;

	/**
	 * Ad b t nom voie.
	 *
	 * @var string
	 */
	private $adBTNomVoie;

	/**
	 * Ad b t num voie.
	 *
	 * @var string
	 */
	private $adBTNumVoie;

	/**
	 * Ad f b t q.
	 *
	 * @var string
	 */
	private $adFBTQ;

	/**
	 * Ad f bureau distributeur.
	 *
	 * @var string
	 */
	private $adFBureauDistributeur;

	/**
	 * Ad f civilite.
	 *
	 * @var string
	 */
	private $adFCivilite;

	/**
	 * Ad f code pays.
	 *
	 * @var string
	 */
	private $adFCodePays;

	/**
	 * Ad f code postal.
	 *
	 * @var string
	 */
	private $adFCodePostal;

	/**
	 * Ad f complement.
	 *
	 * @var string
	 */
	private $adFComplement;

	/**
	 * Ad f nom.
	 *
	 * @var string
	 */
	private $adFNom;

	/**
	 * Ad f nom suite.
	 *
	 * @var string
	 */
	private $adFNomSuite;

	/**
	 * Ad f nom suite2.
	 *
	 * @var string
	 */
	private $adFNomSuite2;

	/**
	 * Ad f nom suite3.
	 *
	 * @var string
	 */
	private $adFNomSuite3;

	/**
	 * Ad f nom voie.
	 *
	 * @var string
	 */
	private $adFNomVoie;

	/**
	 * Ad f num voie.
	 *
	 * @var string
	 */
	private $adFNumVoie;

	/**
	 * Adresse b t saisie.
	 *
	 * @var boolean
	 */
	private $adresseBTSaisie;

	/**
	 * Adresse facturation saisie.
	 *
	 * @var boolean
	 */
	private $adresseFacturationSaisie;

	/**
	 * B t copie.
	 *
	 * @var boolean
	 */
	private $bTCopie;

	/**
	 * B t devis deja facture.
	 *
	 * @var boolean
	 */
	private $bTDevisDejaFacture;

	/**
	 * B t valide.
	 *
	 * @var boolean
	 */
	private $bTValide;

	/**
	 * Code affaire.
	 *
	 * @var string
	 */
	private $codeAffaire;

	/**
	 * Code chantier.
	 *
	 * @var string
	 */
	private $codeChantier;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Code equipe.
	 *
	 * @var string
	 */
	private $codeEquipe;

	/**
	 * Code regroupement devis.
	 *
	 * @var string
	 */
	private $codeRegroupementDevis;

	/**
	 * Code tache type.
	 *
	 * @var string
	 */
	private $codeTacheType;

	/**
	 * Code tournee.
	 *
	 * @var string
	 */
	private $codeTournee;

	/**
	 * Critere bool1.
	 *
	 * @var boolean
	 */
	private $critereBool1;

	/**
	 * Critere bool2.
	 *
	 * @var boolean
	 */
	private $critereBool2;

	/**
	 * Critere byte1.
	 *
	 * @var string
	 */
	private $critereByte1;

	/**
	 * Critere liste1.
	 *
	 * @var string
	 */
	private $critereListe1;

	/**
	 * Critere liste2.
	 *
	 * @var string
	 */
	private $critereListe2;

	/**
	 * Critere numerique1.
	 *
	 * @var float
	 */
	private $critereNumerique1;

	/**
	 * Critere numerique2.
	 *
	 * @var float
	 */
	private $critereNumerique2;

	/**
	 * Critere texte1.
	 *
	 * @var string
	 */
	private $critereTexte1;

	/**
	 * Critere texte2.
	 *
	 * @var string
	 */
	private $critereTexte2;

	/**
	 * Date passage.
	 *
	 * @var DateTime
	 */
	private $datePassage;

	/**
	 * Date premier passage.
	 *
	 * @var DateTime
	 */
	private $datePremierPassage;

	/**
	 * Date transfert.
	 *
	 * @var DateTime
	 */
	private $dateTransfert;

	/**
	 * Description.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * Duree pointee.
	 *
	 * @var float
	 */
	private $dureePointee;

	/**
	 * Duree prevue.
	 *
	 * @var float
	 */
	private $dureePrevue;

	/**
	 * Duree validee.
	 *
	 * @var float
	 */
	private $dureeValidee;

	/**
	 * Employe signe mob.
	 *
	 * @var string
	 */
	private $employeSigneMob;

	/**
	 * Gestion planning.
	 *
	 * @var boolean
	 */
	private $gestionPlanning;

	/**
	 * Guid mob.
	 *
	 * @var string
	 */
	private $guidMob;

	/**
	 * Heure deb.
	 *
	 * @var DateTime
	 */
	private $heureDeb;

	/**
	 * Latitude.
	 *
	 * @var float
	 */
	private $latitude;

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
	 * Longitude.
	 *
	 * @var float
	 */
	private $longitude;

	/**
	 * Montant h t devis.
	 *
	 * @var float
	 */
	private $montantHTDevis;

	/**
	 * Nb jours pointes.
	 *
	 * @var float
	 */
	private $nbJoursPointes;

	/**
	 * Nb jours prevus.
	 *
	 * @var float
	 */
	private $nbJoursPrevus;

	/**
	 * Nombre employes.
	 *
	 * @var int
	 */
	private $nombreEmployes;

	/**
	 * Non traite.
	 *
	 * @var boolean
	 */
	private $nonTraite;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

	/**
	 * Numero devis.
	 *
	 * @var string
	 */
	private $numeroDevis;

	/**
	 * Numero facture.
	 *
	 * @var string
	 */
	private $numeroFacture;

	/**
	 * Numero p j.
	 *
	 * @var int
	 */
	private $numeroPJ;

	/**
	 * Observation client.
	 *
	 * @var string
	 */
	private $observationClient;

	/**
	 * Observation interne.
	 *
	 * @var string
	 */
	private $observationInterne;

	/**
	 * Occasionnel.
	 *
	 * @var boolean
	 */
	private $occasionnel;

	/**
	 * Plusieurs jours.
	 *
	 * @var boolean
	 */
	private $plusieursJours;

	/**
	 * Plusieurs mois.
	 *
	 * @var boolean
	 */
	private $plusieursMois;

	/**
	 * Poste rent.
	 *
	 * @var string
	 */
	private $posteRent;

	/**
	 * Proratise.
	 *
	 * @var boolean
	 */
	private $proratise;

	/**
	 * Signataire.
	 *
	 * @var string
	 */
	private $signataire;

	/**
	 * Signe.
	 *
	 * @var boolean
	 */
	private $signe;

	/**
	 * Start mob.
	 *
	 * @var string
	 */
	private $startMob;

	/**
	 * Type b t.
	 *
	 * @var string
	 */
	private $typeBT;

	/**
	 * Type b t saisi.
	 *
	 * @var string
	 */
	private $typeBTSaisi;

	/**
	 * Uniq i d blocage.
	 *
	 * @var string
	 */
	private $uniqIDBlocage;

	/**
	 * Via.
	 *
	 * @var string
	 */
	private $via;

	/**
	 * reference1 devis.
	 *
	 * @var string
	 */
	private $reference1Devis;

	/**
	 * reference2 devis.
	 *
	 * @var string
	 */
	private $reference2Devis;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the ad b t b t q.
	 *
	 * @return string Returns the ad b t b t q.
	 */
	public function getAdBTBTQ() {
		return $this->adBTBTQ;
	}

	/**
	 * Get the ad b t bureau distributeur.
	 *
	 * @return string Returns the ad b t bureau distributeur.
	 */
	public function getAdBTBureauDistributeur() {
		return $this->adBTBureauDistributeur;
	}

	/**
	 * Get the ad b t civilite.
	 *
	 * @return string Returns the ad b t civilite.
	 */
	public function getAdBTCivilite() {
		return $this->adBTCivilite;
	}

	/**
	 * Get the ad b t code pays.
	 *
	 * @return string Returns the ad b t code pays.
	 */
	public function getAdBTCodePays() {
		return $this->adBTCodePays;
	}

	/**
	 * Get the ad b t code postal.
	 *
	 * @return string Returns the ad b t code postal.
	 */
	public function getAdBTCodePostal() {
		return $this->adBTCodePostal;
	}

	/**
	 * Get the ad b t complement.
	 *
	 * @return string Returns the ad b t complement.
	 */
	public function getAdBTComplement() {
		return $this->adBTComplement;
	}

	/**
	 * Get the ad b t nom.
	 *
	 * @return string Returns the ad b t nom.
	 */
	public function getAdBTNom() {
		return $this->adBTNom;
	}

	/**
	 * Get the ad b t nom suite.
	 *
	 * @return string Returns the ad b t nom suite.
	 */
	public function getAdBTNomSuite() {
		return $this->adBTNomSuite;
	}

	/**
	 * Get the ad b t nom voie.
	 *
	 * @return string Returns the ad b t nom voie.
	 */
	public function getAdBTNomVoie() {
		return $this->adBTNomVoie;
	}

	/**
	 * Get the ad b t num voie.
	 *
	 * @return string Returns the ad b t num voie.
	 */
	public function getAdBTNumVoie() {
		return $this->adBTNumVoie;
	}

	/**
	 * Get the ad f b t q.
	 *
	 * @return string Returns the ad f b t q.
	 */
	public function getAdFBTQ() {
		return $this->adFBTQ;
	}

	/**
	 * Get the ad f bureau distributeur.
	 *
	 * @return string Returns the ad f bureau distributeur.
	 */
	public function getAdFBureauDistributeur() {
		return $this->adFBureauDistributeur;
	}

	/**
	 * Get the ad f civilite.
	 *
	 * @return string Returns the ad f civilite.
	 */
	public function getAdFCivilite() {
		return $this->adFCivilite;
	}

	/**
	 * Get the ad f code pays.
	 *
	 * @return string Returns the ad f code pays.
	 */
	public function getAdFCodePays() {
		return $this->adFCodePays;
	}

	/**
	 * Get the ad f code postal.
	 *
	 * @return string Returns the ad f code postal.
	 */
	public function getAdFCodePostal() {
		return $this->adFCodePostal;
	}

	/**
	 * Get the ad f complement.
	 *
	 * @return string Returns the ad f complement.
	 */
	public function getAdFComplement() {
		return $this->adFComplement;
	}

	/**
	 * Get the ad f nom.
	 *
	 * @return string Returns the ad f nom.
	 */
	public function getAdFNom() {
		return $this->adFNom;
	}

	/**
	 * Get the ad f nom suite.
	 *
	 * @return string Returns the ad f nom suite.
	 */
	public function getAdFNomSuite() {
		return $this->adFNomSuite;
	}

	/**
	 * Get the ad f nom suite2.
	 *
	 * @return string Returns the ad f nom suite2.
	 */
	public function getAdFNomSuite2() {
		return $this->adFNomSuite2;
	}

	/**
	 * Get the ad f nom suite3.
	 *
	 * @return string Returns the ad f nom suite3.
	 */
	public function getAdFNomSuite3() {
		return $this->adFNomSuite3;
	}

	/**
	 * Get the ad f nom voie.
	 *
	 * @return string Returns the ad f nom voie.
	 */
	public function getAdFNomVoie() {
		return $this->adFNomVoie;
	}

	/**
	 * Get the ad f num voie.
	 *
	 * @return string Returns the ad f num voie.
	 */
	public function getAdFNumVoie() {
		return $this->adFNumVoie;
	}

	/**
	 * Get the adresse b t saisie.
	 *
	 * @return boolean Returns the adresse b t saisie.
	 */
	public function getAdresseBTSaisie() {
		return $this->adresseBTSaisie;
	}

	/**
	 * Get the adresse facturation saisie.
	 *
	 * @return boolean Returns the adresse facturation saisie.
	 */
	public function getAdresseFacturationSaisie() {
		return $this->adresseFacturationSaisie;
	}

	/**
	 * Get the b t copie.
	 *
	 * @return boolean Returns the b t copie.
	 */
	public function getBTCopie() {
		return $this->bTCopie;
	}

	/**
	 * Get the b t devis deja facture.
	 *
	 * @return boolean Returns the b t devis deja facture.
	 */
	public function getBTDevisDejaFacture() {
		return $this->bTDevisDejaFacture;
	}

	/**
	 * Get the b t valide.
	 *
	 * @return boolean Returns the b t valide.
	 */
	public function getBTValide() {
		return $this->bTValide;
	}

	/**
	 * Get the code affaire.
	 *
	 * @return string Returns the code affaire.
	 */
	public function getCodeAffaire() {
		return $this->codeAffaire;
	}

	/**
	 * Get the code chantier.
	 *
	 * @return string Returns the code chantier.
	 */
	public function getCodeChantier() {
		return $this->codeChantier;
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
	 * Get the code collaborateur.
	 *
	 * @return string Returns the code collaborateur.
	 */
	public function getCodeCollaborateur() {
		return $this->codeCollaborateur;
	}

	/**
	 * Get the code equipe.
	 *
	 * @return string Returns the code equipe.
	 */
	public function getCodeEquipe() {
		return $this->codeEquipe;
	}

	/**
	 * Get the code regroupement devis.
	 *
	 * @return string Returns the code regroupement devis.
	 */
	public function getCodeRegroupementDevis() {
		return $this->codeRegroupementDevis;
	}

	/**
	 * Get the code tache type.
	 *
	 * @return string Returns the code tache type.
	 */
	public function getCodeTacheType() {
		return $this->codeTacheType;
	}

	/**
	 * Get the code tournee.
	 *
	 * @return string Returns the code tournee.
	 */
	public function getCodeTournee() {
		return $this->codeTournee;
	}

	/**
	 * Get the critere bool1.
	 *
	 * @return boolean Returns the critere bool1.
	 */
	public function getCritereBool1() {
		return $this->critereBool1;
	}

	/**
	 * Get the critere bool2.
	 *
	 * @return boolean Returns the critere bool2.
	 */
	public function getCritereBool2() {
		return $this->critereBool2;
	}

	/**
	 * Get the critere byte1.
	 *
	 * @return string Returns the critere byte1.
	 */
	public function getCritereByte1() {
		return $this->critereByte1;
	}

	/**
	 * Get the critere liste1.
	 *
	 * @return string Returns the critere liste1.
	 */
	public function getCritereListe1() {
		return $this->critereListe1;
	}

	/**
	 * Get the critere liste2.
	 *
	 * @return string Returns the critere liste2.
	 */
	public function getCritereListe2() {
		return $this->critereListe2;
	}

	/**
	 * Get the critere numerique1.
	 *
	 * @return float Returns the critere numerique1.
	 */
	public function getCritereNumerique1() {
		return $this->critereNumerique1;
	}

	/**
	 * Get the critere numerique2.
	 *
	 * @return float Returns the critere numerique2.
	 */
	public function getCritereNumerique2() {
		return $this->critereNumerique2;
	}

	/**
	 * Get the critere texte1.
	 *
	 * @return string Returns the critere texte1.
	 */
	public function getCritereTexte1() {
		return $this->critereTexte1;
	}

	/**
	 * Get the critere texte2.
	 *
	 * @return string Returns the critere texte2.
	 */
	public function getCritereTexte2() {
		return $this->critereTexte2;
	}

	/**
	 * Get the date passage.
	 *
	 * @return DateTime Returns the date passage.
	 */
	public function getDatePassage() {
		return $this->datePassage;
	}

	/**
	 * Get the date premier passage.
	 *
	 * @return DateTime Returns the date premier passage.
	 */
	public function getDatePremierPassage() {
		return $this->datePremierPassage;
	}

	/**
	 * Get the date transfert.
	 *
	 * @return DateTime Returns the date transfert.
	 */
	public function getDateTransfert() {
		return $this->dateTransfert;
	}

	/**
	 * Get the description.
	 *
	 * @return string Returns the description.
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get the duree pointee.
	 *
	 * @return float Returns the duree pointee.
	 */
	public function getDureePointee() {
		return $this->dureePointee;
	}

	/**
	 * Get the duree prevue.
	 *
	 * @return float Returns the duree prevue.
	 */
	public function getDureePrevue() {
		return $this->dureePrevue;
	}

	/**
	 * Get the duree validee.
	 *
	 * @return float Returns the duree validee.
	 */
	public function getDureeValidee() {
		return $this->dureeValidee;
	}

	/**
	 * Get the employe signe mob.
	 *
	 * @return string Returns the employe signe mob.
	 */
	public function getEmployeSigneMob() {
		return $this->employeSigneMob;
	}

	/**
	 * Get the gestion planning.
	 *
	 * @return boolean Returns the gestion planning.
	 */
	public function getGestionPlanning() {
		return $this->gestionPlanning;
	}

	/**
	 * Get the guid mob.
	 *
	 * @return string Returns the guid mob.
	 */
	public function getGuidMob() {
		return $this->guidMob;
	}

	/**
	 * Get the heure deb.
	 *
	 * @return DateTime Returns the heure deb.
	 */
	public function getHeureDeb() {
		return $this->heureDeb;
	}

	/**
	 * Get the latitude.
	 *
	 * @return float Returns the latitude.
	 */
	public function getLatitude() {
		return $this->latitude;
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
	 * Get the longitude.
	 *
	 * @return float Returns the longitude.
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Get the montant h t devis.
	 *
	 * @return float Returns the montant h t devis.
	 */
	public function getMontantHTDevis() {
		return $this->montantHTDevis;
	}

	/**
	 * Get the nb jours pointes.
	 *
	 * @return float Returns the nb jours pointes.
	 */
	public function getNbJoursPointes() {
		return $this->nbJoursPointes;
	}

	/**
	 * Get the nb jours prevus.
	 *
	 * @return float Returns the nb jours prevus.
	 */
	public function getNbJoursPrevus() {
		return $this->nbJoursPrevus;
	}

	/**
	 * Get the nombre employes.
	 *
	 * @return int Returns the nombre employes.
	 */
	public function getNombreEmployes() {
		return $this->nombreEmployes;
	}

	/**
	 * Get the non traite.
	 *
	 * @return boolean Returns the non traite.
	 */
	public function getNonTraite() {
		return $this->nonTraite;
	}

	/**
	 * Get the num b t.
	 *
	 * @return int Returns the num b t.
	 */
	public function getNumBT() {
		return $this->numBT;
	}

	/**
	 * Get the numero devis.
	 *
	 * @return string Returns the numero devis.
	 */
	public function getNumeroDevis() {
		return $this->numeroDevis;
	}

	/**
	 * Get the numero facture.
	 *
	 * @return string Returns the numero facture.
	 */
	public function getNumeroFacture() {
		return $this->numeroFacture;
	}

	/**
	 * Get the numero p j.
	 *
	 * @return int Returns the numero p j.
	 */
	public function getNumeroPJ() {
		return $this->numeroPJ;
	}

	/**
	 * Get the observation client.
	 *
	 * @return string Returns the observation client.
	 */
	public function getObservationClient() {
		return $this->observationClient;
	}

	/**
	 * Get the observation interne.
	 *
	 * @return string Returns the observation interne.
	 */
	public function getObservationInterne() {
		return $this->observationInterne;
	}

	/**
	 * Get the occasionnel.
	 *
	 * @return boolean Returns the occasionnel.
	 */
	public function getOccasionnel() {
		return $this->occasionnel;
	}

	/**
	 * Get the plusieurs jours.
	 *
	 * @return boolean Returns the plusieurs jours.
	 */
	public function getPlusieursJours() {
		return $this->plusieursJours;
	}

	/**
	 * Get the plusieurs mois.
	 *
	 * @return boolean Returns the plusieurs mois.
	 */
	public function getPlusieursMois() {
		return $this->plusieursMois;
	}

	/**
	 * Get the poste rent.
	 *
	 * @return string Returns the poste rent.
	 */
	public function getPosteRent() {
		return $this->posteRent;
	}

	/**
	 * Get the proratise.
	 *
	 * @return boolean Returns the proratise.
	 */
	public function getProratise() {
		return $this->proratise;
	}

	/**
	 * Get the signataire.
	 *
	 * @return string Returns the signataire.
	 */
	public function getSignataire() {
		return $this->signataire;
	}

	/**
	 * Get the signe.
	 *
	 * @return boolean Returns the signe.
	 */
	public function getSigne() {
		return $this->signe;
	}

	/**
	 * Get the start mob.
	 *
	 * @return string Returns the start mob.
	 */
	public function getStartMob() {
		return $this->startMob;
	}

	/**
	 * Get the type b t.
	 *
	 * @return string Returns the type b t.
	 */
	public function getTypeBT() {
		return $this->typeBT;
	}

	/**
	 * Get the type b t saisi.
	 *
	 * @return string Returns the type b t saisi.
	 */
	public function getTypeBTSaisi() {
		return $this->typeBTSaisi;
	}

	/**
	 * Get the uniq i d blocage.
	 *
	 * @return string Returns the uniq i d blocage.
	 */
	public function getUniqIDBlocage() {
		return $this->uniqIDBlocage;
	}

	/**
	 * Get the via.
	 *
	 * @return string Returns the via.
	 */
	public function getVia() {
		return $this->via;
	}

	/**
	 * Get the reference1 devis.
	 *
	 * @return string Returns the reference1 devis.
	 */
	public function getreference1Devis() {
		return $this->reference1Devis;
	}

	/**
	 * Get the reference2 devis.
	 *
	 * @return string Returns the reference2 devis.
	 */
	public function getreference2Devis() {
		return $this->reference2Devis;
	}

	/**
	 * Set the ad b t b t q.
	 *
	 * @param string $adBTBTQ The ad b t b t q.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTBTQ($adBTBTQ) {
		$this->adBTBTQ = $adBTBTQ;
		return $this;
	}

	/**
	 * Set the ad b t bureau distributeur.
	 *
	 * @param string $adBTBureauDistributeur The ad b t bureau distributeur.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTBureauDistributeur($adBTBureauDistributeur) {
		$this->adBTBureauDistributeur = $adBTBureauDistributeur;
		return $this;
	}

	/**
	 * Set the ad b t civilite.
	 *
	 * @param string $adBTCivilite The ad b t civilite.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTCivilite($adBTCivilite) {
		$this->adBTCivilite = $adBTCivilite;
		return $this;
	}

	/**
	 * Set the ad b t code pays.
	 *
	 * @param string $adBTCodePays The ad b t code pays.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTCodePays($adBTCodePays) {
		$this->adBTCodePays = $adBTCodePays;
		return $this;
	}

	/**
	 * Set the ad b t code postal.
	 *
	 * @param string $adBTCodePostal The ad b t code postal.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTCodePostal($adBTCodePostal) {
		$this->adBTCodePostal = $adBTCodePostal;
		return $this;
	}

	/**
	 * Set the ad b t complement.
	 *
	 * @param string $adBTComplement The ad b t complement.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTComplement($adBTComplement) {
		$this->adBTComplement = $adBTComplement;
		return $this;
	}

	/**
	 * Set the ad b t nom.
	 *
	 * @param string $adBTNom The ad b t nom.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTNom($adBTNom) {
		$this->adBTNom = $adBTNom;
		return $this;
	}

	/**
	 * Set the ad b t nom suite.
	 *
	 * @param string $adBTNomSuite The ad b t nom suite.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTNomSuite($adBTNomSuite) {
		$this->adBTNomSuite = $adBTNomSuite;
		return $this;
	}

	/**
	 * Set the ad b t nom voie.
	 *
	 * @param string $adBTNomVoie The ad b t nom voie.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTNomVoie($adBTNomVoie) {
		$this->adBTNomVoie = $adBTNomVoie;
		return $this;
	}

	/**
	 * Set the ad b t num voie.
	 *
	 * @param string $adBTNumVoie The ad b t num voie.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdBTNumVoie($adBTNumVoie) {
		$this->adBTNumVoie = $adBTNumVoie;
		return $this;
	}

	/**
	 * Set the ad f b t q.
	 *
	 * @param string $adFBTQ The ad f b t q.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFBTQ($adFBTQ) {
		$this->adFBTQ = $adFBTQ;
		return $this;
	}

	/**
	 * Set the ad f bureau distributeur.
	 *
	 * @param string $adFBureauDistributeur The ad f bureau distributeur.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFBureauDistributeur($adFBureauDistributeur) {
		$this->adFBureauDistributeur = $adFBureauDistributeur;
		return $this;
	}

	/**
	 * Set the ad f civilite.
	 *
	 * @param string $adFCivilite The ad f civilite.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFCivilite($adFCivilite) {
		$this->adFCivilite = $adFCivilite;
		return $this;
	}

	/**
	 * Set the ad f code pays.
	 *
	 * @param string $adFCodePays The ad f code pays.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFCodePays($adFCodePays) {
		$this->adFCodePays = $adFCodePays;
		return $this;
	}

	/**
	 * Set the ad f code postal.
	 *
	 * @param string $adFCodePostal The ad f code postal.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFCodePostal($adFCodePostal) {
		$this->adFCodePostal = $adFCodePostal;
		return $this;
	}

	/**
	 * Set the ad f complement.
	 *
	 * @param string $adFComplement The ad f complement.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFComplement($adFComplement) {
		$this->adFComplement = $adFComplement;
		return $this;
	}

	/**
	 * Set the ad f nom.
	 *
	 * @param string $adFNom The ad f nom.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFNom($adFNom) {
		$this->adFNom = $adFNom;
		return $this;
	}

	/**
	 * Set the ad f nom suite.
	 *
	 * @param string $adFNomSuite The ad f nom suite.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFNomSuite($adFNomSuite) {
		$this->adFNomSuite = $adFNomSuite;
		return $this;
	}

	/**
	 * Set the ad f nom suite2.
	 *
	 * @param string $adFNomSuite2 The ad f nom suite2.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFNomSuite2($adFNomSuite2) {
		$this->adFNomSuite2 = $adFNomSuite2;
		return $this;
	}

	/**
	 * Set the ad f nom suite3.
	 *
	 * @param string $adFNomSuite3 The ad f nom suite3.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFNomSuite3($adFNomSuite3) {
		$this->adFNomSuite3 = $adFNomSuite3;
		return $this;
	}

	/**
	 * Set the ad f nom voie.
	 *
	 * @param string $adFNomVoie The ad f nom voie.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFNomVoie($adFNomVoie) {
		$this->adFNomVoie = $adFNomVoie;
		return $this;
	}

	/**
	 * Set the ad f num voie.
	 *
	 * @param string $adFNumVoie The ad f num voie.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdFNumVoie($adFNumVoie) {
		$this->adFNumVoie = $adFNumVoie;
		return $this;
	}

	/**
	 * Set the adresse b t saisie.
	 *
	 * @param boolean $adresseBTSaisie The adresse b t saisie.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdresseBTSaisie($adresseBTSaisie) {
		$this->adresseBTSaisie = $adresseBTSaisie;
		return $this;
	}

	/**
	 * Set the adresse facturation saisie.
	 *
	 * @param boolean $adresseFacturationSaisie The adresse facturation saisie.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setAdresseFacturationSaisie($adresseFacturationSaisie) {
		$this->adresseFacturationSaisie = $adresseFacturationSaisie;
		return $this;
	}

	/**
	 * Set the b t copie.
	 *
	 * @param boolean $bTCopie The b t copie.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setBTCopie($bTCopie) {
		$this->bTCopie = $bTCopie;
		return $this;
	}

	/**
	 * Set the b t devis deja facture.
	 *
	 * @param boolean $bTDevisDejaFacture The b t devis deja facture.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setBTDevisDejaFacture($bTDevisDejaFacture) {
		$this->bTDevisDejaFacture = $bTDevisDejaFacture;
		return $this;
	}

	/**
	 * Set the b t valide.
	 *
	 * @param boolean $bTValide The b t valide.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setBTValide($bTValide) {
		$this->bTValide = $bTValide;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code equipe.
	 *
	 * @param string $codeEquipe The code equipe.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeEquipe($codeEquipe) {
		$this->codeEquipe = $codeEquipe;
		return $this;
	}

	/**
	 * Set the code regroupement devis.
	 *
	 * @param string $codeRegroupementDevis The code regroupement devis.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeRegroupementDevis($codeRegroupementDevis) {
		$this->codeRegroupementDevis = $codeRegroupementDevis;
		return $this;
	}

	/**
	 * Set the code tache type.
	 *
	 * @param string $codeTacheType The code tache type.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeTacheType($codeTacheType) {
		$this->codeTacheType = $codeTacheType;
		return $this;
	}

	/**
	 * Set the code tournee.
	 *
	 * @param string $codeTournee The code tournee.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCodeTournee($codeTournee) {
		$this->codeTournee = $codeTournee;
		return $this;
	}

	/**
	 * Set the critere bool1.
	 *
	 * @param boolean $critereBool1 The critere bool1.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereBool1($critereBool1) {
		$this->critereBool1 = $critereBool1;
		return $this;
	}

	/**
	 * Set the critere bool2.
	 *
	 * @param boolean $critereBool2 The critere bool2.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereBool2($critereBool2) {
		$this->critereBool2 = $critereBool2;
		return $this;
	}

	/**
	 * Set the critere byte1.
	 *
	 * @param string $critereByte1 The critere byte1.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereByte1($critereByte1) {
		$this->critereByte1 = $critereByte1;
		return $this;
	}

	/**
	 * Set the critere liste1.
	 *
	 * @param string $critereListe1 The critere liste1.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereListe1($critereListe1) {
		$this->critereListe1 = $critereListe1;
		return $this;
	}

	/**
	 * Set the critere liste2.
	 *
	 * @param string $critereListe2 The critere liste2.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereListe2($critereListe2) {
		$this->critereListe2 = $critereListe2;
		return $this;
	}

	/**
	 * Set the critere numerique1.
	 *
	 * @param float $critereNumerique1 The critere numerique1.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereNumerique1($critereNumerique1) {
		$this->critereNumerique1 = $critereNumerique1;
		return $this;
	}

	/**
	 * Set the critere numerique2.
	 *
	 * @param float $critereNumerique2 The critere numerique2.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereNumerique2($critereNumerique2) {
		$this->critereNumerique2 = $critereNumerique2;
		return $this;
	}

	/**
	 * Set the critere texte1.
	 *
	 * @param string $critereTexte1 The critere texte1.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereTexte1($critereTexte1) {
		$this->critereTexte1 = $critereTexte1;
		return $this;
	}

	/**
	 * Set the critere texte2.
	 *
	 * @param string $critereTexte2 The critere texte2.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setCritereTexte2($critereTexte2) {
		$this->critereTexte2 = $critereTexte2;
		return $this;
	}

	/**
	 * Set the date passage.
	 *
	 * @param DateTime $datePassage The date passage.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setDatePassage(DateTime $datePassage = null) {
		$this->datePassage = $datePassage;
		return $this;
	}

	/**
	 * Set the date premier passage.
	 *
	 * @param DateTime $datePremierPassage The date premier passage.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setDatePremierPassage(DateTime $datePremierPassage = null) {
		$this->datePremierPassage = $datePremierPassage;
		return $this;
	}

	/**
	 * Set the date transfert.
	 *
	 * @param DateTime $dateTransfert The date transfert.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setDateTransfert(DateTime $dateTransfert = null) {
		$this->dateTransfert = $dateTransfert;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the duree pointee.
	 *
	 * @param float $dureePointee The duree pointee.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setDureePointee($dureePointee) {
		$this->dureePointee = $dureePointee;
		return $this;
	}

	/**
	 * Set the duree prevue.
	 *
	 * @param float $dureePrevue The duree prevue.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setDureePrevue($dureePrevue) {
		$this->dureePrevue = $dureePrevue;
		return $this;
	}

	/**
	 * Set the duree validee.
	 *
	 * @param float $dureeValidee The duree validee.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setDureeValidee($dureeValidee) {
		$this->dureeValidee = $dureeValidee;
		return $this;
	}

	/**
	 * Set the employe signe mob.
	 *
	 * @param string $employeSigneMob The employe signe mob.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setEmployeSigneMob($employeSigneMob) {
		$this->employeSigneMob = $employeSigneMob;
		return $this;
	}

	/**
	 * Set the gestion planning.
	 *
	 * @param boolean $gestionPlanning The gestion planning.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setGestionPlanning($gestionPlanning) {
		$this->gestionPlanning = $gestionPlanning;
		return $this;
	}

	/**
	 * Set the guid mob.
	 *
	 * @param string $guidMob The guid mob.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setGuidMob($guidMob) {
		$this->guidMob = $guidMob;
		return $this;
	}

	/**
	 * Set the heure deb.
	 *
	 * @param DateTime $heureDeb The heure deb.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setHeureDeb(DateTime $heureDeb = null) {
		$this->heureDeb = $heureDeb;
		return $this;
	}

	/**
	 * Set the latitude.
	 *
	 * @param float $latitude The latitude.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the lien document.
	 *
	 * @param string $lienDocument The lien document.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setLienDocument($lienDocument) {
		$this->lienDocument = $lienDocument;
		return $this;
	}

	/**
	 * Set the longitude.
	 *
	 * @param float $longitude The longitude.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		return $this;
	}

	/**
	 * Set the montant h t devis.
	 *
	 * @param float $montantHTDevis The montant h t devis.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setMontantHTDevis($montantHTDevis) {
		$this->montantHTDevis = $montantHTDevis;
		return $this;
	}

	/**
	 * Set the nb jours pointes.
	 *
	 * @param float $nbJoursPointes The nb jours pointes.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNbJoursPointes($nbJoursPointes) {
		$this->nbJoursPointes = $nbJoursPointes;
		return $this;
	}

	/**
	 * Set the nb jours prevus.
	 *
	 * @param float $nbJoursPrevus The nb jours prevus.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNbJoursPrevus($nbJoursPrevus) {
		$this->nbJoursPrevus = $nbJoursPrevus;
		return $this;
	}

	/**
	 * Set the nombre employes.
	 *
	 * @param int $nombreEmployes The nombre employes.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNombreEmployes($nombreEmployes) {
		$this->nombreEmployes = $nombreEmployes;
		return $this;
	}

	/**
	 * Set the non traite.
	 *
	 * @param boolean $nonTraite The non traite.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNonTraite($nonTraite) {
		$this->nonTraite = $nonTraite;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the numero devis.
	 *
	 * @param string $numeroDevis The numero devis.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNumeroDevis($numeroDevis) {
		$this->numeroDevis = $numeroDevis;
		return $this;
	}

	/**
	 * Set the numero facture.
	 *
	 * @param string $numeroFacture The numero facture.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNumeroFacture($numeroFacture) {
		$this->numeroFacture = $numeroFacture;
		return $this;
	}

	/**
	 * Set the numero p j.
	 *
	 * @param int $numeroPJ The numero p j.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setNumeroPJ($numeroPJ) {
		$this->numeroPJ = $numeroPJ;
		return $this;
	}

	/**
	 * Set the observation client.
	 *
	 * @param string $observationClient The observation client.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setObservationClient($observationClient) {
		$this->observationClient = $observationClient;
		return $this;
	}

	/**
	 * Set the observation interne.
	 *
	 * @param string $observationInterne The observation interne.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setObservationInterne($observationInterne) {
		$this->observationInterne = $observationInterne;
		return $this;
	}

	/**
	 * Set the occasionnel.
	 *
	 * @param boolean $occasionnel The occasionnel.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setOccasionnel($occasionnel) {
		$this->occasionnel = $occasionnel;
		return $this;
	}

	/**
	 * Set the plusieurs jours.
	 *
	 * @param boolean $plusieursJours The plusieurs jours.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setPlusieursJours($plusieursJours) {
		$this->plusieursJours = $plusieursJours;
		return $this;
	}

	/**
	 * Set the plusieurs mois.
	 *
	 * @param boolean $plusieursMois The plusieurs mois.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setPlusieursMois($plusieursMois) {
		$this->plusieursMois = $plusieursMois;
		return $this;
	}

	/**
	 * Set the poste rent.
	 *
	 * @param string $posteRent The poste rent.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setPosteRent($posteRent) {
		$this->posteRent = $posteRent;
		return $this;
	}

	/**
	 * Set the proratise.
	 *
	 * @param boolean $proratise The proratise.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setProratise($proratise) {
		$this->proratise = $proratise;
		return $this;
	}

	/**
	 * Set the signataire.
	 *
	 * @param string $signataire The signataire.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setSignataire($signataire) {
		$this->signataire = $signataire;
		return $this;
	}

	/**
	 * Set the signe.
	 *
	 * @param boolean $signe The signe.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setSigne($signe) {
		$this->signe = $signe;
		return $this;
	}

	/**
	 * Set the start mob.
	 *
	 * @param string $startMob The start mob.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setStartMob($startMob) {
		$this->startMob = $startMob;
		return $this;
	}

	/**
	 * Set the type b t.
	 *
	 * @param string $typeBT The type b t.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setTypeBT($typeBT) {
		$this->typeBT = $typeBT;
		return $this;
	}

	/**
	 * Set the type b t saisi.
	 *
	 * @param string $typeBTSaisi The type b t saisi.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setTypeBTSaisi($typeBTSaisi) {
		$this->typeBTSaisi = $typeBTSaisi;
		return $this;
	}

	/**
	 * Set the uniq i d blocage.
	 *
	 * @param string $uniqIDBlocage The uniq i d blocage.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setUniqIDBlocage($uniqIDBlocage) {
		$this->uniqIDBlocage = $uniqIDBlocage;
		return $this;
	}

	/**
	 * Set the via.
	 *
	 * @param string $via The via.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setVia($via) {
		$this->via = $via;
		return $this;
	}

	/**
	 * Set the reference1 devis.
	 *
	 * @param string $reference1Devis The reference1 devis.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setreference1Devis($reference1Devis) {
		$this->reference1Devis = $reference1Devis;
		return $this;
	}

	/**
	 * Set the reference2 devis.
	 *
	 * @param string $reference2Devis The reference2 devis.
	 * @return BonTravPrev Returns this bon trav prev.
	 */
	public function setreference2Devis($reference2Devis) {
		$this->reference2Devis = $reference2Devis;
		return $this;
	}

}
