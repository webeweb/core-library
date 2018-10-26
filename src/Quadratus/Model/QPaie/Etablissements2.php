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
 * Etablissements2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Etablissements2 {

	/**
	 * Adherent syndicat.
	 *
	 * @var boolean
	 */
	private $adherentSyndicat;

	/**
	 * Annee chgt effectif.
	 *
	 * @var string
	 */
	private $anneeChgtEffectif;

	/**
	 * Annee j e i.
	 *
	 * @var int
	 */
	private $anneeJEI;

	/**
	 * Assujetti c v a e.
	 *
	 * @var boolean
	 */
	private $assujettiCVAE;

	/**
	 * Autre signature d n a e.
	 *
	 * @var string
	 */
	private $autreSignatureDNAE;

	/**
	 * B i c2.
	 *
	 * @var string
	 */
	private $bIC2;

	/**
	 * B i c3.
	 *
	 * @var string
	 */
	private $bIC3;

	/**
	 * Caisse c p transport.
	 *
	 * @var boolean
	 */
	private $caisseCPTransport;

	/**
	 * Categorie juridique.
	 *
	 * @var string
	 */
	private $categorieJuridique;

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Code med trav d u e.
	 *
	 * @var string
	 */
	private $codeMedTravDUE;

	/**
	 * Code orga d u e.
	 *
	 * @var string
	 */
	private $codeOrgaDUE;

	/**
	 * Coeff fillon moins20.
	 *
	 * @var boolean
	 */
	private $coeffFillonMoins20;

	/**
	 * Compte charge heures act part.
	 *
	 * @var string
	 */
	private $compteChargeHeuresActPart;

	/**
	 * Compte charge indem abs intemp.
	 *
	 * @var string
	 */
	private $compteChargeIndemAbsIntemp;

	/**
	 * Compte charge indem act part.
	 *
	 * @var string
	 */
	private $compteChargeIndemActPart;

	/**
	 * Compte charge int vers.
	 *
	 * @var string
	 */
	private $compteChargeIntVers;

	/**
	 * Compte charge part vers.
	 *
	 * @var string
	 */
	private $compteChargePartVers;

	/**
	 * Contact signature d n a e.
	 *
	 * @var string
	 */
	private $contactSignatureDNAE;

	/**
	 * Date fin exclure l f r2012.
	 *
	 * @var DateTime
	 */
	private $dateFinExclureLFR2012;

	/**
	 * Exclure l f r2012.
	 *
	 * @var boolean
	 */
	private $exclureLFR2012;

	/**
	 * Gestion h s t e p a.
	 *
	 * @var string
	 */
	private $gestionHSTEPA;

	/**
	 * Gestion maintien sal auto.
	 *
	 * @var boolean
	 */
	private $gestionMaintienSalAuto;

	/**
	 * I b a n2.
	 *
	 * @var string
	 */
	private $iBAN2;

	/**
	 * I b a n3.
	 *
	 * @var string
	 */
	private $iBAN3;

	/**
	 * Iban id client2.
	 *
	 * @var string
	 */
	private $ibanIdClient2;

	/**
	 * Iban id client3.
	 *
	 * @var string
	 */
	private $ibanIdClient3;

	/**
	 * Implantation entreprise.
	 *
	 * @var string
	 */
	private $implantationEntreprise;

	/**
	 * J f charge emp.
	 *
	 * @var boolean
	 */
	private $jFChargeEmp;

	/**
	 * Lieu signature d n a e.
	 *
	 * @var string
	 */
	private $lieuSignatureDNAE;

	/**
	 * Maintien net deduc c s g i j s s.
	 *
	 * @var boolean
	 */
	private $maintienNetDeducCSGIJSS;

	/**
	 * Nb fraction etab.
	 *
	 * @var int
	 */
	private $nbFractionEtab;

	/**
	 * Nom signataire d n a e.
	 *
	 * @var string
	 */
	private $nomSignataireDNAE;

	/**
	 * Prenom signataire d n a e.
	 *
	 * @var string
	 */
	private $prenomSignataireDNAE;

	/**
	 * Pseudo siret.
	 *
	 * @var string
	 */
	private $pseudoSiret;

	/**
	 * Qualite signataire d n a e.
	 *
	 * @var string
	 */
	private $qualiteSignataireDNAE;

	/**
	 * Reduction mayotte.
	 *
	 * @var boolean
	 */
	private $reductionMayotte;

	/**
	 * Remuneration expatries.
	 *
	 * @var string
	 */
	private $remunerationExpatries;

	/**
	 * S m i c m courant.
	 *
	 * @var boolean
	 */
	private $sMICMCourant;

	/**
	 * Siret centralisateur.
	 *
	 * @var boolean
	 */
	private $siretCentralisateur;

	/**
	 * Societe interim.
	 *
	 * @var boolean
	 */
	private $societeInterim;

	/**
	 * T d s19.
	 *
	 * @var string
	 */
	private $tDS19;

	/**
	 * T e p a moins20.
	 *
	 * @var boolean
	 */
	private $tEPAMoins20;

	/**
	 * Taux compl heure.
	 *
	 * @var float
	 */
	private $tauxComplHeure;

	/**
	 * Taux cotis o s s et o p e.
	 *
	 * @var float
	 */
	private $tauxCotisOSSEtOPE;

	/**
	 * Taux h comp.
	 *
	 * @var float
	 */
	private $tauxHComp;

	/**
	 * Tel signature d n a e.
	 *
	 * @var string
	 */
	private $telSignatureDNAE;

	/**
	 * Type effectif c t.
	 *
	 * @var string
	 */
	private $typeEffectifCT;

	/**
	 * Type maintien brut net.
	 *
	 * @var string
	 */
	private $typeMaintienBrutNet;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the adherent syndicat.
	 *
	 * @return boolean Returns the adherent syndicat.
	 */
	public function getAdherentSyndicat() {
		return $this->adherentSyndicat;
	}

	/**
	 * Get the annee chgt effectif.
	 *
	 * @return string Returns the annee chgt effectif.
	 */
	public function getAnneeChgtEffectif() {
		return $this->anneeChgtEffectif;
	}

	/**
	 * Get the annee j e i.
	 *
	 * @return int Returns the annee j e i.
	 */
	public function getAnneeJEI() {
		return $this->anneeJEI;
	}

	/**
	 * Get the assujetti c v a e.
	 *
	 * @return boolean Returns the assujetti c v a e.
	 */
	public function getAssujettiCVAE() {
		return $this->assujettiCVAE;
	}

	/**
	 * Get the autre signature d n a e.
	 *
	 * @return string Returns the autre signature d n a e.
	 */
	public function getAutreSignatureDNAE() {
		return $this->autreSignatureDNAE;
	}

	/**
	 * Get the b i c2.
	 *
	 * @return string Returns the b i c2.
	 */
	public function getBIC2() {
		return $this->bIC2;
	}

	/**
	 * Get the b i c3.
	 *
	 * @return string Returns the b i c3.
	 */
	public function getBIC3() {
		return $this->bIC3;
	}

	/**
	 * Get the caisse c p transport.
	 *
	 * @return boolean Returns the caisse c p transport.
	 */
	public function getCaisseCPTransport() {
		return $this->caisseCPTransport;
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
	 * Get the code etablissement.
	 *
	 * @return int Returns the code etablissement.
	 */
	public function getCodeEtablissement() {
		return $this->codeEtablissement;
	}

	/**
	 * Get the code med trav d u e.
	 *
	 * @return string Returns the code med trav d u e.
	 */
	public function getCodeMedTravDUE() {
		return $this->codeMedTravDUE;
	}

	/**
	 * Get the code orga d u e.
	 *
	 * @return string Returns the code orga d u e.
	 */
	public function getCodeOrgaDUE() {
		return $this->codeOrgaDUE;
	}

	/**
	 * Get the coeff fillon moins20.
	 *
	 * @return boolean Returns the coeff fillon moins20.
	 */
	public function getCoeffFillonMoins20() {
		return $this->coeffFillonMoins20;
	}

	/**
	 * Get the compte charge heures act part.
	 *
	 * @return string Returns the compte charge heures act part.
	 */
	public function getCompteChargeHeuresActPart() {
		return $this->compteChargeHeuresActPart;
	}

	/**
	 * Get the compte charge indem abs intemp.
	 *
	 * @return string Returns the compte charge indem abs intemp.
	 */
	public function getCompteChargeIndemAbsIntemp() {
		return $this->compteChargeIndemAbsIntemp;
	}

	/**
	 * Get the compte charge indem act part.
	 *
	 * @return string Returns the compte charge indem act part.
	 */
	public function getCompteChargeIndemActPart() {
		return $this->compteChargeIndemActPart;
	}

	/**
	 * Get the compte charge int vers.
	 *
	 * @return string Returns the compte charge int vers.
	 */
	public function getCompteChargeIntVers() {
		return $this->compteChargeIntVers;
	}

	/**
	 * Get the compte charge part vers.
	 *
	 * @return string Returns the compte charge part vers.
	 */
	public function getCompteChargePartVers() {
		return $this->compteChargePartVers;
	}

	/**
	 * Get the contact signature d n a e.
	 *
	 * @return string Returns the contact signature d n a e.
	 */
	public function getContactSignatureDNAE() {
		return $this->contactSignatureDNAE;
	}

	/**
	 * Get the date fin exclure l f r2012.
	 *
	 * @return DateTime Returns the date fin exclure l f r2012.
	 */
	public function getDateFinExclureLFR2012() {
		return $this->dateFinExclureLFR2012;
	}

	/**
	 * Get the exclure l f r2012.
	 *
	 * @return boolean Returns the exclure l f r2012.
	 */
	public function getExclureLFR2012() {
		return $this->exclureLFR2012;
	}

	/**
	 * Get the gestion h s t e p a.
	 *
	 * @return string Returns the gestion h s t e p a.
	 */
	public function getGestionHSTEPA() {
		return $this->gestionHSTEPA;
	}

	/**
	 * Get the gestion maintien sal auto.
	 *
	 * @return boolean Returns the gestion maintien sal auto.
	 */
	public function getGestionMaintienSalAuto() {
		return $this->gestionMaintienSalAuto;
	}

	/**
	 * Get the i b a n2.
	 *
	 * @return string Returns the i b a n2.
	 */
	public function getIBAN2() {
		return $this->iBAN2;
	}

	/**
	 * Get the i b a n3.
	 *
	 * @return string Returns the i b a n3.
	 */
	public function getIBAN3() {
		return $this->iBAN3;
	}

	/**
	 * Get the iban id client2.
	 *
	 * @return string Returns the iban id client2.
	 */
	public function getIbanIdClient2() {
		return $this->ibanIdClient2;
	}

	/**
	 * Get the iban id client3.
	 *
	 * @return string Returns the iban id client3.
	 */
	public function getIbanIdClient3() {
		return $this->ibanIdClient3;
	}

	/**
	 * Get the implantation entreprise.
	 *
	 * @return string Returns the implantation entreprise.
	 */
	public function getImplantationEntreprise() {
		return $this->implantationEntreprise;
	}

	/**
	 * Get the j f charge emp.
	 *
	 * @return boolean Returns the j f charge emp.
	 */
	public function getJFChargeEmp() {
		return $this->jFChargeEmp;
	}

	/**
	 * Get the lieu signature d n a e.
	 *
	 * @return string Returns the lieu signature d n a e.
	 */
	public function getLieuSignatureDNAE() {
		return $this->lieuSignatureDNAE;
	}

	/**
	 * Get the maintien net deduc c s g i j s s.
	 *
	 * @return boolean Returns the maintien net deduc c s g i j s s.
	 */
	public function getMaintienNetDeducCSGIJSS() {
		return $this->maintienNetDeducCSGIJSS;
	}

	/**
	 * Get the nb fraction etab.
	 *
	 * @return int Returns the nb fraction etab.
	 */
	public function getNbFractionEtab() {
		return $this->nbFractionEtab;
	}

	/**
	 * Get the nom signataire d n a e.
	 *
	 * @return string Returns the nom signataire d n a e.
	 */
	public function getNomSignataireDNAE() {
		return $this->nomSignataireDNAE;
	}

	/**
	 * Get the prenom signataire d n a e.
	 *
	 * @return string Returns the prenom signataire d n a e.
	 */
	public function getPrenomSignataireDNAE() {
		return $this->prenomSignataireDNAE;
	}

	/**
	 * Get the pseudo siret.
	 *
	 * @return string Returns the pseudo siret.
	 */
	public function getPseudoSiret() {
		return $this->pseudoSiret;
	}

	/**
	 * Get the qualite signataire d n a e.
	 *
	 * @return string Returns the qualite signataire d n a e.
	 */
	public function getQualiteSignataireDNAE() {
		return $this->qualiteSignataireDNAE;
	}

	/**
	 * Get the reduction mayotte.
	 *
	 * @return boolean Returns the reduction mayotte.
	 */
	public function getReductionMayotte() {
		return $this->reductionMayotte;
	}

	/**
	 * Get the remuneration expatries.
	 *
	 * @return string Returns the remuneration expatries.
	 */
	public function getRemunerationExpatries() {
		return $this->remunerationExpatries;
	}

	/**
	 * Get the s m i c m courant.
	 *
	 * @return boolean Returns the s m i c m courant.
	 */
	public function getSMICMCourant() {
		return $this->sMICMCourant;
	}

	/**
	 * Get the siret centralisateur.
	 *
	 * @return boolean Returns the siret centralisateur.
	 */
	public function getSiretCentralisateur() {
		return $this->siretCentralisateur;
	}

	/**
	 * Get the societe interim.
	 *
	 * @return boolean Returns the societe interim.
	 */
	public function getSocieteInterim() {
		return $this->societeInterim;
	}

	/**
	 * Get the t d s19.
	 *
	 * @return string Returns the t d s19.
	 */
	public function getTDS19() {
		return $this->tDS19;
	}

	/**
	 * Get the t e p a moins20.
	 *
	 * @return boolean Returns the t e p a moins20.
	 */
	public function getTEPAMoins20() {
		return $this->tEPAMoins20;
	}

	/**
	 * Get the taux compl heure.
	 *
	 * @return float Returns the taux compl heure.
	 */
	public function getTauxComplHeure() {
		return $this->tauxComplHeure;
	}

	/**
	 * Get the taux cotis o s s et o p e.
	 *
	 * @return float Returns the taux cotis o s s et o p e.
	 */
	public function getTauxCotisOSSEtOPE() {
		return $this->tauxCotisOSSEtOPE;
	}

	/**
	 * Get the taux h comp.
	 *
	 * @return float Returns the taux h comp.
	 */
	public function getTauxHComp() {
		return $this->tauxHComp;
	}

	/**
	 * Get the tel signature d n a e.
	 *
	 * @return string Returns the tel signature d n a e.
	 */
	public function getTelSignatureDNAE() {
		return $this->telSignatureDNAE;
	}

	/**
	 * Get the type effectif c t.
	 *
	 * @return string Returns the type effectif c t.
	 */
	public function getTypeEffectifCT() {
		return $this->typeEffectifCT;
	}

	/**
	 * Get the type maintien brut net.
	 *
	 * @return string Returns the type maintien brut net.
	 */
	public function getTypeMaintienBrutNet() {
		return $this->typeMaintienBrutNet;
	}

	/**
	 * Set the adherent syndicat.
	 *
	 * @param boolean $adherentSyndicat The adherent syndicat.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setAdherentSyndicat($adherentSyndicat) {
		$this->adherentSyndicat = $adherentSyndicat;
		return $this;
	}

	/**
	 * Set the annee chgt effectif.
	 *
	 * @param string $anneeChgtEffectif The annee chgt effectif.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setAnneeChgtEffectif($anneeChgtEffectif) {
		$this->anneeChgtEffectif = $anneeChgtEffectif;
		return $this;
	}

	/**
	 * Set the annee j e i.
	 *
	 * @param int $anneeJEI The annee j e i.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setAnneeJEI($anneeJEI) {
		$this->anneeJEI = $anneeJEI;
		return $this;
	}

	/**
	 * Set the assujetti c v a e.
	 *
	 * @param boolean $assujettiCVAE The assujetti c v a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setAssujettiCVAE($assujettiCVAE) {
		$this->assujettiCVAE = $assujettiCVAE;
		return $this;
	}

	/**
	 * Set the autre signature d n a e.
	 *
	 * @param string $autreSignatureDNAE The autre signature d n a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setAutreSignatureDNAE($autreSignatureDNAE) {
		$this->autreSignatureDNAE = $autreSignatureDNAE;
		return $this;
	}

	/**
	 * Set the b i c2.
	 *
	 * @param string $bIC2 The b i c2.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setBIC2($bIC2) {
		$this->bIC2 = $bIC2;
		return $this;
	}

	/**
	 * Set the b i c3.
	 *
	 * @param string $bIC3 The b i c3.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setBIC3($bIC3) {
		$this->bIC3 = $bIC3;
		return $this;
	}

	/**
	 * Set the caisse c p transport.
	 *
	 * @param boolean $caisseCPTransport The caisse c p transport.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCaisseCPTransport($caisseCPTransport) {
		$this->caisseCPTransport = $caisseCPTransport;
		return $this;
	}

	/**
	 * Set the categorie juridique.
	 *
	 * @param string $categorieJuridique The categorie juridique.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCategorieJuridique($categorieJuridique) {
		$this->categorieJuridique = $categorieJuridique;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the code med trav d u e.
	 *
	 * @param string $codeMedTravDUE The code med trav d u e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCodeMedTravDUE($codeMedTravDUE) {
		$this->codeMedTravDUE = $codeMedTravDUE;
		return $this;
	}

	/**
	 * Set the code orga d u e.
	 *
	 * @param string $codeOrgaDUE The code orga d u e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCodeOrgaDUE($codeOrgaDUE) {
		$this->codeOrgaDUE = $codeOrgaDUE;
		return $this;
	}

	/**
	 * Set the coeff fillon moins20.
	 *
	 * @param boolean $coeffFillonMoins20 The coeff fillon moins20.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCoeffFillonMoins20($coeffFillonMoins20) {
		$this->coeffFillonMoins20 = $coeffFillonMoins20;
		return $this;
	}

	/**
	 * Set the compte charge heures act part.
	 *
	 * @param string $compteChargeHeuresActPart The compte charge heures act part.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCompteChargeHeuresActPart($compteChargeHeuresActPart) {
		$this->compteChargeHeuresActPart = $compteChargeHeuresActPart;
		return $this;
	}

	/**
	 * Set the compte charge indem abs intemp.
	 *
	 * @param string $compteChargeIndemAbsIntemp The compte charge indem abs intemp.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCompteChargeIndemAbsIntemp($compteChargeIndemAbsIntemp) {
		$this->compteChargeIndemAbsIntemp = $compteChargeIndemAbsIntemp;
		return $this;
	}

	/**
	 * Set the compte charge indem act part.
	 *
	 * @param string $compteChargeIndemActPart The compte charge indem act part.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCompteChargeIndemActPart($compteChargeIndemActPart) {
		$this->compteChargeIndemActPart = $compteChargeIndemActPart;
		return $this;
	}

	/**
	 * Set the compte charge int vers.
	 *
	 * @param string $compteChargeIntVers The compte charge int vers.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCompteChargeIntVers($compteChargeIntVers) {
		$this->compteChargeIntVers = $compteChargeIntVers;
		return $this;
	}

	/**
	 * Set the compte charge part vers.
	 *
	 * @param string $compteChargePartVers The compte charge part vers.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setCompteChargePartVers($compteChargePartVers) {
		$this->compteChargePartVers = $compteChargePartVers;
		return $this;
	}

	/**
	 * Set the contact signature d n a e.
	 *
	 * @param string $contactSignatureDNAE The contact signature d n a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setContactSignatureDNAE($contactSignatureDNAE) {
		$this->contactSignatureDNAE = $contactSignatureDNAE;
		return $this;
	}

	/**
	 * Set the date fin exclure l f r2012.
	 *
	 * @param DateTime $dateFinExclureLFR2012 The date fin exclure l f r2012.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setDateFinExclureLFR2012(DateTime $dateFinExclureLFR2012 = null) {
		$this->dateFinExclureLFR2012 = $dateFinExclureLFR2012;
		return $this;
	}

	/**
	 * Set the exclure l f r2012.
	 *
	 * @param boolean $exclureLFR2012 The exclure l f r2012.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setExclureLFR2012($exclureLFR2012) {
		$this->exclureLFR2012 = $exclureLFR2012;
		return $this;
	}

	/**
	 * Set the gestion h s t e p a.
	 *
	 * @param string $gestionHSTEPA The gestion h s t e p a.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setGestionHSTEPA($gestionHSTEPA) {
		$this->gestionHSTEPA = $gestionHSTEPA;
		return $this;
	}

	/**
	 * Set the gestion maintien sal auto.
	 *
	 * @param boolean $gestionMaintienSalAuto The gestion maintien sal auto.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setGestionMaintienSalAuto($gestionMaintienSalAuto) {
		$this->gestionMaintienSalAuto = $gestionMaintienSalAuto;
		return $this;
	}

	/**
	 * Set the i b a n2.
	 *
	 * @param string $iBAN2 The i b a n2.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setIBAN2($iBAN2) {
		$this->iBAN2 = $iBAN2;
		return $this;
	}

	/**
	 * Set the i b a n3.
	 *
	 * @param string $iBAN3 The i b a n3.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setIBAN3($iBAN3) {
		$this->iBAN3 = $iBAN3;
		return $this;
	}

	/**
	 * Set the iban id client2.
	 *
	 * @param string $ibanIdClient2 The iban id client2.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setIbanIdClient2($ibanIdClient2) {
		$this->ibanIdClient2 = $ibanIdClient2;
		return $this;
	}

	/**
	 * Set the iban id client3.
	 *
	 * @param string $ibanIdClient3 The iban id client3.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setIbanIdClient3($ibanIdClient3) {
		$this->ibanIdClient3 = $ibanIdClient3;
		return $this;
	}

	/**
	 * Set the implantation entreprise.
	 *
	 * @param string $implantationEntreprise The implantation entreprise.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setImplantationEntreprise($implantationEntreprise) {
		$this->implantationEntreprise = $implantationEntreprise;
		return $this;
	}

	/**
	 * Set the j f charge emp.
	 *
	 * @param boolean $jFChargeEmp The j f charge emp.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setJFChargeEmp($jFChargeEmp) {
		$this->jFChargeEmp = $jFChargeEmp;
		return $this;
	}

	/**
	 * Set the lieu signature d n a e.
	 *
	 * @param string $lieuSignatureDNAE The lieu signature d n a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setLieuSignatureDNAE($lieuSignatureDNAE) {
		$this->lieuSignatureDNAE = $lieuSignatureDNAE;
		return $this;
	}

	/**
	 * Set the maintien net deduc c s g i j s s.
	 *
	 * @param boolean $maintienNetDeducCSGIJSS The maintien net deduc c s g i j s s.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setMaintienNetDeducCSGIJSS($maintienNetDeducCSGIJSS) {
		$this->maintienNetDeducCSGIJSS = $maintienNetDeducCSGIJSS;
		return $this;
	}

	/**
	 * Set the nb fraction etab.
	 *
	 * @param int $nbFractionEtab The nb fraction etab.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setNbFractionEtab($nbFractionEtab) {
		$this->nbFractionEtab = $nbFractionEtab;
		return $this;
	}

	/**
	 * Set the nom signataire d n a e.
	 *
	 * @param string $nomSignataireDNAE The nom signataire d n a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setNomSignataireDNAE($nomSignataireDNAE) {
		$this->nomSignataireDNAE = $nomSignataireDNAE;
		return $this;
	}

	/**
	 * Set the prenom signataire d n a e.
	 *
	 * @param string $prenomSignataireDNAE The prenom signataire d n a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setPrenomSignataireDNAE($prenomSignataireDNAE) {
		$this->prenomSignataireDNAE = $prenomSignataireDNAE;
		return $this;
	}

	/**
	 * Set the pseudo siret.
	 *
	 * @param string $pseudoSiret The pseudo siret.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setPseudoSiret($pseudoSiret) {
		$this->pseudoSiret = $pseudoSiret;
		return $this;
	}

	/**
	 * Set the qualite signataire d n a e.
	 *
	 * @param string $qualiteSignataireDNAE The qualite signataire d n a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setQualiteSignataireDNAE($qualiteSignataireDNAE) {
		$this->qualiteSignataireDNAE = $qualiteSignataireDNAE;
		return $this;
	}

	/**
	 * Set the reduction mayotte.
	 *
	 * @param boolean $reductionMayotte The reduction mayotte.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setReductionMayotte($reductionMayotte) {
		$this->reductionMayotte = $reductionMayotte;
		return $this;
	}

	/**
	 * Set the remuneration expatries.
	 *
	 * @param string $remunerationExpatries The remuneration expatries.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setRemunerationExpatries($remunerationExpatries) {
		$this->remunerationExpatries = $remunerationExpatries;
		return $this;
	}

	/**
	 * Set the s m i c m courant.
	 *
	 * @param boolean $sMICMCourant The s m i c m courant.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setSMICMCourant($sMICMCourant) {
		$this->sMICMCourant = $sMICMCourant;
		return $this;
	}

	/**
	 * Set the siret centralisateur.
	 *
	 * @param boolean $siretCentralisateur The siret centralisateur.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setSiretCentralisateur($siretCentralisateur) {
		$this->siretCentralisateur = $siretCentralisateur;
		return $this;
	}

	/**
	 * Set the societe interim.
	 *
	 * @param boolean $societeInterim The societe interim.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setSocieteInterim($societeInterim) {
		$this->societeInterim = $societeInterim;
		return $this;
	}

	/**
	 * Set the t d s19.
	 *
	 * @param string $tDS19 The t d s19.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTDS19($tDS19) {
		$this->tDS19 = $tDS19;
		return $this;
	}

	/**
	 * Set the t e p a moins20.
	 *
	 * @param boolean $tEPAMoins20 The t e p a moins20.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTEPAMoins20($tEPAMoins20) {
		$this->tEPAMoins20 = $tEPAMoins20;
		return $this;
	}

	/**
	 * Set the taux compl heure.
	 *
	 * @param float $tauxComplHeure The taux compl heure.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTauxComplHeure($tauxComplHeure) {
		$this->tauxComplHeure = $tauxComplHeure;
		return $this;
	}

	/**
	 * Set the taux cotis o s s et o p e.
	 *
	 * @param float $tauxCotisOSSEtOPE The taux cotis o s s et o p e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTauxCotisOSSEtOPE($tauxCotisOSSEtOPE) {
		$this->tauxCotisOSSEtOPE = $tauxCotisOSSEtOPE;
		return $this;
	}

	/**
	 * Set the taux h comp.
	 *
	 * @param float $tauxHComp The taux h comp.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTauxHComp($tauxHComp) {
		$this->tauxHComp = $tauxHComp;
		return $this;
	}

	/**
	 * Set the tel signature d n a e.
	 *
	 * @param string $telSignatureDNAE The tel signature d n a e.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTelSignatureDNAE($telSignatureDNAE) {
		$this->telSignatureDNAE = $telSignatureDNAE;
		return $this;
	}

	/**
	 * Set the type effectif c t.
	 *
	 * @param string $typeEffectifCT The type effectif c t.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTypeEffectifCT($typeEffectifCT) {
		$this->typeEffectifCT = $typeEffectifCT;
		return $this;
	}

	/**
	 * Set the type maintien brut net.
	 *
	 * @param string $typeMaintienBrutNet The type maintien brut net.
	 * @return Etablissements2 Returns this etablissements2.
	 */
	public function setTypeMaintienBrutNet($typeMaintienBrutNet) {
		$this->typeMaintienBrutNet = $typeMaintienBrutNet;
		return $this;
	}

}
