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
 * Groupes client model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class GroupesClient {

	/**
	 * Actif.
	 *
	 * @var boolean
	 */
	private $actif;

	/**
	 * Bloque.
	 *
	 * @var boolean
	 */
	private $bloque;

	/**
	 * Cle alpha.
	 *
	 * @var string
	 */
	private $cleAlpha;

	/**
	 * Client perdu.
	 *
	 * @var boolean
	 */
	private $clientPerdu;

	/**
	 * Code analytique.
	 *
	 * @var string
	 */
	private $codeAnalytique;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code client fact.
	 *
	 * @var string
	 */
	private $codeClientFact;

	/**
	 * Code devise.
	 *
	 * @var string
	 */
	private $codeDevise;

	/**
	 * Code langue designation article.
	 *
	 * @var string
	 */
	private $codeLangueDesignationArticle;

	/**
	 * Code reglement.
	 *
	 * @var string
	 */
	private $codeReglement;

	/**
	 * Code t v a.
	 *
	 * @var string
	 */
	private $codeTVA;

	/**
	 * Code ventil compta.
	 *
	 * @var string
	 */
	private $codeVentilCompta;

	/**
	 * Collectif.
	 *
	 * @var string
	 */
	private $collectif;

	/**
	 * Date entree.
	 *
	 * @var DateTime
	 */
	private $dateEntree;

	/**
	 * Date sortie.
	 *
	 * @var DateTime
	 */
	private $dateSortie;

	/**
	 * Domiciliation bancaire1.
	 *
	 * @var string
	 */
	private $domiciliationBancaire1;

	/**
	 * Domiciliation bancaire2.
	 *
	 * @var string
	 */
	private $domiciliationBancaire2;

	/**
	 * Echeance fin decade.
	 *
	 * @var boolean
	 */
	private $echeanceFinDecade;

	/**
	 * Facture euros.
	 *
	 * @var boolean
	 */
	private $factureEuros;

	/**
	 * Groupe.
	 *
	 * @var string
	 */
	private $groupe;

	/**
	 * Nb b l.
	 *
	 * @var int
	 */
	private $nbBL;

	/**
	 * Nb facture.
	 *
	 * @var int
	 */
	private $nbFacture;

	/**
	 * Nombre echeances.
	 *
	 * @var string
	 */
	private $nombreEcheances;

	/**
	 * Numero compte.
	 *
	 * @var string
	 */
	private $numeroCompte;

	/**
	 * Paiement depart le.
	 *
	 * @var string
	 */
	private $paiementDepartLe;

	/**
	 * Paiement le.
	 *
	 * @var string
	 */
	private $paiementLe;

	/**
	 * Paiement nombre de jours.
	 *
	 * @var int
	 */
	private $paiementNombreDeJours;

	/**
	 * R i b.
	 *
	 * @var string
	 */
	private $rIB;

	/**
	 * Remise ligne1.
	 *
	 * @var float
	 */
	private $remiseLigne1;

	/**
	 * Remise ligne2.
	 *
	 * @var float
	 */
	private $remiseLigne2;

	/**
	 * Remise ligne3.
	 *
	 * @var float
	 */
	private $remiseLigne3;

	/**
	 * Remise pied.
	 *
	 * @var float
	 */
	private $remisePied;

	/**
	 * Remise pied2.
	 *
	 * @var float
	 */
	private $remisePied2;

	/**
	 * Remise pied3.
	 *
	 * @var float
	 */
	private $remisePied3;

	/**
	 * Soumis escompte.
	 *
	 * @var boolean
	 */
	private $soumisEscompte;

	/**
	 * Taux escompte.
	 *
	 * @var float
	 */
	private $tauxEscompte;

	/**
	 * Type facture.
	 *
	 * @var int
	 */
	private $typeFacture;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the actif.
	 *
	 * @return boolean Returns the actif.
	 */
	public function getActif() {
		return $this->actif;
	}

	/**
	 * Get the bloque.
	 *
	 * @return boolean Returns the bloque.
	 */
	public function getBloque() {
		return $this->bloque;
	}

	/**
	 * Get the cle alpha.
	 *
	 * @return string Returns the cle alpha.
	 */
	public function getCleAlpha() {
		return $this->cleAlpha;
	}

	/**
	 * Get the client perdu.
	 *
	 * @return boolean Returns the client perdu.
	 */
	public function getClientPerdu() {
		return $this->clientPerdu;
	}

	/**
	 * Get the code analytique.
	 *
	 * @return string Returns the code analytique.
	 */
	public function getCodeAnalytique() {
		return $this->codeAnalytique;
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
	 * Get the code client fact.
	 *
	 * @return string Returns the code client fact.
	 */
	public function getCodeClientFact() {
		return $this->codeClientFact;
	}

	/**
	 * Get the code devise.
	 *
	 * @return string Returns the code devise.
	 */
	public function getCodeDevise() {
		return $this->codeDevise;
	}

	/**
	 * Get the code langue designation article.
	 *
	 * @return string Returns the code langue designation article.
	 */
	public function getCodeLangueDesignationArticle() {
		return $this->codeLangueDesignationArticle;
	}

	/**
	 * Get the code reglement.
	 *
	 * @return string Returns the code reglement.
	 */
	public function getCodeReglement() {
		return $this->codeReglement;
	}

	/**
	 * Get the code t v a.
	 *
	 * @return string Returns the code t v a.
	 */
	public function getCodeTVA() {
		return $this->codeTVA;
	}

	/**
	 * Get the code ventil compta.
	 *
	 * @return string Returns the code ventil compta.
	 */
	public function getCodeVentilCompta() {
		return $this->codeVentilCompta;
	}

	/**
	 * Get the collectif.
	 *
	 * @return string Returns the collectif.
	 */
	public function getCollectif() {
		return $this->collectif;
	}

	/**
	 * Get the date entree.
	 *
	 * @return DateTime Returns the date entree.
	 */
	public function getDateEntree() {
		return $this->dateEntree;
	}

	/**
	 * Get the date sortie.
	 *
	 * @return DateTime Returns the date sortie.
	 */
	public function getDateSortie() {
		return $this->dateSortie;
	}

	/**
	 * Get the domiciliation bancaire1.
	 *
	 * @return string Returns the domiciliation bancaire1.
	 */
	public function getDomiciliationBancaire1() {
		return $this->domiciliationBancaire1;
	}

	/**
	 * Get the domiciliation bancaire2.
	 *
	 * @return string Returns the domiciliation bancaire2.
	 */
	public function getDomiciliationBancaire2() {
		return $this->domiciliationBancaire2;
	}

	/**
	 * Get the echeance fin decade.
	 *
	 * @return boolean Returns the echeance fin decade.
	 */
	public function getEcheanceFinDecade() {
		return $this->echeanceFinDecade;
	}

	/**
	 * Get the facture euros.
	 *
	 * @return boolean Returns the facture euros.
	 */
	public function getFactureEuros() {
		return $this->factureEuros;
	}

	/**
	 * Get the groupe.
	 *
	 * @return string Returns the groupe.
	 */
	public function getGroupe() {
		return $this->groupe;
	}

	/**
	 * Get the nb b l.
	 *
	 * @return int Returns the nb b l.
	 */
	public function getNbBL() {
		return $this->nbBL;
	}

	/**
	 * Get the nb facture.
	 *
	 * @return int Returns the nb facture.
	 */
	public function getNbFacture() {
		return $this->nbFacture;
	}

	/**
	 * Get the nombre echeances.
	 *
	 * @return string Returns the nombre echeances.
	 */
	public function getNombreEcheances() {
		return $this->nombreEcheances;
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
	 * Get the paiement depart le.
	 *
	 * @return string Returns the paiement depart le.
	 */
	public function getPaiementDepartLe() {
		return $this->paiementDepartLe;
	}

	/**
	 * Get the paiement le.
	 *
	 * @return string Returns the paiement le.
	 */
	public function getPaiementLe() {
		return $this->paiementLe;
	}

	/**
	 * Get the paiement nombre de jours.
	 *
	 * @return int Returns the paiement nombre de jours.
	 */
	public function getPaiementNombreDeJours() {
		return $this->paiementNombreDeJours;
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
	 * Get the remise ligne1.
	 *
	 * @return float Returns the remise ligne1.
	 */
	public function getRemiseLigne1() {
		return $this->remiseLigne1;
	}

	/**
	 * Get the remise ligne2.
	 *
	 * @return float Returns the remise ligne2.
	 */
	public function getRemiseLigne2() {
		return $this->remiseLigne2;
	}

	/**
	 * Get the remise ligne3.
	 *
	 * @return float Returns the remise ligne3.
	 */
	public function getRemiseLigne3() {
		return $this->remiseLigne3;
	}

	/**
	 * Get the remise pied.
	 *
	 * @return float Returns the remise pied.
	 */
	public function getRemisePied() {
		return $this->remisePied;
	}

	/**
	 * Get the remise pied2.
	 *
	 * @return float Returns the remise pied2.
	 */
	public function getRemisePied2() {
		return $this->remisePied2;
	}

	/**
	 * Get the remise pied3.
	 *
	 * @return float Returns the remise pied3.
	 */
	public function getRemisePied3() {
		return $this->remisePied3;
	}

	/**
	 * Get the soumis escompte.
	 *
	 * @return boolean Returns the soumis escompte.
	 */
	public function getSoumisEscompte() {
		return $this->soumisEscompte;
	}

	/**
	 * Get the taux escompte.
	 *
	 * @return float Returns the taux escompte.
	 */
	public function getTauxEscompte() {
		return $this->tauxEscompte;
	}

	/**
	 * Get the type facture.
	 *
	 * @return int Returns the type facture.
	 */
	public function getTypeFacture() {
		return $this->typeFacture;
	}

	/**
	 * Set the actif.
	 *
	 * @param boolean $actif The actif.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setActif($actif) {
		$this->actif = $actif;
		return $this;
	}

	/**
	 * Set the bloque.
	 *
	 * @param boolean $bloque The bloque.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setBloque($bloque) {
		$this->bloque = $bloque;
		return $this;
	}

	/**
	 * Set the cle alpha.
	 *
	 * @param string $cleAlpha The cle alpha.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCleAlpha($cleAlpha) {
		$this->cleAlpha = $cleAlpha;
		return $this;
	}

	/**
	 * Set the client perdu.
	 *
	 * @param boolean $clientPerdu The client perdu.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setClientPerdu($clientPerdu) {
		$this->clientPerdu = $clientPerdu;
		return $this;
	}

	/**
	 * Set the code analytique.
	 *
	 * @param string $codeAnalytique The code analytique.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeAnalytique($codeAnalytique) {
		$this->codeAnalytique = $codeAnalytique;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code client fact.
	 *
	 * @param string $codeClientFact The code client fact.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeClientFact($codeClientFact) {
		$this->codeClientFact = $codeClientFact;
		return $this;
	}

	/**
	 * Set the code devise.
	 *
	 * @param string $codeDevise The code devise.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeDevise($codeDevise) {
		$this->codeDevise = $codeDevise;
		return $this;
	}

	/**
	 * Set the code langue designation article.
	 *
	 * @param string $codeLangueDesignationArticle The code langue designation article.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeLangueDesignationArticle($codeLangueDesignationArticle) {
		$this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
		return $this;
	}

	/**
	 * Set the code reglement.
	 *
	 * @param string $codeReglement The code reglement.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeReglement($codeReglement) {
		$this->codeReglement = $codeReglement;
		return $this;
	}

	/**
	 * Set the code t v a.
	 *
	 * @param string $codeTVA The code t v a.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeTVA($codeTVA) {
		$this->codeTVA = $codeTVA;
		return $this;
	}

	/**
	 * Set the code ventil compta.
	 *
	 * @param string $codeVentilCompta The code ventil compta.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCodeVentilCompta($codeVentilCompta) {
		$this->codeVentilCompta = $codeVentilCompta;
		return $this;
	}

	/**
	 * Set the collectif.
	 *
	 * @param string $collectif The collectif.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setCollectif($collectif) {
		$this->collectif = $collectif;
		return $this;
	}

	/**
	 * Set the date entree.
	 *
	 * @param DateTime $dateEntree The date entree.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setDateEntree(DateTime $dateEntree = null) {
		$this->dateEntree = $dateEntree;
		return $this;
	}

	/**
	 * Set the date sortie.
	 *
	 * @param DateTime $dateSortie The date sortie.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setDateSortie(DateTime $dateSortie = null) {
		$this->dateSortie = $dateSortie;
		return $this;
	}

	/**
	 * Set the domiciliation bancaire1.
	 *
	 * @param string $domiciliationBancaire1 The domiciliation bancaire1.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setDomiciliationBancaire1($domiciliationBancaire1) {
		$this->domiciliationBancaire1 = $domiciliationBancaire1;
		return $this;
	}

	/**
	 * Set the domiciliation bancaire2.
	 *
	 * @param string $domiciliationBancaire2 The domiciliation bancaire2.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setDomiciliationBancaire2($domiciliationBancaire2) {
		$this->domiciliationBancaire2 = $domiciliationBancaire2;
		return $this;
	}

	/**
	 * Set the echeance fin decade.
	 *
	 * @param boolean $echeanceFinDecade The echeance fin decade.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setEcheanceFinDecade($echeanceFinDecade) {
		$this->echeanceFinDecade = $echeanceFinDecade;
		return $this;
	}

	/**
	 * Set the facture euros.
	 *
	 * @param boolean $factureEuros The facture euros.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setFactureEuros($factureEuros) {
		$this->factureEuros = $factureEuros;
		return $this;
	}

	/**
	 * Set the groupe.
	 *
	 * @param string $groupe The groupe.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setGroupe($groupe) {
		$this->groupe = $groupe;
		return $this;
	}

	/**
	 * Set the nb b l.
	 *
	 * @param int $nbBL The nb b l.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setNbBL($nbBL) {
		$this->nbBL = $nbBL;
		return $this;
	}

	/**
	 * Set the nb facture.
	 *
	 * @param int $nbFacture The nb facture.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setNbFacture($nbFacture) {
		$this->nbFacture = $nbFacture;
		return $this;
	}

	/**
	 * Set the nombre echeances.
	 *
	 * @param string $nombreEcheances The nombre echeances.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setNombreEcheances($nombreEcheances) {
		$this->nombreEcheances = $nombreEcheances;
		return $this;
	}

	/**
	 * Set the numero compte.
	 *
	 * @param string $numeroCompte The numero compte.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setNumeroCompte($numeroCompte) {
		$this->numeroCompte = $numeroCompte;
		return $this;
	}

	/**
	 * Set the paiement depart le.
	 *
	 * @param string $paiementDepartLe The paiement depart le.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setPaiementDepartLe($paiementDepartLe) {
		$this->paiementDepartLe = $paiementDepartLe;
		return $this;
	}

	/**
	 * Set the paiement le.
	 *
	 * @param string $paiementLe The paiement le.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setPaiementLe($paiementLe) {
		$this->paiementLe = $paiementLe;
		return $this;
	}

	/**
	 * Set the paiement nombre de jours.
	 *
	 * @param int $paiementNombreDeJours The paiement nombre de jours.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setPaiementNombreDeJours($paiementNombreDeJours) {
		$this->paiementNombreDeJours = $paiementNombreDeJours;
		return $this;
	}

	/**
	 * Set the r i b.
	 *
	 * @param string $rIB The r i b.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setRIB($rIB) {
		$this->rIB = $rIB;
		return $this;
	}

	/**
	 * Set the remise ligne1.
	 *
	 * @param float $remiseLigne1 The remise ligne1.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setRemiseLigne1($remiseLigne1) {
		$this->remiseLigne1 = $remiseLigne1;
		return $this;
	}

	/**
	 * Set the remise ligne2.
	 *
	 * @param float $remiseLigne2 The remise ligne2.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setRemiseLigne2($remiseLigne2) {
		$this->remiseLigne2 = $remiseLigne2;
		return $this;
	}

	/**
	 * Set the remise ligne3.
	 *
	 * @param float $remiseLigne3 The remise ligne3.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setRemiseLigne3($remiseLigne3) {
		$this->remiseLigne3 = $remiseLigne3;
		return $this;
	}

	/**
	 * Set the remise pied.
	 *
	 * @param float $remisePied The remise pied.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setRemisePied($remisePied) {
		$this->remisePied = $remisePied;
		return $this;
	}

	/**
	 * Set the remise pied2.
	 *
	 * @param float $remisePied2 The remise pied2.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setRemisePied2($remisePied2) {
		$this->remisePied2 = $remisePied2;
		return $this;
	}

	/**
	 * Set the remise pied3.
	 *
	 * @param float $remisePied3 The remise pied3.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setRemisePied3($remisePied3) {
		$this->remisePied3 = $remisePied3;
		return $this;
	}

	/**
	 * Set the soumis escompte.
	 *
	 * @param boolean $soumisEscompte The soumis escompte.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setSoumisEscompte($soumisEscompte) {
		$this->soumisEscompte = $soumisEscompte;
		return $this;
	}

	/**
	 * Set the taux escompte.
	 *
	 * @param float $tauxEscompte The taux escompte.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setTauxEscompte($tauxEscompte) {
		$this->tauxEscompte = $tauxEscompte;
		return $this;
	}

	/**
	 * Set the type facture.
	 *
	 * @param int $typeFacture The type facture.
	 * @return GroupesClient Returns this groupes client.
	 */
	public function setTypeFacture($typeFacture) {
		$this->typeFacture = $typeFacture;
		return $this;
	}

}
