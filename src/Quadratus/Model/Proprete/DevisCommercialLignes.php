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
 * Devis commercial lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class DevisCommercialLignes {

	/**
	 * Code affaire.
	 *
	 * @var string
	 */
	private $codeAffaire;

	/**
	 * Code affaire ligne.
	 *
	 * @var string
	 */
	private $codeAffaireLigne;

	/**
	 * Code anal article.
	 *
	 * @var string
	 */
	private $codeAnalArticle;

	/**
	 * Code article.
	 *
	 * @var string
	 */
	private $codeArticle;

	/**
	 * Code chantier.
	 *
	 * @var string
	 */
	private $codeChantier;

	/**
	 * Code chantier ligne.
	 *
	 * @var string
	 */
	private $codeChantierLigne;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code regroupement.
	 *
	 * @var string
	 */
	private $codeRegroupement;

	/**
	 * Code t v a article.
	 *
	 * @var string
	 */
	private $codeTVAArticle;

	/**
	 * Code unite.
	 *
	 * @var string
	 */
	private $codeUnite;

	/**
	 * Code ventil article.
	 *
	 * @var string
	 */
	private $codeVentilArticle;

	/**
	 * Depuis deb fac.
	 *
	 * @var boolean
	 */
	private $depuisDebFac;

	/**
	 * Designation.
	 *
	 * @var string
	 */
	private $designation;

	/**
	 * Designation2.
	 *
	 * @var string
	 */
	private $designation2;

	/**
	 * Designation3.
	 *
	 * @var string
	 */
	private $designation3;

	/**
	 * Designation bis.
	 *
	 * @var string
	 */
	private $designationBis;

	/**
	 * Designation bis2.
	 *
	 * @var string
	 */
	private $designationBis2;

	/**
	 * Designation bis3.
	 *
	 * @var string
	 */
	private $designationBis3;

	/**
	 * Designation r t f.
	 *
	 * @var string
	 */
	private $designationRTF;

	/**
	 * Imprimer dans pied.
	 *
	 * @var boolean
	 */
	private $imprimerDansPied;

	/**
	 * Montant unitaire taxe.
	 *
	 * @var float
	 */
	private $montantUnitaireTaxe;

	/**
	 * Mot cle dans pied.
	 *
	 * @var string
	 */
	private $motCleDansPied;

	/**
	 * Numero devis.
	 *
	 * @var string
	 */
	private $numeroDevis;

	/**
	 * Numero ligne.
	 *
	 * @var int
	 */
	private $numeroLigne;

	/**
	 * Periode ventil marge.
	 *
	 * @var DateTime
	 */
	private $periodeVentilMarge;

	/**
	 * Poste rent.
	 *
	 * @var string
	 */
	private $posteRent;

	/**
	 * Prix achat.
	 *
	 * @var float
	 */
	private $prixAchat;

	/**
	 * Prix unitaire.
	 *
	 * @var float
	 */
	private $prixUnitaire;

	/**
	 * Px devis.
	 *
	 * @var boolean
	 */
	private $pxDevis;

	/**
	 * Quantite.
	 *
	 * @var float
	 */
	private $quantite;

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
	 * Taux tva article.
	 *
	 * @var float
	 */
	private $tauxTvaArticle;

	/**
	 * Taux tva taxe.
	 *
	 * @var float
	 */
	private $tauxTvaTaxe;

	/**
	 * Ventil marge.
	 *
	 * @var boolean
	 */
	private $ventilMarge;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the code affaire ligne.
	 *
	 * @return string Returns the code affaire ligne.
	 */
	public function getCodeAffaireLigne() {
		return $this->codeAffaireLigne;
	}

	/**
	 * Get the code anal article.
	 *
	 * @return string Returns the code anal article.
	 */
	public function getCodeAnalArticle() {
		return $this->codeAnalArticle;
	}

	/**
	 * Get the code article.
	 *
	 * @return string Returns the code article.
	 */
	public function getCodeArticle() {
		return $this->codeArticle;
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
	 * Get the code chantier ligne.
	 *
	 * @return string Returns the code chantier ligne.
	 */
	public function getCodeChantierLigne() {
		return $this->codeChantierLigne;
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
	 * Get the code regroupement.
	 *
	 * @return string Returns the code regroupement.
	 */
	public function getCodeRegroupement() {
		return $this->codeRegroupement;
	}

	/**
	 * Get the code t v a article.
	 *
	 * @return string Returns the code t v a article.
	 */
	public function getCodeTVAArticle() {
		return $this->codeTVAArticle;
	}

	/**
	 * Get the code unite.
	 *
	 * @return string Returns the code unite.
	 */
	public function getCodeUnite() {
		return $this->codeUnite;
	}

	/**
	 * Get the code ventil article.
	 *
	 * @return string Returns the code ventil article.
	 */
	public function getCodeVentilArticle() {
		return $this->codeVentilArticle;
	}

	/**
	 * Get the depuis deb fac.
	 *
	 * @return boolean Returns the depuis deb fac.
	 */
	public function getDepuisDebFac() {
		return $this->depuisDebFac;
	}

	/**
	 * Get the designation.
	 *
	 * @return string Returns the designation.
	 */
	public function getDesignation() {
		return $this->designation;
	}

	/**
	 * Get the designation2.
	 *
	 * @return string Returns the designation2.
	 */
	public function getDesignation2() {
		return $this->designation2;
	}

	/**
	 * Get the designation3.
	 *
	 * @return string Returns the designation3.
	 */
	public function getDesignation3() {
		return $this->designation3;
	}

	/**
	 * Get the designation bis.
	 *
	 * @return string Returns the designation bis.
	 */
	public function getDesignationBis() {
		return $this->designationBis;
	}

	/**
	 * Get the designation bis2.
	 *
	 * @return string Returns the designation bis2.
	 */
	public function getDesignationBis2() {
		return $this->designationBis2;
	}

	/**
	 * Get the designation bis3.
	 *
	 * @return string Returns the designation bis3.
	 */
	public function getDesignationBis3() {
		return $this->designationBis3;
	}

	/**
	 * Get the designation r t f.
	 *
	 * @return string Returns the designation r t f.
	 */
	public function getDesignationRTF() {
		return $this->designationRTF;
	}

	/**
	 * Get the imprimer dans pied.
	 *
	 * @return boolean Returns the imprimer dans pied.
	 */
	public function getImprimerDansPied() {
		return $this->imprimerDansPied;
	}

	/**
	 * Get the montant unitaire taxe.
	 *
	 * @return float Returns the montant unitaire taxe.
	 */
	public function getMontantUnitaireTaxe() {
		return $this->montantUnitaireTaxe;
	}

	/**
	 * Get the mot cle dans pied.
	 *
	 * @return string Returns the mot cle dans pied.
	 */
	public function getMotCleDansPied() {
		return $this->motCleDansPied;
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
	 * Get the numero ligne.
	 *
	 * @return int Returns the numero ligne.
	 */
	public function getNumeroLigne() {
		return $this->numeroLigne;
	}

	/**
	 * Get the periode ventil marge.
	 *
	 * @return DateTime Returns the periode ventil marge.
	 */
	public function getPeriodeVentilMarge() {
		return $this->periodeVentilMarge;
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
	 * Get the prix achat.
	 *
	 * @return float Returns the prix achat.
	 */
	public function getPrixAchat() {
		return $this->prixAchat;
	}

	/**
	 * Get the prix unitaire.
	 *
	 * @return float Returns the prix unitaire.
	 */
	public function getPrixUnitaire() {
		return $this->prixUnitaire;
	}

	/**
	 * Get the px devis.
	 *
	 * @return boolean Returns the px devis.
	 */
	public function getPxDevis() {
		return $this->pxDevis;
	}

	/**
	 * Get the quantite.
	 *
	 * @return float Returns the quantite.
	 */
	public function getQuantite() {
		return $this->quantite;
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
	 * Get the taux tva article.
	 *
	 * @return float Returns the taux tva article.
	 */
	public function getTauxTvaArticle() {
		return $this->tauxTvaArticle;
	}

	/**
	 * Get the taux tva taxe.
	 *
	 * @return float Returns the taux tva taxe.
	 */
	public function getTauxTvaTaxe() {
		return $this->tauxTvaTaxe;
	}

	/**
	 * Get the ventil marge.
	 *
	 * @return boolean Returns the ventil marge.
	 */
	public function getVentilMarge() {
		return $this->ventilMarge;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code affaire ligne.
	 *
	 * @param string $codeAffaireLigne The code affaire ligne.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeAffaireLigne($codeAffaireLigne) {
		$this->codeAffaireLigne = $codeAffaireLigne;
		return $this;
	}

	/**
	 * Set the code anal article.
	 *
	 * @param string $codeAnalArticle The code anal article.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeAnalArticle($codeAnalArticle) {
		$this->codeAnalArticle = $codeAnalArticle;
		return $this;
	}

	/**
	 * Set the code article.
	 *
	 * @param string $codeArticle The code article.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeArticle($codeArticle) {
		$this->codeArticle = $codeArticle;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code chantier ligne.
	 *
	 * @param string $codeChantierLigne The code chantier ligne.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeChantierLigne($codeChantierLigne) {
		$this->codeChantierLigne = $codeChantierLigne;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code regroupement.
	 *
	 * @param string $codeRegroupement The code regroupement.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeRegroupement($codeRegroupement) {
		$this->codeRegroupement = $codeRegroupement;
		return $this;
	}

	/**
	 * Set the code t v a article.
	 *
	 * @param string $codeTVAArticle The code t v a article.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeTVAArticle($codeTVAArticle) {
		$this->codeTVAArticle = $codeTVAArticle;
		return $this;
	}

	/**
	 * Set the code unite.
	 *
	 * @param string $codeUnite The code unite.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeUnite($codeUnite) {
		$this->codeUnite = $codeUnite;
		return $this;
	}

	/**
	 * Set the code ventil article.
	 *
	 * @param string $codeVentilArticle The code ventil article.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setCodeVentilArticle($codeVentilArticle) {
		$this->codeVentilArticle = $codeVentilArticle;
		return $this;
	}

	/**
	 * Set the depuis deb fac.
	 *
	 * @param boolean $depuisDebFac The depuis deb fac.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDepuisDebFac($depuisDebFac) {
		$this->depuisDebFac = $depuisDebFac;
		return $this;
	}

	/**
	 * Set the designation.
	 *
	 * @param string $designation The designation.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDesignation($designation) {
		$this->designation = $designation;
		return $this;
	}

	/**
	 * Set the designation2.
	 *
	 * @param string $designation2 The designation2.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDesignation2($designation2) {
		$this->designation2 = $designation2;
		return $this;
	}

	/**
	 * Set the designation3.
	 *
	 * @param string $designation3 The designation3.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDesignation3($designation3) {
		$this->designation3 = $designation3;
		return $this;
	}

	/**
	 * Set the designation bis.
	 *
	 * @param string $designationBis The designation bis.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDesignationBis($designationBis) {
		$this->designationBis = $designationBis;
		return $this;
	}

	/**
	 * Set the designation bis2.
	 *
	 * @param string $designationBis2 The designation bis2.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDesignationBis2($designationBis2) {
		$this->designationBis2 = $designationBis2;
		return $this;
	}

	/**
	 * Set the designation bis3.
	 *
	 * @param string $designationBis3 The designation bis3.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDesignationBis3($designationBis3) {
		$this->designationBis3 = $designationBis3;
		return $this;
	}

	/**
	 * Set the designation r t f.
	 *
	 * @param string $designationRTF The designation r t f.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setDesignationRTF($designationRTF) {
		$this->designationRTF = $designationRTF;
		return $this;
	}

	/**
	 * Set the imprimer dans pied.
	 *
	 * @param boolean $imprimerDansPied The imprimer dans pied.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setImprimerDansPied($imprimerDansPied) {
		$this->imprimerDansPied = $imprimerDansPied;
		return $this;
	}

	/**
	 * Set the montant unitaire taxe.
	 *
	 * @param float $montantUnitaireTaxe The montant unitaire taxe.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setMontantUnitaireTaxe($montantUnitaireTaxe) {
		$this->montantUnitaireTaxe = $montantUnitaireTaxe;
		return $this;
	}

	/**
	 * Set the mot cle dans pied.
	 *
	 * @param string $motCleDansPied The mot cle dans pied.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setMotCleDansPied($motCleDansPied) {
		$this->motCleDansPied = $motCleDansPied;
		return $this;
	}

	/**
	 * Set the numero devis.
	 *
	 * @param string $numeroDevis The numero devis.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setNumeroDevis($numeroDevis) {
		$this->numeroDevis = $numeroDevis;
		return $this;
	}

	/**
	 * Set the numero ligne.
	 *
	 * @param int $numeroLigne The numero ligne.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setNumeroLigne($numeroLigne) {
		$this->numeroLigne = $numeroLigne;
		return $this;
	}

	/**
	 * Set the periode ventil marge.
	 *
	 * @param DateTime $periodeVentilMarge The periode ventil marge.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setPeriodeVentilMarge(DateTime $periodeVentilMarge = null) {
		$this->periodeVentilMarge = $periodeVentilMarge;
		return $this;
	}

	/**
	 * Set the poste rent.
	 *
	 * @param string $posteRent The poste rent.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setPosteRent($posteRent) {
		$this->posteRent = $posteRent;
		return $this;
	}

	/**
	 * Set the prix achat.
	 *
	 * @param float $prixAchat The prix achat.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setPrixAchat($prixAchat) {
		$this->prixAchat = $prixAchat;
		return $this;
	}

	/**
	 * Set the prix unitaire.
	 *
	 * @param float $prixUnitaire The prix unitaire.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setPrixUnitaire($prixUnitaire) {
		$this->prixUnitaire = $prixUnitaire;
		return $this;
	}

	/**
	 * Set the px devis.
	 *
	 * @param boolean $pxDevis The px devis.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setPxDevis($pxDevis) {
		$this->pxDevis = $pxDevis;
		return $this;
	}

	/**
	 * Set the quantite.
	 *
	 * @param float $quantite The quantite.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setQuantite($quantite) {
		$this->quantite = $quantite;
		return $this;
	}

	/**
	 * Set the remise ligne1.
	 *
	 * @param float $remiseLigne1 The remise ligne1.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setRemiseLigne1($remiseLigne1) {
		$this->remiseLigne1 = $remiseLigne1;
		return $this;
	}

	/**
	 * Set the remise ligne2.
	 *
	 * @param float $remiseLigne2 The remise ligne2.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setRemiseLigne2($remiseLigne2) {
		$this->remiseLigne2 = $remiseLigne2;
		return $this;
	}

	/**
	 * Set the remise ligne3.
	 *
	 * @param float $remiseLigne3 The remise ligne3.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setRemiseLigne3($remiseLigne3) {
		$this->remiseLigne3 = $remiseLigne3;
		return $this;
	}

	/**
	 * Set the taux tva article.
	 *
	 * @param float $tauxTvaArticle The taux tva article.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setTauxTvaArticle($tauxTvaArticle) {
		$this->tauxTvaArticle = $tauxTvaArticle;
		return $this;
	}

	/**
	 * Set the taux tva taxe.
	 *
	 * @param float $tauxTvaTaxe The taux tva taxe.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setTauxTvaTaxe($tauxTvaTaxe) {
		$this->tauxTvaTaxe = $tauxTvaTaxe;
		return $this;
	}

	/**
	 * Set the ventil marge.
	 *
	 * @param boolean $ventilMarge The ventil marge.
	 * @return DevisCommercialLignes Returns this devis commercial lignes.
	 */
	public function setVentilMarge($ventilMarge) {
		$this->ventilMarge = $ventilMarge;
		return $this;
	}

}
